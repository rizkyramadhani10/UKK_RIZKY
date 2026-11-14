# Solusi Net Nusantara

Website company profile untuk **Solusi Net Nusantara**, perusahaan yang menyediakan layanan jaringan dan pengkabelan kantor.

## Fitur Utama

- Beranda dengan informasi perusahaan dan layanan unggulan.
- Profil perusahaan.
- Daftar produk dan layanan beserta detailnya.
- Galeri hasil pekerjaan.
- Registrasi, login, dan logout pelanggan.
- Formulir kontak dan pemesanan layanan.
- Panel admin untuk mengelola konten website.

## Teknologi

- Laravel 12
- PHP 8.2+
- Filament 5
- SQLite
- Tailwind CSS 4
- Vite 7

## Struktur Aplikasi

```text
app/
├── Filament/Resources/  Panel administrasi
├── Http/Controllers/    Controller aplikasi
└── Models/              Model database

database/migrations/     Struktur tabel database
resources/views/          Tampilan halaman website
routes/web.php           Routing aplikasi
public/images/           Aset gambar
```

## Panel Admin

Panel admin digunakan untuk mengelola kategori, layanan, galeri, profil perusahaan, dan pesanan. Panel ini dapat diakses melalui `/admin`.

## Keterangan

Proyek ini dibuat untuk kebutuhan Uji Kompetensi Keahlian (UKK) dan guna memenuhi persyaratan dari Lembaga Sertifikasi Profesi (LSP).
