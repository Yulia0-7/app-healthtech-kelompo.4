@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Dokter</h2>
    <form action="{{ route('dokter.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No Telepon</label>
            <input type="text" name="no_telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection