<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use App\Jobs\SendPaymentNotification;
use App\Jobs\GenerateTicketPdfJob;
use PDF;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Services\GetUser;

class UserController extends Controller
{
    protected $getGuard;

    public function __construct(GetUser $getGuard)
    {
        $this->getGuard = $getGuard;
    }

    public function index()
    {
        $getUser = $this->getGuard->getCurrentUser();
        return view('users.index', compact('getUser'));
    }

    public function class()
    {
        $getUser = $this->getGuard->getCurrentUser();

        $getClass = Kelas::where('active', 1)->get();
        return view('users.class', compact('getClass', 'getUser'));
    }

    public function submitPayment(Request $request, $id)
    {
        // Validasi data request
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            session()->flash('error', $firstError);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $id_user = auth()->id();
                $user = User::find($id_user);
                $filename = $user->name . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/payments', $filename);

                // Simpan detail pembayaran ke database
                $order = Order::create([
                    'id_class' => $id,
                    'id_users' => $id_user,
                    'payment_proof' => $filename,
                ]);

                SendPaymentNotification::dispatch($user, $order);

                return redirect()->route('order')->with('success', 'Proof of payment has been successfully saved, please check your email regularly for more information!');
            }

            return redirect()->route('order')->with('error', 'There is some problem, plese try again!');

        } catch (\Exception $e) {
            return redirect()->route('order')->with('error', 'Failed: ' . $e->getMessage());
        }
    }

    public function homeSubmitPayment(Request $request, $id)
    {
        // Validasi data request
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return response()->json([
                'status' => 'error',
                'message' => $firstError
            ], 400); // Status HTTP 400: Bad Request
        }

        try {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $id_user = auth()->id();
                $user = User::find($id_user);
                $filename = $user->name . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/payments', $filename);

                // Simpan detail pembayaran ke database
                $order = Order::create([
                    'id_class' => $id,
                    'id_users' => $id_user,
                    'payment_proof' => $filename,
                ]);

                SendPaymentNotification::dispatch($user, $order);

                // Kembalikan JSON dengan status sukses dan URL redirect
                return response()->json([
                    'status' => 'success',
                    'message' => 'Proof of payment has been successfully saved, please check your email regularly for more information!',
                    'redirect_url' => route('order') // URL untuk redirect
                ], 200); // Status HTTP 200: OK
            }

            return response()->json([
                'status' => 'error',
                'message' => 'There is some problem, please try again!'
            ], 400); // Status HTTP 400: Bad Request

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed: ' . $e->getMessage()
            ], 500); // Status HTTP 500: Internal Server Error
        }
    }

    public function order()
    {
        $getUser = $this->getGuard->getCurrentUser();
        $getIdUser = $getUser->id;

        $getOrderUser = Order::where('id_users', $getIdUser)->orderBy('updated_at', 'desc')->get();
        $getTicketUser = Ticket::where('id_users', $getIdUser)->orderBy('updated_at', 'desc')->get();
        return view('users.order-ticket', compact('getOrderUser','getTicketUser','getUser'));
    }

    public function generateTicket(Request $request, $id)
    {
        try {
            $user = auth()->user();
            $idUser = $user->id;

            // Ambil data tiket berdasarkan ID pengguna
            $getTicket = Ticket::where('id_users', $idUser)->where('id', $id)->firstOrFail();
            $getTicket->generate_ticket = 1;

            // Simpan perubahan pada tiket
            $getTicket->save();

            // Siapkan data untuk PDF
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'ticket_code' => $getTicket->ticket_code,
                'date' => $getTicket->created_at,
                'class_name' => $getTicket->kelas->class_name
            ];

            // Buat PDF
            $pdf = PDF::loadView('ticket.ticket', $data)->setPaper([0, 0, 397.6378, 510.236], 'landscape');

            return $pdf->download('ticket.pdf');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }


    // public function checkTicketStatus(Request $request)
    // {
    //     $jobId = $request->input('job_id');
    //     $downloadUrl = Cache::get($jobId);

    //     if ($downloadUrl) {
    //         return response()->json(['status' => 'completed', 'download_url' => $downloadUrl]);
    //     }

    //     return response()->json(['status' => 'processing']);
    // }



}
