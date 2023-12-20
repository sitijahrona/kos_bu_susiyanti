<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once "koneksi.php";

// Definisikan variabel $koneksi untuk koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Ambil data dari formulir pengeditan penyewa yang dikirim melalui metode POST
$no = $_POST['no'];
$nama_penyewa = $_POST['nama_penyewa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$lantai = $_POST['lantai'];
$no_kamar = $_POST['no_kamar'];
$no_hp = $_POST['no_hp'];

// Lakukan query UPDATE untuk mengedit data penyewa di database
$query = mysqli_query($koneksi, "UPDATE nama_penyewa SET nama_penyewa='$nama_penyewa', jenis_kelamin='$jenis_kelamin', lantai='$lantai', no_kamar='$no_kamar', no_hp='$no_hp' WHERE no='$no'");

// Periksa apakah query berhasil dieksekusi
if ($query) {
    // Jika berhasil, arahkan pengguna kembali ke halaman daftar_penyewa
    header("location: daftar_penyewa.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Edit data penyewa gagal!";
}
?>
