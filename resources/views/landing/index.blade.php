<!DOCTYPE html>
<html>
<head>
    <title>Plantify - Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f5e9;
            margin: 0;
            padding: 0;
        }
        .header {
            background: #2e7d32;
            padding: 20px;
            color: white;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .content {
            text-align: center;
            padding: 60px 20px;
        }
        .content h1 {
            font-size: 50px;
            color: #1b5e20;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 18px;
            color: #4e4e4e;
            width: 60%;
            margin: auto;
            line-height: 1.6em;
        }
        .btn {
            display: inline-block;
            background: #43a047;
            color: white;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 30px;
            font-size: 18px;
            transition: 0.2s;
        }
        .btn:hover {
            background: #2e7d32;
        }
        .features {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .card {
            background: white;
            width: 260px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 3px 8px rgba(0,0,0,0.15);
            text-align: center;
        }
        .card h3 {
            color: #2e7d32;
            margin-bottom: 10px;
        }
        .footer {
            padding: 20px;
            text-align: center;
            background: #c8e6c9;
            color: #2e7d32;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Plantify</h2>
    </div>

    <div class="content">
        <h1>Selamat Datang di Plantify</h1>
        <p>
            Aplikasi manajemen tanaman hias sederhana untuk mengelola kategori, stok,
            dan informasi tanaman dengan mudah. Dibuat dengan desain modern dan tema hijau yang segar.
        </p>

        <a href="/dashboard" class="btn">Masuk ke Dashboard</a>

        <div class="features">
            <div class="card">
                <h3>Manajemen Tanaman</h3>
                <p>Tambah, edit, hapus, dan lihat seluruh data tanaman dengan mudah.</p>
            </div>
            <div class="card">
                <h3>Kategori Tanaman</h3>
                <p>Kelola kategori tanaman secara terstruktur dan rapi.</p>
            </div>
            <div class="card">
                <h3>Pencarian Cepat</h3>
                <p>Gunakan fitur search dan filter untuk menemukan tanaman secara instan.</p>
            </div>
        </div>

    </div>

    <div class="footer">
        © 2025 Plantify — Aplikasi Manajemen Tanaman
    </div>

</body>
</html>
