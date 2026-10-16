@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Konsultasi</h2>
    <a href="{{ route('konsultasi.create') }}" class="btn btn-primary">Tambah Konsultasi</a>
</div>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th width="5%">No</th>
            <th>Pasien</th>
            <th>Dokter</th>
            <th>Tanggal Konsultasi</th>
            <th>Keluhan</th>
            <th width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($konsultasis as $index => $konsultasi)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $konsultasi->pasien->nama ?? '-' }}</td>
                <td>{{ $konsultasi->dokter->nama ?? '-' }}</td>
                <td>{{ $konsultasi->tanggal_konsultasi }}</td>
                <td>{{ $konsultasi->keluhan }}</td>
                <td>
                    <a href="{{ route('konsultasi.edit', $konsultasi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('konsultasi.destroy', $konsultasi->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus konsultasi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data konsultasi.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection