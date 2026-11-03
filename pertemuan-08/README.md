### Tahap 1: Setup Repository & Inisialisasi README.md
- Menyiapkan struktur folder `pertemuan-08` dari bahan UTS.
- Membuat file `README.md` untuk dokumentasi pengerjaan.

### Tahap 2: Menambahkan Menu Navigasi Rencana Kegiatan
- Menambahkan tautan menu baru `Rencana Kegiatan` pada bilah navigasi (`<nav>`) yang mengarahkan pengguna ke `section#kegiatan`.

### Tahap 3: Menambahkan Section dan Formulir HTML Rencana Kegiatan
- Menambahkan `<section id="kegiatan">` sebelum `section#contact`.
- Membuat formulir kegiatan dengan field: Nama Kegiatan, Kategori Kegiatan, Tanggal Pelaksanaan, Lokasi Kegiatan, dan Deskripsi Kegiatan.
- Menambahkan tombol Kirim (`submit`) dan Batal (`reset`).
- Menyiapkan elemen penampil data hasil submit kegiatan.

### Tahap 4: Pemrosesan Data POST di Sisi Peladen (PHP) dan Pola PRG
- Mengubah logika pemrosesan metode `POST` untuk membedakan masukan dari formulir kontak dan formulir rencana kegiatan menggunakan nilai `form_type`.
- Mengimplementasikan sanitasi/normalisasi masukan menggunakan `trim()`.
- Menyimpan hasil input formulir kegiatan ke dalam `$_SESSION`.
- Menerapkan pola Post-Redirect-Get (PRG) mengarahkan kembali pengguna ke `index.php#kegiatan` guna mencegah resubmission data saat memuat ulang halaman.

