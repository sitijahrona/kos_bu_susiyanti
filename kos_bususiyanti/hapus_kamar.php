<?php
// menggunakan file koneksi.php untuk terhubung ke database
include_once "koneksi.php";

// Mendapatkan nomor kamar dari parameter URL menggunakan metode GET
$no_kamar = $_GET['no_kamar'];

// Membuat koneksi ke database MySQL (localhost, user: root, tanpa password, database: kos_bu_susiyanti)
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Menjalankan query DELETE untuk menghapus data kamar dari tabel daftar_kamar berdasarkan nomor kamar
$query = mysqli_query($koneksi, "DELETE FROM daftar_kamar WHERE no_kamar='$no_kamar'");

// Memeriksa apakah query berhasil dijalankan
if ($query) {
    // Jika berhasil, arahkan pengguna ke halaman daftar_kamar.php
    header("location: daftar_kamar.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Hapus data kamar gagal!";
}
?>
