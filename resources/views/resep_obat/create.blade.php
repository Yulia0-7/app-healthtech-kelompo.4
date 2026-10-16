@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Resep Obat</h2>
    <form action="{{ route('resep-obat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Pilih ID Konsultasi</label>
            <select name="konsultasi_id" class="form-control" required>
                <option value="">-- Pilih Konsultasi --</option>
                @foreach($konsultasis as $konsultasi)
                    <option value="{{ $konsultasi->id }}">ID: {{ $konsultasi->id }} - Keluhan: {{ $konsultasi->keluhan }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dosis</label>
            <input type="text" name="dosis" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('resep-obat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection