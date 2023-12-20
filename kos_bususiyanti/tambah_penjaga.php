<?php
// Include file koneksi.php untuk menghubungkan ke database
include_once 'koneksi.php';

// Inisialisasi variabel koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi ke database
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Periksa apakah tombol 'tambah' ditekan pada formulir
if (isset($_POST['tambah'])) {
    // Ambil data dari formulir
    $no = $_POST['no'];
    $nama_penjaga = $_POST['nama_penjaga'];
    $no_hp = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jadwal_kerja = $_POST['jadwal_kerja'];

    // Lakukan operasi INSERT INTO untuk memasukkan data ke tabel 'nama_penjaga'
    $input = mysqli_query($koneksi, "INSERT INTO nama_penjaga (no, nama_penjaga, no_hp, jenis_kelamin, jadwal_kerja) VALUES ('$no', '$nama_penjaga', '$no_hp', '$jenis_kelamin', '$jadwal_kerja')");

    // Periksa apakah data berhasil dimasukkan
    if ($input) {
        // Tampilkan pesan sukses dan redirect ke halaman 'daftar_penjaga'
        echo "<script>alert('Data berhasil ditambahkan!')</script>";
        echo "<script>window.location.href='daftar_penjaga.php';</script>";
    } else {    
        // Tampilkan pesan gagal dan link kembali ke 'index_penjaga'
        echo "<h3>Data gagal ditambahkan</h3>";
        echo "<a href='index_penjaga.php'>Kembali </a>";
    }
} else {
    // Redirect ke halaman 'daftar_penjaga' jika tidak ada data yang dikirim
    header("location: daftar_penjaga.php");
}
?>
