<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once 'koneksi.php';

// Inisialisasi variabel koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi ke database
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Periksa apakah tombol 'tambah' ditekan pada formulir
if (isset($_POST['tambah'])) {
    // Ambil data dari formulir
    $no_kamar = $_POST['no_kamar'];
    $lantai = $_POST['lantai'];
    $fasilitas = $_POST['fasilitas'];
    $harga_sewa = $_POST['harga_sewa'];

    // Lakukan operasi INSERT INTO untuk memasukkan data ke tabel 'daftar_kamar'
    $input = mysqli_query($koneksi, "INSERT INTO daftar_kamar VALUES ('$no_kamar','$lantai','$fasilitas','$harga_sewa')");

    // Periksa apakah data berhasil dimasukkan
    if ($input) {
        // Tampilkan pesan sukses dan redirect ke halaman 'daftar_kamar'
        echo "<script>alert('Data berhasil ditambahkan!')</script>";
        echo "<script>window.location.href='daftar_kamar.php';</script>";
    } else {    
        // Tampilkan pesan gagal dan link kembali ke 'index_kamar'
        echo "<h3>Data gagal ditambahkan</h3>";
        echo "<a href='index_kamar.php'>Kembali </a>";
    }
} else {
    // Redirect ke halaman 'daftar_kamar' jika tidak ada data yang dikirim
    header("location: daftar_kamar.php");
}
?>
