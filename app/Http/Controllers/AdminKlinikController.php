<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_Klinik;

class AdminKlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminKliniks = Admin_Klinik::all();
        return view('admin_kliniks.index', compact('adminKliniks'));
    }

    public function tampilkan_dashboard_klinik()
    {
        return view('klinik.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('klinik.profil.profil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'nama_klinik' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'jam_buka' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $validatedData['foto'] = basename($path);
        }

        Admin_Klinik::create($validatedData);

        return redirect()->route('admin_kliniks.index')->with('success', 'Admin Klinik created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $adminKlinik = Admin_Klinik::findOrFail($id);
        return view('admin_kliniks.show', compact('adminKlinik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adminKlinik = Admin_Klinik::findOrFail($id);
        return view('klinik.profil.update_profil', compact('adminKlinik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $adminKlinik = Admin_Klinik::findOrFail($id);

        $validatedData = $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'nama_klinik' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'jam_buka' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $validatedData['foto'] = basename($path);
        }

        $adminKlinik->update($validatedData);

        return redirect()->route('admin_kliniks.index')->with('success', 'Admin Klinik updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adminKlinik = Admin_Klinik::findOrFail($id);
        $adminKlinik->delete();

        return redirect()->route('admin_kliniks.index')->with('success', 'Admin Klinik deleted successfully.');
    }
}
