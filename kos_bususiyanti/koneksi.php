<?php
// Program ini melakukan koneksi ke database MySQL menggunakan PHP.

// Definisikan variabel untuk kredensial database
$host = "localhost";      // Alamat server database (dalam hal ini, server lokal)
$username = "root";        // Nama pengguna database
$password = "";            // Kata sandi pengguna database
$database = "kos_bu_susiyanti";  // Nama database yang digunakan

// Buat objek koneksi ke database menggunakan MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Periksa apakah koneksi berhasil
if ($conn->connect_error) {
    // Jika koneksi gagal, tampilkan pesan kesalahan dan hentikan eksekusi program
    die("Koneksi gagal: " . $conn->connect_error);
}

// Koneksi ke database telah berhasil pada titik ini.
// Selanjutnya, objek koneksi ($conn) dapat digunakan untuk menjalankan query dan operasi database lainnya.
?>

