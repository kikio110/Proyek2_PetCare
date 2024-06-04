<?php
namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemeriksaans = Pemeriksaan::all();
        return view('pemeriksaan.index', compact('pemeriksaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemeriksaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'nomor_telepon' => 'required',
            'klinik' => 'required',
            'nama_hewan' => 'required',
            'jenis_hewan' => 'required',
            'jam_temu' => 'required',
            'tanggal' => 'required',
            'layanan' => 'required',
            'status' => 'required',
        ]);

        Pemeriksaan::create($request->all());
        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        return view('pemeriksaan.show', compact('pemeriksaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        return view('pemeriksaan.edit', compact('pemeriksaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'nomor_telepon' => 'required',
            'klinik' => 'required',
            'nama_hewan' => 'required',
            'jenis_hewan' => 'required',
            'jam_temu' => 'required',
            'tanggal' => 'required',
            'layanan' => 'required',
            'status' => 'required',
        ]);

        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->update($request->all());
        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->delete();
        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil dihapus.');
    }
}
