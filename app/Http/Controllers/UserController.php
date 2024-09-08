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

        $getClass = Kelas::get();
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

                session()->flash('success', 'Bukti pembayaran berhasil dikirim!');
                return redirect('/class')->with('status', 'success');
            }

            session()->flash('error', 'Tidak ada file yang diupload.');
            return redirect()->back()->with('status', 'error')->withInput();

        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function order()
    {
        $getUser = $this->getGuard->getCurrentUser();
        $getIdUser = $getUser->id;

        $getOrderUser = Order::where('id_users', $getIdUser)->get();
        $getTicketUser = Ticket::where('id_users', $getIdUser)->get();
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
