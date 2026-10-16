<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResepObat;
use App\Models\Konsultasi;

class ResepObatController extends Controller
{
    public function index()
    {
        $resepObats = ResepObat::all();
        return view('resep-obat.index', compact('resepObats'));
    }

    public function create()
    {
        $konsultasis = Konsultasi::all();
        return view('resep-obat.create', compact('konsultasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'konsultasi_id' => 'required',
            'nama_obat' => 'required',
            'dosis' => 'required',
        ]);

        ResepObat::create($request->all());

        return redirect()->route('resep-obat.index')->with('success', 'Data resep obat berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $resepObat = ResepObat::findOrFail($id);
        $resepObat->delete();

        return redirect()->route('resep-obat.index')->with('success', 'Data resep obat berhasil dihapus.');
    }
}