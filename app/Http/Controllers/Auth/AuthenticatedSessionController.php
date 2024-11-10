<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Services\LogServices;
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

        $ipUser = $request->ip();
        $getUser = Auth()->user();

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($credentials)) {
                $request->session()->regenerate();
                Auth::shouldUse($guard);  // Set the current guard

                // Redirect based on guard
                if ($guard === 'superadmin') {
                    LogServices::logServices('login', 'Superadmin Successfully logged in', $ipUser);
                    return redirect()->intended(RouteServiceProvider::SUPERADMIN);
                } elseif ($guard === 'admin') {
                    LogServices::logServices('login', 'Admin Successfully logged in', $ipUser);
                    return redirect()->intended(RouteServiceProvider::ADMIN);
                }elseif ($guard === 'web') {
                    LogServices::logServices('login', 'User Successfully logged in', $ipUser);
                    return redirect()->intended(RouteServiceProvider::HOME);
                }
            }
        }

        $ipUser = $request->ip();
        LogServices::logServices('login_failed', 'Failed login attempt from IP: ' . $ipUser, $ipUser);
        return back()->withErrors([
            'email' => 'Your email or password is not registered',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        try {
            $auth = Auth()->user()->id;

            // Log Service
            LogServices::logServices('Logout User', 'Success Logout User', $auth);

            // Proses logout
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        } catch (\Exception $e) {
            // Log Service
            $ipUser = $request->ip();
            LogServices::logServices('Logout User', 'Failed Logout User : ' .$e->getMessage(), $ipUser);
            return back()->with('error', 'Logout failed. Please try again.');
        }
    }

    /**
     * Handle an incoming logout request for admin.
     */
    public function logoutAdmin(Request $request): RedirectResponse
    {
        try {
            $auth = Auth()->user()->id;

            // Log Service
            LogServices::logServices('Logout Admin', 'Success Logout Admin', $auth);

            // Proses logout
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        } catch (\Exception $e) {
            // Log Service
            $ipUser = $request->ip();
            LogServices::logServices('Logout Admin', 'Failed Logout Admin : ' .$e->getMessage(), $ipUser);
            return back()->with('error', 'Logout failed. Please try again.');
        }
    }

    /**
     * Handle an incoming logout request for superadmin.
     */
    public function logoutSuperadmin(Request $request): RedirectResponse
    {
        try {
            $auth = Auth()->user()->id;

            // Log Service
            LogServices::logServices('Logout Superadmin', 'Success Logout Superadmin', $auth);

            // Proses logout
            Auth::guard('superadmin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        } catch (\Exception $e) {
            // Log Service
            $ipUser = $request->ip();
            LogServices::logServices('Logout Superadmin', 'Failed Logout Superadmin : ' .$e->getMessage(), $ipUser);
            return back()->with('error', 'Logout failed. Please try again.');
        }

        return redirect('/');
    }
}
