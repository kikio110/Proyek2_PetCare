<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminKlinikAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('klinikauth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'admin_klink') {
            return redirect()->intended('/dashboard_klinik')
                ->withSuccess('You have successfully logged in!');
            } else {
                return back()->withErrors([
                    'email' => 'You do not have permission to access the Klinik dashboard.',]);
            }
        }
    
        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('klinikauth.admin-register');
    }

    public function register(Request $request)
    {
        // Validasi data
        $request->validate([
            
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            
        ]);
    
        // Membuat pengguna baru
        $user = User::create([
            
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin_klinik',
        ]);
    
        // Mengasosiasikan peran dengan pengguna
        $role = User::where('email', 'admin_klinik')->first();
        $user->roles()->attach($role);
    
        return redirect('/dashboard_klinik');
    }
}
