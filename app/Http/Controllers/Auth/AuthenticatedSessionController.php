<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        $guards = ['web', 'admin', 'superadmin'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($credentials)) {
                $request->session()->regenerate();
                Auth::shouldUse($guard);  // Set the current guard

                // Redirect based on guard
                if ($guard === 'superadmin') {
                    return redirect()->intended(RouteServiceProvider::SUPERADMIN);
                } elseif ($guard === 'admin') {
                    return redirect()->intended(RouteServiceProvider::ADMIN);
                }elseif ($guard === 'web') {
                    return redirect()->intended(RouteServiceProvider::HOME);
                }
            }
        }

        return back()->withErrors([
            'email' => 'Your email or password is not registered',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Handle an incoming logout request for admin.
     */
    public function logoutAdmin(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Handle an incoming logout request for superadmin.
     */
    public function logoutSuperadmin(Request $request): RedirectResponse
    {
        Auth::guard('superadmin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
