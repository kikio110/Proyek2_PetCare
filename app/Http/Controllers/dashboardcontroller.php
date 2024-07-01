<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dashboardcontroller extends Controller
{
    public function dashboard_petowner()
    {
        return view("petowner.dashboard");
    }

    public function dashboard_admin()
    {
        //menghitung jumlah user klinik
        $klinik = User::where('role', 'admin_klinik')->count();
        //menghitung jumlah user petowner
        $petowner = User::where('role', 'petowner')->count();
        //menghitung jumlah user dokter
        $dokter = User::where('role', 'dokter')->count();
        //menampilkan jumlah user klinik, petowner, dan dokter
        return view("admin.dashboard", compact('klinik', 'petowner', 'dokter'));
    }

    public function dashboard_klinik()
    {
        return view("klinik.dashboard");
    }

    public function dashboard_dokter()
    {
        return view("dokter.dashboard");
    }
}

