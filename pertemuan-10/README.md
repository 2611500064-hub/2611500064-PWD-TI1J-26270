---

## C. Analisis Kebutuhan Data Formulir Kontak
### C.1 & C.2. Identifikasi Data yang Disimpan
Berdasarkan pemeriksaan pada `pertemuan-10\index.php`, terdapat 8 data dari formulir Kontak yang akan disimpan ke basis data (informasi profil mahasiswa pada bagian Tentang tidak ikut disimpan):
1. `nama` (Text) - Nama lengkap
2. `email` (Email) - Alamat email
3. `semester` (Number) - Nomor semester
4. `tanggal` (Date) - Tanggal kunjungan
5. `jenis_pesan` (Radio) - Jenis pesan (`pertanyaan` atau `saran`)
6. `minat[]` (Checkbox) - Topik yang diminati (`HTML`, `CSS`)
7. `prodi` (Select) - Program studi (`SI` atau `TI`)
8. `pesan` (Textarea) - Isi pesan

### C.3. Penanganan Field `minat`
Karena rancangan basis data P10 menggunakan satu tabel, beberapa pilihan pada checkbox `minat[]` disimpan dalam satu kolom `minat` bertipe teks yang dipisahkan dengan tanda koma (contoh: `HTML`, `CSS`, atau `HTML, CSS`).

---

## D. Merancang Struktur Tabel MySQL
### D.1. Nama Basis Data dan Tabel
- **Nama Basis Data:** `db_pwd_2611500064`
- **Nama Tabel:** `tbl_kontak_2611500064`

### D.2 - D.4. Rancangan Struktur Sembilan Atribut
Ditambahkan satu atribut `id` sebagai kunci utama (`PRIMARY KEY`) dengan `AUTO_INCREMENT` sehingga total terdapat 9 kolom:

| No | Atribut | Tipe Data | Ketentuan |
|---|---|---|---|
| 1 | `id` | `INT` | `PRIMARY KEY`, `AUTO_INCREMENT` |
| 2 | `nama` | `VARCHAR(50)` | Maksimal 50 karakter |
| 3 | `email` | `VARCHAR(255)` | Alamat email |
| 4 | `semester` | `TINYINT` | Nomor semester |
| 5 | `tanggal` | `DATE` | Tanggal kunjungan |
| 6 | `jenis_pesan` | `VARCHAR(20)` | Jenis pesan |
| 7 | `minat` | `VARCHAR(50)` | Pilihan minat (dipisah koma) |
| 8 | `prodi` | `VARCHAR(2)` | Kode prodi (`SI` / `TI`) |
| 9 | `pesan` | `VARCHAR(300)` | Isi pesan maksimal 300 karakter |