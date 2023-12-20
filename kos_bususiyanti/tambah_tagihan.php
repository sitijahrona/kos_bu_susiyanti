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
    $no_kamar = $_POST['no_kamar'];
    $jumlah_tagihan = $_POST['jumlah_tagihan'];
    $keterangan_pembayaran = $_POST['keterangan_pembayaran'];

    // Sisipkan data ke dalam tabel 'tagihan' menggunakan query INSERT INTO
    $input = mysqli_query($koneksi, "INSERT INTO tagihan VALUES ('$no_kamar','$jumlah_tagihan','$keterangan_pembayaran')");

    // Periksa apakah data berhasil dimasukkan atau tidak
    if ($input) {
        // Tampilkan pesan sukses dan alihkan ke halaman daftar tagihan
        echo "<script>alert('Data berhasil ditambahkan!')</script>";
        echo "<script>window.location.href='daftar_tagihan.php';</script>";
    } else {    
        // Tampilkan pesan error dan berikan tautan untuk kembali
        echo "<h3>Data gagal ditambahkan</h3>";
        echo "<a href='index_tagihan.php'>Kembali </a>";
    }
} else {
    // Jika formulir tidak dikirim, atau setelah penambahan data, alihkan pengguna kembali ke halaman daftar tagihan
    header("location: daftar_tagihan.php");
}
?>
