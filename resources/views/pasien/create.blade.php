@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Pasien</h2>
    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>No Telepon</label>
            <input type="text" name="no_telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection