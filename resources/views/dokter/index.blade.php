@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Dokter</h2>
    <a href="{{ route('dokter.create') }}" class="btn btn-primary">Tambah Dokter</a>
</div>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th width="5%">No</th>
            <th>Nama Dokter</th>
            <th>Spesialisasi</th>
            <th>No Telepon</th>
            <th width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($dokters as $index => $dokter)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $dokter->nama }}</td>
                <td>{{ $dokter->spesialisasi }}</td>
                <td>{{ $dokter->no_telepon }}</td>
                <td>
                    <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data dokter ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data dokter.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection