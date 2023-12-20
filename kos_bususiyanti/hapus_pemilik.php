<?php
//menggunakan file koneksi.php untuk terhubung ke database
include_once "koneksi.php";

// Mendapatkan nomor pemilik dari parameter URL menggunakan metode GET
$no = $_GET['no'];

// Membuat koneksi ke database MySQL (localhost, user: root, tanpa password, database: kos_bu_susiyanti)
$koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

// Menjalankan query DELETE untuk menghapus data pemilik dari tabel nama_pemilik berdasarkan nomor pemilik
$query = mysqli_query($koneksi, "DELETE FROM nama_pemilik WHERE no='$no'");

// Memeriksa apakah query berhasil dijalankan
if ($query) {
    // Jika berhasil, arahkan pengguna ke halaman daftar_pemilik.php
    header("location: daftar_pemilik.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Hapus data pemilik gagal!";
}
?>
