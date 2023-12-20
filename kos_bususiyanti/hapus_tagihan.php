<?php
// Mengimport (menggunakan) file koneksi.php untuk terhubung ke database
include_once "koneksi.php";

// Mendapatkan nomor kamar dari parameter URL menggunakan metode GET
$no_kamar = $_GET['no_kamar'];

// Membuat koneksi ke database MySQL (localhost, user: root, tanpa password, database: kos_bu_susiyanti)
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Menjalankan query DELETE untuk menghapus data tagihan dari tabel tagihan berdasarkan nomor kamar
$query = mysqli_query($koneksi, "DELETE FROM tagihan WHERE no_kamar='$no_kamar'");

// Memeriksa apakah query berhasil dijalankan
if ($query) {
    // Jika berhasil, arahkan pengguna ke halaman daftar_tagihan.php
    header("location: daftar_tagihan.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Hapus data tagihan gagal!";
}
?>
