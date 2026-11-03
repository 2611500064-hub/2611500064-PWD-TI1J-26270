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

### Tahap 5: Validasi Sisi Klien (JavaScript) & Pengujian Aplikasi
- Menambahkan penanganan event submit pada `kegiatanForm` untuk memvalidasi input di sisi klien sebelum data dikirim ke server.
- Melakukan pengujian menyeluruh pada fitur baru dan memastikan fitur lama tidak terganggu.
- Navigasi: Klik rencana, halaman berpindah ke section kegiatan -> Berhasil
- Validasi JS: Submit formulir saat input masih kosong, form tidak terkirim dan pesan peringatan muncul -> Berhasil
- Pemrosesan PHP: Mengisi dan mengirim formulir kegiatan, data tersimpan di session dan tampil di halaman -> Berhasil
- Pola PRG: Memuat ulang halaman setelah submit, data tidak terkirim ganda saat refresh -> Berhasil
- Fitur Kontak Lama: Mengirim formulir kontak, fitur kontak tetap berfungsi dengan baik -> Berhasil