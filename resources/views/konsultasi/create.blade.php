@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Konsultasi</h2>
    <form action="{{ route('konsultasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Pilih Pasien</label>
            <select name="pasien_id" class="form-control" required>
                <option value="">-- Pilih Pasien --</option>
                @foreach($pasiens as $pasien)
                    <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Pilih Dokter</label>
            <select name="dokter_id" class="form-control" required>
                <option value="">-- Pilih Dokter --</option>
                @foreach($dokters as $dokter)
                    <option value="{{ $dokter->id }}">{{ $dokter->nama }} ({{ $dokter->spesialis }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Konsultasi</label>
            <input type="date" name="tanggal_konsultasi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keluhan</label>
            <textarea name="keluhan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('konsultasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection