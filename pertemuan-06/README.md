# Dokumentasi Pertemuan 6 (P6) - Pemrograman Web Dasar

**Nama:** Azhar Nashrullah
**NIM:** 2611500064
**Kelas:** TI1J

---

## B. Persiapan Pengembangan P6

### B.1 & B.2 Verifikasi Baseline P5 dan Lingkungan Kerja
- **Lokasi Proyek:** `C:\laragon\www\pwd\0344300002-PWD-TI1A-26270\pertemuan-06\`
- **Layanan Peladen Lokal (Laragon):**
  - **Apache:** Berjalan pada Port 80 / 443
  - **MySQL:** Berjalan pada Port 3306
- **Verifikasi Berkas Baseline P5:**
  - `img/foto-profil.jpg` (Tersedia)
  - `style.css` (Tersedia)
  - `script.js` (Tersedia)
  - `index.html` (Telah diubah namanya menjadi `index.php`)

### B.3 & B.4 Hasil Verifikasi Akses Localhost
- **Alamat URL Akses:** `http://localhost/pwd/261150064-PWD-TI1J-26270/pertemuan-06/`
- **Hasil Pengujian Akses:**
  - Halaman `index.php` berhasil diproses oleh peladen Apache dan dibuka melalui peramban tanpa adanya galat (*error*).
  - Tampilan visual, gaya CSS, interaksi JavaScript, serta struktur navigasi dari baseline P5 tetap berfungsi dan dipertahankan dengan baik.
  - Halaman `index.php` berhasil diproses oleh peladen Apache dan dibuka melalui peramban tanpa adanya galat (*error*).
  - Tampilan visual, gaya CSS, interaksi JavaScript, serta struktur navigasi dari baseline P5 tetap berfungsi dan dipertahankan dengan baik.
  ## C. Dasar PHP dan Integrasi dengan HTML

### C.1 - C.3 Pengujian Tag PHP, Komentar, Echo, dan Print
- **Pengujian Tag PHP (`<?php ?>`):** Kode PHP berhasil diproses oleh peladen. Saat diperiksa via View Page Source (`Ctrl + U`), kode sumber PHP mentah dan komentar tidak dikirimkan ke peramban.
- **Pengujian `echo` vs `print`:** 
  - `echo` mencetak teks keluaran secara langsung.
  - `print` juga berhasil mencetak teks keluaran pada halaman.
  ## D. Variabel, Konstanta, dan Tipe Data PHP

### D.1 - D.3 Deklarasi Variabel, Konstanta, dan Tipe Data
- **Variabel:** Menggunakan `$nim`, `$namaMahasiswa`, `$programStudi`, `$tahunAkademik`, `$semester`, `$ipk`, `$statusAktif`, dan `$catatanTambahan`.
- **Konstanta:** Dideklarasikan menggunakan `NAMA_MATA_KULIAH` dan `PROFIL_GITHUB`.

### D.4 Penggunaan Variabel dan Konstanta
- Menampilkan data nama mahasiswa, mata kuliah, dan tahun akademik secara dinamis pada bagian Beranda.
- Menggunakan sintaks singkat `<?= PROFIL_GITHUB ?>` untuk membentuk tautan URL profil GitHub.
## E. Operator PHP

### E.1 - E.3 Penerapan Operator Aritmetika, Perbandingan, dan Logika
- **Operator Aritmetika (`-`):** Menghitung sisa semester (`$batasSemester - $semester`), menghasilkan nilai `6`.
- **Operator Perbandingan (`>=`, `<=`) & Logika (`&&`):** Memeriksa apakah semester berada pada rentang 1 s.d. 8 dan mahasiswa berstatus aktif.
- **Operator Ternary (`?:`):** Menentukan teks hasil pemeriksaan (`"Sesuai rentang"` vs `"Perlu diperiksa"`).
## F. Struktur Percabangan PHP

### F.1 Percabangan `if-elseif-else`
- Menentukan kategori semester (`"Semester awal"`, `"Semester menengah"`, atau `"Semester akhir"`). Hasil pengujian `$semester = 1` menghasilkan `"Semester awal"`.

### F.2 Operator Ternary
- Menentukan nama lengkap program studi berdasarkan kode `$programStudi` dan teks status keaktifan mahasiswa.

### F.3 Percabangan `switch-case-default`
- Menentukan fokus program studi berdasarkan nilai `$programStudi` (`"SI"` vs `"TI"`).

## G. Perulangan PHP

### G.1 Perulangan `for`
- Menampilkan 5 butir daftar target belajar menggunakan perulangan `for` dan percabangan `switch-case` di dalamnya.

### G.2 Perulangan `while`
- Menampilkan daftar nomor semester (Semester 1 hingga 3) menggunakan perulangan `while` dengan operator penugasan inkremen `$nomorSemester++`.