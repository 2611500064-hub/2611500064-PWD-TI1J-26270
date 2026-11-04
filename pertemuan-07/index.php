<?php
// Inisialisasi variabel awal agar tidak error saat pertama kali dibuka (GET)
$nama         = '';
$email        = '';
$semesterForm = '';
$tanggal      = '';
$jenisPesan   = '';
$prodi        = '';
$pesan        = '';
$minat        = [];
$pesankesalahan = '';

// Proses validasi HANYA berjalan ketika ada pengiriman formulir via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Normalisasi & Sanitasi Masukan
    $nama         = trim((string) ($_POST['nama'] ?? ''));
    $email        = trim((string) ($_POST['email'] ?? ''));
    $semesterForm = trim((string) ($_POST['semester'] ?? ''));
    $tanggal      = trim((string) ($_POST['tanggal'] ?? ''));
    $jenisPesan   = trim((string) ($_POST['jenis_pesan'] ?? ''));
    $prodi        = trim((string) ($_POST['prodi'] ?? ''));
    $pesan        = trim((string) ($_POST['pesan'] ?? ''));
    $minat        = $_POST['minat'] ?? [];

    // Validasi Kelengkapan Data
    if (trim($nama) === '') { $pesankesalahan .= 'Nama lengkap wajib diisi. '; }
    if (trim($email) === '') { $pesankesalahan .= 'Email wajib diisi. '; }
    if (trim($semesterForm) === '') { $pesankesalahan .= 'Semester wajib diisi. '; }
    if (trim($tanggal) === '') { $pesankesalahan .= 'Tanggal kunjungan wajib diisi. '; }
    if ($jenisPesan === '') { $pesankesalahan .= 'Jenis pesan wajib dipilih. '; }
    if ($prodi === '') { $pesankesalahan .= 'Program studi wajib dipilih. '; }
    if (trim($pesan) === '') { $pesankesalahan .= 'Pesan wajib diisi. '; }
    if (empty($minat)) { $pesankesalahan .= 'Minat wajib dipilih minimal satu. '; }

    // Validasi Format Email & Semester
    if (trim($semesterForm) !== '') {
        $semesterValid = filter_var($semesterForm, FILTER_VALIDATE_INT);
        if ($semesterValid === false || $semesterValid < 1 || $semesterValid > 14) {
            $pesankesalahan .= 'Semester harus berupa bilangan bulat antara 1 dan 14. ';
        }
    }

    if (trim($email) !== '') {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $pesankesalahan .= 'Format email tidak valid. ';
        }
    }

    // Validasi Pilihan (Radio, Select, & Checkbox)
    if (!in_array($jenisPesan, ['pertanyaan', 'saran'], true)) {
        $pesankesalahan .= 'Jenis pesan tidak valid. ';
    }

    if (!in_array($prodi, ['si', 'ti', 'SI', 'TI'], true)) {
        $pesankesalahan .= 'Program studi tidak valid. ';
    }

    $minatDiizinkan = ['web', 'design', 'HTML', 'CSS'];
    if (!is_array($minat)) {
        $pesankesalahan .= 'Format pilihan topik tidak valid. ';
    } else {
        foreach ($minat as $topik) {
            if (!in_array($topik, $minatDiizinkan, true)) {
                $pesankesalahan .= 'Pilihan topik tidak valid. ';
                break;
            }
        }
    }
}

// Data Baseline Mahasiswa P6
$nim = "2611500064";
$namaMahasiswa = "Azhar Nashrullah";
$programStudi = "TI";
$tahunAkademik = "2026/2027";
$semester = 1;
$statusAktif = true;
$catatanTambahan = null;

const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "2611500064-hub";

$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
$semesterValid = ($semester >= 1 && $semester <= $batasSemester);
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";

if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}

$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");

