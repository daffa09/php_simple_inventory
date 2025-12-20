<!-- portfolio -->
<!-- slug: php-simple-inventory -->
<!-- title: Inventaris Sederhana PHP -->
<!-- description: Sistem manajemen inventaris sederhana yang dibangun dengan PHP native dan MySQL untuk bisnis kecil -->
<!-- image: https://github.com/user-attachments/assets/1f040d7c-6b50-4d07-b93b-d23c638ea418 -->
<!-- tags: php, mysql, inventaris, crud, sederhana -->

# Sistem Inventaris Sederhana PHP (PHP Simple Inventory System)

<img width="1536" height="1024" alt="php-simple-inventory" src="https://github.com/user-attachments/assets/1f040d7c-6b50-4d07-b93b-d23c638ea418" />

Sistem manajemen inventaris langsung yang dibangun dengan PHP native dan MySQL. Proyek ini dibuat selama masa sekolah menengah saya untuk membantu bisnis kecil mengelola inventaris produk mereka secara efisien.

## 📋 Ringkasan

Sistem inventaris sederhana ini menyediakan fungsionalitas penting untuk melacak produk, tingkat stok, dan transaksi dasar. Dibangun tanpa framework, aplikasi ini mendemonstrasikan konsep dasar PHP dan MySQL dalam aplikasi bisnis praktis.

## ✨ Fitur

- **Manajemen Produk**
  - Menambah produk baru.
  - Melihat semua daftar produk.
  - Memperbarui informasi produk.
  - Menghapus produk.
  - Melacak jumlah stok.

- **Operasi Stok**
  - Tambah stok (barang masuk).
  - Kurangi stok (barang keluar/penjualan).
  - Melihat tingkat stok saat ini.
  - Peringatan stok rendah (low stock alerts).

- **Pelaporan Dasar**
  - Daftar produk.
  - Pergerakan stok.
  - Status inventaris saat ini.

- **Antarmuka Sederhana**
  - Dashboard yang mudah digunakan.
  - Tabel data yang bersih.
  - Formulir tambah/edit yang cepat.

## 🛠️ Teknologi yang Digunakan

- **PHP**: PHP Native (tanpa framework).
- **MySQL**: Database.
- **HTML/CSS**: Frontend.
- **JavaScript**: Interaksi klien.
- **Bootstrap** (jika digunakan): Framework UI.

## 📁 Struktur Proyek

```
php_simple_inventory/
├── index.php              # Dashboard utama
├── proses/                # File proses (tambah, edit, hapus, stok)
├── assets/                # File CSS & JS
├── inventory.sql         # Skema database
└── README.md
```

## 🚀 Memulai

### Prasyarat

- XAMPP, WAMP, atau server lokal serupa.
- PHP 5.6 atau lebih tinggi.
- MySQL 5.5 atau lebih tinggi.

### Instalasi

1. **Clone atau Unduh** proyek ini.
2. **Pindahkan ke Direktori Server** (contoh: `htdocs` untuk XAMPP).
3. **Buat Database** via phpMyAdmin dengan nama `inventory`.
4. **Impor Skema**: Impor file `inventory.sql` ke dalam database tersebut.
5. **Jalankan Apache & MySQL** di panel kontrol server lokal Anda.
6. **Akses Aplikasi** melalui browser di `http://localhost/php_simple_inventory`.

## 🗄️ Skema Database

### Tabel: `products`
Menyimpan informasi produk termasuk kode, nama, kategori, stok saat ini, dan batas minimal stok.

### Tabel: `stock_transactions`
Mencatat riwayat transaksi barang masuk (`in`) dan keluar (`out`).

## 🚀 Peningkatan Masa Depan

- Autentikasi pengguna.
- Manajemen pemasok (supplier).
- Pesanan pembelian (purchase orders).
- Pemindaian barcode.
- Ekspor data ke Excel/PDF.

## 🎓 Nilai Pembelajaran

Dibangun saat sekolah menengah, proyek ini mengajarkan:
- Fundamental PHP.
- Operasi MySQL.
- Implementasi CRUD.
- Konsep manajemen inventaris.

---

**Dibangun di Masa Sekolah Menengah** 📦✨  
Solusi sederhana untuk kebutuhan inventaris bisnis kecil.
