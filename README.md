
````markdow
# 🌱 Plantify

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![Laravel Version](https://img.shields.io/badge/Laravel-10.x-orange)](https://laravel.com/)
[![PHP Version](https://img.shields.io/badge/PHP-8.2-blue)](https://www.php.net/)

Plantify adalah aplikasi manajemen tanaman berbasis web yang dibangun menggunakan **Laravel**.  
Aplikasi ini memungkinkan pengguna untuk menambahkan, mengelola, dan memantau informasi tanaman dengan mudah.

---

## 🚀 Fitur Utama
- **CRUD Tanaman**: Tambah, lihat, edit, dan hapus data tanaman.  
- **Upload Gambar Tanaman**  
- **Dashboard Ringkas**  
- **Validasi Form Otomatis**  
- **Sistem Autentikasi Laravel**  
- **Tampilan Responsif dan Modern**

---

## 🛠 Teknologi yang Digunakan
- **Laravel** (Framework PHP)  
- **Blade** (Template Engine)  
- **MySQL / PostgreSQL** (Database)  
- **Bootstrap / Tailwind CSS** (UI Framework)  
- **Laragon / XAMPP** (Server Lokal)

---

## 📦 Instalasi
Ikuti langkah berikut untuk menjalankan project ini di lokal:

### 1. Clone Repository
```bash
git clone https://github.com/username/plantify.git
cd plantify
````

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Konfigurasi Environment

Duplikat file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Lalu sesuaikan konfigurasi database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=plantify_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate App Key

```bash
php artisan key:generate
```

### 5. Migrasi Database

```bash
php artisan migrate
```

### 6. Jalankan Server Lokal

```bash
php artisan serve
```

Akses aplikasi: [http://localhost:8000](http://localhost:8000)

---

## 📁 Struktur Folder Utama

```
Plantify/
│── app/
│── bootstrap/
│── config/
│── database/
│── public/
│── resources/
│   ├── views/
│   └── css/js
│── routes/
│── storage/
│── tests/
│── composer.json
```

---

## 📝 Endpoint Utama

| Endpoint            | Fungsi         |
| ------------------- | -------------- |
| `/plants`           | Daftar tanaman |
| `/plants/create`    | Tambah tanaman |
| `/plants/{id}/edit` | Edit tanaman   |
| `/login`            | Login pengguna |

---

## 🤝 Kontribusi

Kontribusi sangat terbuka!
Silakan ajukan **pull request**, issue, atau saran perbaikan.

---

## 📄 Lisensi

Project ini menggunakan lisensi **MIT** – bebas digunakan dan dikembangkan.

---

```

