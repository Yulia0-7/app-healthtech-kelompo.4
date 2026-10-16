<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthTech - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">HealthTech Management System</h1>
            <p class="text-muted">Silakan pilih menu di bawah ini untuk mengelola data:</p>
        </div>

        <div class="row text-center">
            <!-- Menu Pasien -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="card-title text-primary">Pasien</h4>
                            <p class="card-text text-muted small">Kelola data pasien terdaftar.</p>
                        </div>
                        <a href="{{ route('pasien.index') }}" class="btn btn-outline-primary mt-3">Buka Pasien</a>
                    </div>
                </div>
            </div>

            <!-- Menu Dokter -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="card-title text-success">Dokter</h4>
                            <p class="card-text text-muted small">Kelola data dokter & spesialis.</p>
                        </div>
                        <a href="{{ route('dokter.index') }}" class="btn btn-outline-success mt-3">Buka Dokter</a>
                    </div>
                </div>
            </div>

            <!-- Menu Konsultasi -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="card-title text-warning">Konsultasi</h4>
                            <p class="card-text text-muted small">Kelola jadwal & riwayat konsultasi.</p>
                        </div>
                        <a href="{{ route('konsultasi.index') }}" class="btn btn-outline-warning mt-3">Buka Konsultasi</a>
                    </div>
                </div>
            </div>

            <!-- Menu Resep Obat -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="card-title text-danger">Resep Obat</h4>
                            <p class="card-text text-muted small">Kelola resep obat pasien.</p>
                        </div>
                        <a href="{{ route('resep-obat.index') }}" class="btn btn-outline-danger mt-3">Buka Resep Obat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>