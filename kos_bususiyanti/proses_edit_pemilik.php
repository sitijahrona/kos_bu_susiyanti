<?php
// Mengaktifkan laporan error untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// ... Kode Anda ...

?>

<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once "koneksi.php";

// Ambil data dari formulir pengeditan pemilik yang dikirim melalui metode POST
$no = $_POST['no'];
$nama_pemilik = $_POST['nama_pemilik'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

// Lakukan query UPDATE untuk mengedit data pemilik di database
$query = $conn->query("UPDATE nama_pemilik SET nama_pemilik='$nama_pemilik', alamat='$alamat', no_hp='$no_hp' WHERE no='$no'");

// Periksa apakah query berhasil dieksekusi
if ($query) {
    // Jika berhasil, arahkan pengguna kembali ke halaman daftar_pemilik
    header("location: daftar_pemilik.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "Edit data pemilik gagal!";
}
?>
