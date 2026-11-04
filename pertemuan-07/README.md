## Laporan Hasil Pengujian Pertemuan 7

### Tahap 1: Demonstrasi Formulir Metode GET (`indexGet.php`)
- **Deskripsi**: Membuat artefak berkas `indexGet.php` untuk mendemonstrasikan pengiriman data formulir menggunakan metode HTTP `GET`.
- **Hasil Pengujian**:
  1. Halaman `indexGet.php` berhasil diakses pada URL lokal.
  2. Saat formulir dikirimkan, seluruh parameter inputan (seperti `nama`, `email`, dll.) muncul di dalam baris alamat URL peramban.
  3. Data masukan `nama` berhasil ditangkap dan ditampilkan di sisi peladen menggunakan fungsi `$_GET['nama']` dan diamankan dengan `htmlspecialchars()`.

  ### Tahap 2: Penyesuaian Validasi Sisi Klien (`script.js`)
- **Deskripsi**: Mengubah selektor topik minat agar mendukung atribut array `minat[]` dan menambahkan `contactForm.submit()` untuk meneruskan data ke sisi peladen setelah validasi JS berhasil.
- **Hasil Pengujian**:
  1. Validasi JavaScript berhasil memblokir pengiriman jika ada isian yang tidak lengkap.
  2. Saat seluruh kolom valid, fungsi `contactForm.submit()` berjalan dan mengirimkan data form.