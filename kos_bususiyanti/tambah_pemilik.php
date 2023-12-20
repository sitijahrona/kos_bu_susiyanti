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
    $no = $_POST['no'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    // Lakukan operasi INSERT INTO untuk memasukkan data ke tabel 'nama_pemilik'
    $input = mysqli_query($koneksi, "INSERT INTO nama_pemilik VALUES ('$no','$nama_pemilik','$alamat','$no_hp')");

    // Periksa apakah data berhasil dimasukkan
    if ($input) {
        // Tampilkan pesan sukses dan redirect ke halaman 'daftar_pemilik'
        echo "<script>alert('Data berhasil ditambahkan!')</script>";
        echo "<script>window.location.href='daftar_pemilik.php';</script>";
    } else {    
        // Tampilkan pesan gagal dan link kembali ke 'index_pemilik'
        echo "<h3>Data gagal ditambahkan</h3>";
        echo "<a href='index_pemilik.php'>Kembali </a>";
    }
} else {
    // Redirect ke halaman 'daftar_pemilik' jika tidak ada data yang dikirim
    header("location: daftar_pemilik.php");
}
?>