switch ($programStudi) {
    case "SI":
        $fokusProgramStudi = "Sistem informasi dan proses bisnis";
        break;
    case "TI":
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;
    default:
        $fokusProgramStudi = "Belum ditentukan";
        break;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <button id="navToggle" aria-expanded="false" aria-label="Buka navigasi">&#9776;</button>
        <nav id="navMenu">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; ?>.</p>
            <img src="img/foto-profil.jpeg" alt="Foto Profil Azhar Nashrullah" />
        </section>

        <section id="about">
            <h2>Tentang Saya</h2>
            <article>
                <h3>Profil Singkat</h3>
                <p>Program Studi: <?php echo $namaProdi . " (" . $programStudi . ")"; ?></p>
                <p>Fokus program studi: <?php echo $fokusProgramStudi; ?></p>
                <p>Status mahasiswa: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
                <p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>
                <p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p>
                <p>Pemeriksaan rentang semester: <?php echo $statusSemester; ?></p>
                <p>Saya mahasiswa Program Studi Teknik Informatika.</p>

                <h3>Target Belajar (Perulangan for)</h3>
                <ol>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "<li>Target belajar ke-" . $i . ": ";
                    switch ($i) {
                        case 1: echo "Memahami sintaks dasar PHP."; break;
                        case 2: echo "Menggunakan variabel dan konstanta."; break;
                        case 3: echo "Menerapkan operator dan percabangan."; break;
                        case 4: echo "Menggunakan perulangan for dan while."; break;
                        default: echo "Belum dipetakan"; break;
                    }
                    echo "</li>";
                }
                ?>
                </ol>

                <h3>Semester (Perulangan while):</h3>
                <ol>
                <?php
                $nomorSemester = 1;
                while ($nomorSemester <= 3) {
                    echo "<li>Semester " . $nomorSemester . "</li>";
                    $nomorSemester++;
                }
                ?>
                </ol>
            </article>
        </section>

        <section id="contact">
            <h2>Kontak Saya</h2>

            <!-- Menampilkan pesan kesalahan validasi PHP jika ada -->
            <?php if ($pesankesalahan !== ''): ?>
                <p class="form-feedback-error">
                    <?= htmlspecialchars($pesankesalahan, ENT_QUOTES, 'UTF-8') ?>
                </p>
            <?php endif; ?>

            <p>
                Kunjungi <a target="_blank" href="https://github.com/<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.
            </p>

            <div id="formFeedback"></div>

            <form id="contactForm" action="index.php" method="post" novalidate>
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label><br />
                    <input type="text" id="nama" name="nama" class="input-form" minlength="3" maxlength="50" required />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label><br />
                    <input type="email" id="email" name="email" class="input-form" required />
                </div>

                <div class="form-group">
                    <label for="semester">Semester:</label><br />
                    <input type="number" id="semester" name="semester" class="input-form" min="1" max="14" required />
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan:</label><br />
                    <input type="date" id="tanggal" name="tanggal" class="input-form" required />
                </div>

                <div class="form-group">
                    <label>Jenis Pesan:</label><br />
                    <input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" required />
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="radio" id="saran" name="jenis_pesan" value="saran" />
                    <label for="saran">Saran</label>
                </div>

                <div class="form-group">
                    <label>Topik Minat:</label><br />
                    <input type="checkbox" id="web" name="minat[]" value="web" />
                    <label for="web">HTML</label>
                    <input type="checkbox" id="design" name="minat[]" value="design" />
                    <label for="design">CSS</label>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi:</label><br />
                    <select id="prodi" name="prodi" class="input-form" required>
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="ti">Teknik Informatika</option>
                        <option value="si">Sistem Informasi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan:</label><br />
                    <textarea id="pesan" name="pesan" class="input-form" maxlength="300" required></textarea>
                </div>

                <button type="submit">Kirim Pesan</button>
                <button type="reset">Batal</button>
            </form>

            <!-- Tampilan Data yang Diterima Peladen (POST) -->
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $pesankesalahan === ''): ?>
                <h3>Data yang Diterima Peladen</h3>
                <p>Nama: <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Email: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Semester: <?= htmlspecialchars($semesterForm, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Tanggal kunjungan: <?= htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Jenis pesan: <?= htmlspecialchars($jenisPesan, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Program studi: <?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Minat:</p>
                <?php if (is_array($minat) && count($minat) > 0): ?>
                    <ul>
                    <?php foreach ($minat as $topik): ?>
                        <li><?= htmlspecialchars((string) $topik, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Tidak ada minat yang dipilih.</p>
                <?php endif; ?>
                <p>Pesan:</p>
                <p><?= nl2br(htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')) ?></p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date("Y") ?> <?php echo $namaMahasiswa; ?> [<?= $nim ?>]</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>