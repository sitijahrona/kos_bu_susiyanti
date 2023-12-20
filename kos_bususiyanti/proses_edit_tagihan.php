<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once "koneksi.php";

// Definisikan variabel $koneksi untuk koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Ambil data dari formulir pengeditan tagihan yang dikirim melalui metode POST
$no_kamar = $_POST['no_kamar'];
$jumlah_tagihan = $_POST['jumlah_tagihan'];
$keterangan_pembayaran = $_POST['keterangan_pembayaran'];

// Lakukan query UPDATE untuk mengedit data tagihan di database
$query = mysqli_query($koneksi, "UPDATE tagihan SET jumlah_tagihan='$jumlah_tagihan', keterangan_pembayaran='$keterangan_pembayaran' WHERE no_kamar='$no_kamar'");

// Periksa apakah query berhasil dieksekusi
if ($query) {
    // Jika berhasil, arahkan pengguna kembali ke halaman daftar_tagihan
    header("location: daftar_tagihan.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Edit data tagihan gagal!";
}
?>
