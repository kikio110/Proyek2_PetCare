<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dokterauth.login-dokter');
    }

    public function login(Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $user = Auth::user();
        if ($user->role == 'dokter') {
        return redirect()->intended('/dashboard_dokter')
            ->withSuccess('You have successfully logged in!');
        } else {
            return back()->withErrors([
                'email' => 'You do not have permission to access the Dokter dashboard.',]);
        }
    }

    return back()->withErrors([
        'email' => 'Your provided credentials do not match our records.',
    ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
