<?php
// Mengimport (menggunakan) file koneksi.php untuk terhubung ke database
include_once "koneksi.php";

// Mendapatkan nomor penyewa dari parameter URL menggunakan metode GET
$no = $_GET['no'];

// Membuat koneksi ke database MySQL (localhost, user: root, tanpa password, database: kos_bu_susiyanti)
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Menjalankan query DELETE untuk menghapus data penyewa dari tabel nama_penyewa berdasarkan nomor penyewa
$query = mysqli_query($koneksi, "DELETE FROM nama_penyewa WHERE no='$no'");

// Memeriksa apakah query berhasil dijalankan
if ($query) {
    // Jika berhasil, arahkan pengguna ke halaman daftar_penyewa.php
    header("location: daftar_penyewa.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Hapus data penyewa gagal!";
}
?>
