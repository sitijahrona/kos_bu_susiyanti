<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once "koneksi.php";

// Definisikan variabel $koneksi untuk koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Ambil data dari formulir pengeditan penjaga yang dikirim melalui metode POST
$no = $_POST['no'];
$nama_penjaga = $_POST['nama_penjaga'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jadwal_kerja = $_POST['jadwal_kerja'];

// Lakukan query UPDATE untuk mengedit data penjaga di database
$query = mysqli_query($koneksi, "UPDATE nama_penjaga SET nama_penjaga='$nama_penjaga', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', jadwal_kerja='$jadwal_kerja' WHERE no='$no'");

// Periksa apakah query berhasil dieksekusi
if ($query) {
    // Jika berhasil, arahkan pengguna kembali ke halaman daftar_penjaga
    header("location: daftar_penjaga.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Edit data penjaga gagal!";
}
?>
