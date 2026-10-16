<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;
use App\Models\Pasien;
use App\Models\Dokter;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasis = Konsultasi::all();
        return view('konsultasi.index', compact('konsultasis'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('konsultasi.create', compact('pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'tanggal_konsultasi' => 'required',
            'keluhan' => 'required',
        ]);

        Konsultasi::create($request->all());

        return redirect()->route('konsultasi.index')->with('success', 'Data konsultasi berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        $konsultasi->delete();

        return redirect()->route('konsultasi.index')->with('success', 'Data konsultasi berhasil dihapus.');
    }
}