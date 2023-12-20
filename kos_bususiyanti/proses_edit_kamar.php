<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once "koneksi.php";

// Definisikan variabel $koneksi untuk koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Ambil data dari formulir pengeditan kamar yang dikirim melalui metode POST
$no_kamar = $_POST['no_kamar'];
$lantai = $_POST['lantai'];
$fasilitas = $_POST['fasilitas'];
$harga_sewa = $_POST['harga_sewa'];

// Lakukan query UPDATE untuk mengedit data kamar di database
$query = mysqli_query($koneksi, "UPDATE daftar_kamar SET lantai='$lantai', fasilitas='$fasilitas', harga_sewa='$harga_sewa' WHERE no_kamar='$no_kamar'");

// Periksa apakah query berhasil dieksekusi
if ($query) {
    // Jika berhasil, arahkan pengguna kembali ke halaman daftar_kamar
    header("location: daftar_kamar.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Edit data kamar gagal!";
}
?>
