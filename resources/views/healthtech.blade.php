```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthTech</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f0f8f7;
            color: #234;
        }

        header {
            background: #087f8c;
            color: white;
            padding: 25px;
            text-align: center;
        }

        nav {
            background: white;
            padding: 15px;
            text-align: center;
        }

        nav a {
            margin: 10px;
            color: #087f8c;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 30px;
            text-align: center;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            width: 190px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #00000012;
        }

        .card h3 {
            color: #087f8c;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #567;
        }
    </style>
</head>

<body>
    <header>
        <h1>HealthTech</h1>
        <p>Sistem Informasi Layanan Kesehatan</p>
    </header>

    <nav>
        <a href="/">Beranda</a>
        <a href="/pasien">Data Pasien</a>
        <a href="/dokter">Data Dokter</a>
        <a href="/konsultasi">Konsultasi</a>
        <a href="/resep-obat">Resep Obat</a>
    </nav>

    <main>
        <h2>Selamat Datang di HealthTech</h2>
        <p>Kelola informasi pasien, dokter, konsultasi, dan resep obat dalam satu aplikasi.</p>

        <div class="cards">
            <div class="card">
                <h3>Data Pasien</h3>
                <p>Pengelolaan informasi pasien.</p>
            </div>

            <div class="card">
                <h3>Data Dokter</h3>
                <p>Informasi dokter dan spesialisasi.</p>
            </div>

            <div class="card">
                <h3>Konsultasi</h3>
                <p>Informasi jadwal dan keluhan konsultasi.</p>
            </div>

            <div class="card">
                <h3>Resep Obat</h3>
                <p>Informasi resep dan aturan penggunaan obat.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 HealthTech - Aplikasi Layanan Kesehatan</p>
    </footer>
</body>
</html>
```