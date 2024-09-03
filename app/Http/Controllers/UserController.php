<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use App\Jobs\SendPaymentNotification;

class UserController extends Controller
{
    public function index()
    {
        $getUser = Auth::user();
        return view('users.index', compact('getUser'));
    }

    public function class()
    {
        $getClass = Kelas::get();
        return view('users.class', compact('getClass'));
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
                $filename = $user->name . '_' . time();
                $file->storeAs('public/payments', $filename);

                // Simpan detail pembayaran ke database
                $order = Order::create([
                    'id_class' => $id,
                    'id_users' => $id_user,
                    'status' => 0,
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



}
