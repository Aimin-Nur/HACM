<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Services\LogServices;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        return view('auth.register', compact('provinces','regencies','districts'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'nik' => ['required', 'integer', 'digits:16', 'unique:' . User::class],
                'name' => ['required', 'string', 'max:255', 'unique:' . User::class],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'roles' => ['required', 'in:Specialist Doctor,Doctor,Nurse,Student'],
                'address' => ['required'],
                'phone_number' => ['required', 'max:255'],
            ], [
                'nik.int' => 'NIK must be number (numeric).',
                'nik.digits' => 'NIK must consist of exactly 16 digits.',
                'nik.unique' => 'NIK has been registered.',
            ]);

            $user = User::create([
                'NIK' => $request->nik,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'provinsi' => $request->province,
                'kota' => $request->city,
                'kecamatan' => $request->district,
                'password' => Hash::make($request->password),
                'roles' => $request->roles,
                'active' => 1,
            ]);

            event(new Registered($user));

            // Log Service
            LogServices::logServices('Register User', 'Success Register User', $user);

            session()->flash('status', 'Registration Successful!');
            return redirect()->route('login');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors()->all();

            $errorMessage = implode(', ', $errors);
            $ipUser = $request->ip();

            // Log Service
            LogServices::logServices('Register User', 'Failed Register User: ' . $errorMessage, $ipUser);
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            // Menangani pengecualian umum lainnya
            $ipUser = $request->ip();
            LogServices::logServices('Register User', 'Failed Register User :' . $e->getMessage(), $ipUser);

            return back()->with('error', 'Registration failed. Please try again.')->withInput();
        }
    }

    public function getCities(Request $request)
    {
        $cities = Regency::where('province_id', $request->province_id)->get();
        return response()->json($cities);
    }

    public function getDistricts(Request $request)
    {
        $districts = District::where('regency_id', $request->city_id)->get();
        return response()->json($districts);
    }

}
