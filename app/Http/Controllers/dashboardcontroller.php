<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function dashboard_petowner() {
        return view("dashboard-layout.adminkit");
    }

    public function dashboard_admin() {
        return view("dashboard-layout.adminkit");
    }

    public function dashboard_klinik() {
        return view("dashboard-layout.adminkit");
    }

    public function dashboard_dokter() {
        return view("dashboard-layout.adminkit");
    }
}
