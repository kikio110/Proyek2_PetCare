<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function show_landingpage() {
        return view('landing-page.landing-page');
    }
    public function show_mitra () {
        return view('landingpage-mitra.landingpage-mitra');
    }
    public function show_tentang() {
        return view('landing-page.tentang');
    }
    public function show_menu() {
        return view('landing-page.menu');
    }
    public function show_kontak() {
        return view('landing-page.kontak');
    }
}
