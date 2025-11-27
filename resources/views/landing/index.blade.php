<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantify - Premium Landing</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f1f8f4;
            overflow-x: hidden;
        }

        /* Premium Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.7) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 26px;
            color: #2e7d32 !important;
        }

        .nav-link {
            font-weight: 500;
            color: #2e7d32 !important;
        }

        /* Hero Premium */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            display: flex;
            align-items: center;
            padding: 80px 20px;
        }

        .hero-title {
            font-size: 64px;
            font-weight: 700;
            color: #1b5e20;
            line-height: 1.2;
        }

        .hero-sub {
            font-size: 20px;
            max-width: 600px;
            color: #3b3b3b;
            margin-top: 20px;
        }

        .btn-premium {
            background: #2e7d32;
            color: white;
            padding: 12px 32px;
            font-size: 18px;
            border-radius: 50px;
            transition: 0.3s ease;
            margin-top: 25px;
        }

        .btn-premium:hover {
            background: #1b5e20;
            transform: translateY(-3px);
        }

        /* Glass Feature Cards */
        .glass-card {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(12px);
            border-radius: 18px;
            padding: 35px;
            text-align: center;
            transition: 0.3s;
            border: 1px solid rgba(255,255,255,0.4);
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
        }

        .glass-card i {
            font-size: 48px;
            color: #2e7d32;
        }

        .glass-card h4 {
            margin-top: 15px;
            font-weight: 700;
            color: #1b5e20;
        }

        /* Footer */
        .footer {
            background: #2e7d32;
            color: white;
            padding: 35px;
            margin-top: 80px;
            text-align: center;
            font-size: 15px;
        }

        /* Fade Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Plantify</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#features" class="nav-link">Fitur</a></li>
                    <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="container text-center text-md-start">
            <div class="row align-items-center">

                <div class="col-md-6 fade-in">
                    <h1 class="hero-title">Kelola Tanaman Anda<br>dengan Cara Modern</h1>
                    <p class="hero-sub">
                        Plantify memberikan pengalaman terbaik untuk mengatur tanaman, kategori, dan stok 
                        dengan tampilan premium dan teknologi terbaru.
                    </p>
                    <a href="/dashboard" class="btn btn-premium">
                        Masuk Dashboard <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="col-md-6 text-center fade-in">
                    <img src="https://cdn-icons-png.flaticon.com/512/2906/2906775.png"
                         width="380" class="img-fluid" alt="Tanaman">
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="container mb-5">
        <div class="text-center mb-5 fade-in">
            <h2 class="fw-bold text-success">Fitur Unggulan</h2>
            <p class="text-secondary">Semua alat yang Anda butuhkan untuk mengelola tanaman secara profesional.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4 fade-in">
                <div class="glass-card">
                    <i class="bi bi-flower3"></i>
                    <h4>Manajemen Tanaman</h4>
                    <p>Tambah, edit, hapus, dan kelola tanaman dengan antarmuka terbaru yang mudah digunakan.</p>
                </div>
            </div>

            <div class="col-md-4 fade-in">
                <div class="glass-card">
                    <i class="bi bi-tags-fill"></i>
                    <h4>Kategori Terstruktur</h4>
                    <p>Pemetaan kategori yang rapi untuk mempermudah pengelompokan dan pencarian.</p>
                </div>
            </div>

            <div class="col-md-4 fade-in">
                <div class="glass-card">
                    <i class="bi bi-search"></i>
                    <h4>Pencarian Cepat</h4>
                    <p>Sistem search dan filter yang super cepat untuk menemukan data secara instan.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        © 2025 Plantify — Premium Plant Management App
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
