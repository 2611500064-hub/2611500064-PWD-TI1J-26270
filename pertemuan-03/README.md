##Proyek Acuan (Baseline)
• ​Pengalaman dari Pertemuan 2 dijadikan sebagai acuan dasar proyek P3.
• ​Mengirimkan berkas index.html beserta foto img/foto-profil.jpg ke dalam direktori pertemuan-03/.

##​Komponen & Struktur Formulir
• ​Elemen HTML yang diterapkan: Meliputi <form>, <div>, <label>, <input>, <select>, <option>, <textarea>, <button>, dan <br>.
• ​Penggunaan Tipe Input:
​text untuk memasukkan Nama Mahasiswa ​
• email untuk alamat email aktif.​number untuk pengisian angka Semester.​
• Date untuk menetapkan Tanggal Kunjungan.
• ​radio untuk memilih Jenis Pesan (opsi Pertanyaan atau Saran)
• ​checkbox untuk menentukan Pilihan Topik ( HTML/CSS).
• ​Atribut Validasi Data: Memanfaatkan atribut required, minlength, maxlength, min, dan max. Penggunaan tipe data email, number, dan date turut membantu memfilter keabsahan format masukan secara otomatis.

##​Evaluasi Metode GET & POST
• ​Hasil Uji Metode GET: Pemasukan data dilakukan melalui query string di URL serta memicu muat ulang halaman index.html. Hanya input yang dilengkapi atribut name yang berhasil terkirim.
​Observasi URL Encoding: Tanda spasi pada inputan berubah menjadi simbol +, sementara karakter khusus seperti @ dikonversi menjadi %40 (Contoh format: nama=Azhar+Nashrullah&email=Azhar%40email.com).
•​ Hasil Uji Metode POST: Pengujian POST belum dapat dijalankan secara penuh lantaran atribut bawaan formulir masih menyetujui method="get". Supaya metode POST bekerja, opsi pengiriman harus dialihkan ke method="post" dan dihubungkan ke endpoint pemroses POST yang sesuai.

##​Penerapan CSS
•​ Selector Elemen: Pengaturan gaya pada tag h2, h3, p, dan ol.
•​ Selector Class: Penerapan kelas untuk pembungkus form (.form-group) dan elemen input (.input-form).
•​ Selector ID: Pemanggilan unik pada bagian #about serta #contact.
•​ Properti Dasar yang Dipakai: Mencakup manipulasi tampilan menggunakan background-color, color, font-family, font-size, border, padding, hingga margin.

##​Pemecahan Masalah (Debugging) & Refaktor
•​ Kendala Teridentifikasi: Dimensi gambar profil terlalu dominan dan melebihi area tampilan.
•​ Akar Masalah: Berkas foto asli memiliki resolusi bawaan 1254 × 1254 piksel tanpa adanya pembatasan dimensi awal pada dokumen.
•​ Tindakan Perbaikan: Menentukan atribut dimensi gambar pada HTML secara langsung menjadi width="175" dan height="175".
•​ Hasil Akhir: Tampilan foto profil menjadi lebih proporsional, rapi, dan nyaman dilihat.