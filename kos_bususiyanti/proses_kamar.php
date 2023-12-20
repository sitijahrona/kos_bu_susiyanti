<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once "koneksi.php";

// Periksa apakah metode request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $no_kamar = $_POST['no_kamar'];
    $lantai = $_POST['lantai'];
    $fasilitas = $_POST['fasilitas'];
    $harga_sewa = $_POST['harga_sewa'];

    // Susun query untuk mengupdate data ke dalam database
    $query = "UPDATE daftar_kamar SET 
              lantai = '$lantai', 
              fasilitas = '$fasilitas', 
              harga_sewa = '$harga_sewa'
              WHERE no_kamar = '$no_kamar'";

    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Periksa keberhasilan query
    if ($result) {
        // Redirect kembali ke halaman daftar_kamar setelah berhasil menyimpan
        header("Location: daftar_kamar.php");
        exit();
    } else {
        // Tampilkan pesan error jika query tidak berhasil
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Redirect jika halaman diakses langsung tanpa melalui formulir
    header("Location: daftar_kamar.php");
    exit();
}
?>
