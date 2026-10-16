@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Pasien</h2>
    <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pasiens as $index => $pasien)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->no_telepon }}</td>
                <td>
                    <!-- Tombol Edit / Hapus -->
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <form action="#" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data pasien.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection