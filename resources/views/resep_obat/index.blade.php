@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Resep Obat</h2>
    <a href="{{ route('resep-obat.create') }}" class="btn btn-primary">Tambah Resep Obat</a>
</div>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th width="5%">No</th>
            <th>Konsultasi ID / Pasien</th>
            <th>Nama Obat</th>
            <th>Dosis</th>
            <th>Aturan Pakai</th>
            <th width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($reseps as $index => $resep)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $resep->konsultasi->pasien->nama ?? 'Konsultasi #' . $resep->konsultasi_id }}</td>
                <td>{{ $resep->nama_obat }}</td>
                <td>{{ $resep->dosis }}</td>
                <td>{{ $resep->aturan_pakai }}</td>
                <td>
                    <a href="{{ route('resep-obat.edit', $resep->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('resep-obat.destroy', $resep->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus resep ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data resep obat.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection