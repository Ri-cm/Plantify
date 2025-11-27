<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <title>Plantify - @yield('title')</title>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #e8f5e9;
        }

        

        /* SIDEBAR */
        .sidebar {
            height: 100vh;
            width: 230px;
            background: #2e7d32;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* penting agar logout di bawah */
        }

        .sidebar .top-area {
            padding-bottom: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        /* Tombol Dark Mode */
        #themeToggle {
            width: 90%;
            margin: 10px auto;
            padding: 10px;
            border-radius: 6px;
            border: none;
            background:#1b5e20;
            color:white;
            cursor:pointer;
            display: block;
            text-align: center;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover {
            background: #1b5e20;
        }

        /* Tombol Logout */
        .logout-btn {
            background: #c62828;
            padding: 12px 20px;
            text-align: center;
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px;
            border-radius: 6px;
        }

        .logout-btn:hover {
            background: #8e0000;
        }

        /* KONTEN */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* CARD */
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }

        /* BUTTON */
        .btn {
            background: #2e7d32;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: #1b5e20;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            border: 1px solid #cfcfcf;
            padding: 10px;
            font-size: 14px;
        }

        table th {
            background: #a5d6a7;
        }

        /* PAGINATION */
        .pagination {
            display: flex;
            list-style: none;
            gap: 5px;
            margin-top: 10px;
        }

        .pagination li a,
        .pagination li span {
            padding: 8px 12px;
            background: #c8e6c9;
            border-radius: 5px;
            text-decoration: none;
            color: #2e7d32;
            font-weight: bold;
        }

        .pagination li.active span {
            background: #2e7d32;
            color: white;
        }

        /* =============================== */
/* FORM ROW 2 KOLOM */
/* =============================== */

.form-row {
    display: flex;
    gap: 20px;
    width: 100%;
}

.form-row .half {
    flex: 1;
}

/* RESPONSIVE → otomatis jadi 1 kolom di HP */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 10px;
    }
}

        /* =========================== */
        /* DARK MODE */
        /* =========================== */

        .dark-mode body {
            background: #1e1e1e !important;
            color: #e0e0e0 !important;
        }

        .dark-mode .sidebar {
            background: #111 !important;
        }

        .dark-mode .sidebar a {
            color: #ddd !important;
        }

        .dark-mode .sidebar a:hover {
            background: #000 !important;
        }

        .dark-mode .logout-btn {
            background: #800000 !important;
        }

        .dark-mode .content {
            background: #1e1e1e !important;
            color: #e0e0e0 !important;
        }

        .dark-mode .card {
            background: #2a2a2a !important;
            color: #e0e0e0 !important;
        }

        .dark-mode table th {
            background: #333 !important;
            color: #fff !important;
        }

        .dark-mode table td {
            background: #2a2a2a !important;
            color: #e0e0e0 !important;
        }

      /* =============================== */
/* FORM TAMBAH TANAMAN — FIX ALIGN */
/* =============================== */

.form-container {
    background: white;
    padding: 25px;
    border-radius: 10px;
    max-width: 600px;
    margin: 20px auto;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.form-container h2 {
    margin-bottom: 15px;
    color: #2e7d32;
    font-weight: bold;
}

.form-group {
    margin-bottom: 18px;
    width: 100%;
}

/* Label */
.form-group label {
    font-weight: bold;
    font-size: 15px;
    color: #1b5e20;
    display: block;
    margin-bottom: 6px;
}

/* Wrapper untuk ikon + input */
.input-wrapper {
    position: relative;
    width: 100%;
}

/* Ikon di kiri */
.input-wrapper i {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    color: #2e7d32;
    font-size: 16px;
}

/* Input / select / textarea (fix padding agar sejajar) */
.input-wrapper input,
.input-wrapper select,
.input-wrapper textarea,
.form-group select,
.form-group textarea,
.form-group input {
    width: 100%;
    padding: 10px 12px 10px 40px;  /* padding kiri besar untuk ikon */
    border-radius: 6px;
    border: 1px solid #bdbdbd;
    font-size: 14px;
    box-sizing: border-box; /* agar width 100% tetap rapi */
}

/* Untuk input tanpa ikon */
.no-icon {
    padding-left: 12px !important;
}

.input-wrapper textarea {
    padding-left: 12px;
}

/* Fokus */
.input-wrapper input:focus,
.input-wrapper select:focus,
.input-wrapper textarea:focus,
.form-group select:focus,
.form-group textarea:focus,
.form-group input:focus {
    border-color: #2e7d32;
    outline: none;
    box-shadow: 0 0 5px rgba(46,125,50,0.3);
}

/* Tombol Submit */
.btn-submit {
    background: #2e7d32;
    color: white;
    padding: 10px 18px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

.btn-submit:hover {
    background: #1b5e20;
}

/* DARK MODE FIX */
.dark-mode .form-container {
    background: #2a2a2a !important;
}

.dark-mode .form-group label {
    color: #e0e0e0 !important;
}

.dark-mode input,
.dark-mode select,
.dark-mode textarea {
    background: #1e1e1e !important;
    color: #e0e0e0 !important;
    border: 1px solid #555 !important;
}

    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <!-- AREA MENU DI ATAS -->
        <div class="top-area">
            <h2>🌿 Plantify</h2>

            <!-- DARK MODE -->
            <button id="themeToggle">🌙 Dark Mode</button>

            <a href="/dashboard">Dashboard</a>
            <a href="/categories">Kategori</a>
            <a href="/plants">Tanaman</a>
        </div>

        <!-- TOMBOL LOGOUT DI BAGIAN PALING BAWAH -->
        <div>
            <a href="/logout" class="logout-btn">Logout</a>
        </div>

    </div>

    <!-- CONTENT AREA -->
    <div class="content">
        @yield('content')
    </div>

    <!-- DARK MODE SCRIPT -->
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark-mode');
        }

        const btn = document.getElementById('themeToggle');

        function updateButton() {
            btn.textContent =
                document.documentElement.classList.contains('dark-mode')
                ? "☀️ Light Mode"
                : "🌙 Dark Mode";
        }

        updateButton();

        btn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark-mode');

            localStorage.setItem(
                'theme',
                document.documentElement.classList.contains('dark-mode') ? 'dark' : 'light'
            );

            updateButton();
        });
    </script>

</body>
</html>
