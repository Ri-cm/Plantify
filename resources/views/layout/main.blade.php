<!DOCTYPE html>
<html>
<head>
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
