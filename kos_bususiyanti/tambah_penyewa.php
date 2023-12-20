<?php
// Sertakan file koneksi ke database
include_once 'koneksi.php';

// Tentukan dan inisialisasi variabel $koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi ke database
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Periksa apakah formulir telah dikirim (submitted)
if (isset($_POST['tambah'])) {
    // Dapatkan data dari formulir
    $no = $_POST['no'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $lantai = $_POST['lantai'];
    $no_kamar = $_POST['no_kamar'];
    $no_hp = $_POST['no_hp'];

    // Sisipkan data ke dalam tabel 'nama_penyewa' menggunakan query INSERT INTO
    $input = mysqli_query($koneksi, "INSERT INTO nama_penyewa VALUES ('$no', '$nama_penyewa','$jenis_kelamin','$lantai','$no_kamar','$no_hp')");

    // Periksa apakah data berhasil dimasukkan atau tidak
    if ($input) {
        // Tampilkan pesan sukses dan alihkan ke halaman daftar penyewa
        echo "<script>alert('Data berhasil ditambahkan!')</script>";
        echo "<script>window.location.href='daftar_penyewa.php';</script>";
    } else {    
        // Tampilkan pesan error dan berikan tautan untuk kembali
        echo "<h3>Data gagal ditambahkan</h3>";
        echo "<a href='index_penyewa.php'>Kembali </a>";
    }
} else {
    // Jika formulir tidak dikirim, atau setelah penambahan data, alihkan pengguna kembali ke halaman daftar penyewa
    header("location: daftar_penyewa.php");
}
?>
