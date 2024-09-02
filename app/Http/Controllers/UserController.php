<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;

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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();

            session()->flash('error', $firstError);

            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $id_user = auth()->id();
                $getName = User::where('id', $id_user)->first();
                $filename = $getName->name . '_' . time();
                $file->storeAs('public/payments', $filename);

                // Save the payment details to the database
                Order::create([
                    'id_class' => $id,
                    'id_users' => auth()->id(),
                    'status' => 0,
                    'payment_proof' => $filename,
                ]);

                // Flash success message to session
                session()->flash('success', 'Payment submitted successfully!');
                return redirect('/class')->session('status', 'success');
            }

            // Handle the case where no file was uploaded (should not normally reach here)
            session()->flash('success', 'Payment submitted successfully!');
            return redirect('/class')->session('error', 'No file uploaded.');

        } catch (\Exception $e) {
            // Flash error message to session
            return redirect()->back()->with('error', 'Failed: ' . $e->getMessage())->withInput();
        }
    }



}
