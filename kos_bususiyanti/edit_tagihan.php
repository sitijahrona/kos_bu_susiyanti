<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bagian kepala dokumen HTML -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Penambahan stylesheet dari Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <!-- Penambahan stylesheet dari Google Fonts untuk font Poppins -->
    <title>Kos Bu Susiyanti - Edit Tagihan</title>
    <!-- Judul halaman web -->
    <link rel="icon" href="usu.png">
    <!-- Penambahan ikon pada tab browser -->
    <style>
        /* Gaya CSS internal untuk menentukan tampilan halaman */
        body {
            font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins untuk seluruh halaman */
            background-color: #dde0e3; /* Warna latar belakang halaman */
        }

        .container-fluid {
            margin-top: 20px; /* Jarak atas container dari elemen di atasnya */
        }

        .col-lg-12.text-center {
            margin-top: 50px;
            margin-bottom: 50px; /* Jarak atas dan bawah kolom lebar 12 dengan teks yang berpusat */
        }

        /* Gaya untuk tombol Simpan Perubahan */
        button.btn-primary {
            background-color: #286589; /* Warna latar belakang tombol */
            color: #fff; /* Warna teks tombol */
        }

        button.btn-primary:hover {
            background-color: #F6F9FA; /* Warna latar belakang tombol saat dihover */
            color: #286589; /* Warna teks tombol saat dihover */
        }
    </style>
</head>

<body style="background-color: #dde0e3;">
    <!-- Tubuh dari dokumen HTML dengan latar belakang berwarna #dde0e3 -->
    <?php include_once "sidebar.php"; ?>
    <!-- Penyertaan (inclusion) konten dari file sidebar.php -->

    <div class="container-fluid">
        <!-- Container fluid untuk menyusun layout halaman -->
        <div class="row justify-content-center">
            <!-- Baris (row) yang diatur menjadi berada di tengah halaman -->
            <div class="col-lg-8 offset-lg-2">
                <!-- Kolom lebar 8 dengan offset 2 (menggeser posisi kolom) -->
                <div class="col-lg-12 text-center mt-5 mb-5">
                    <!-- Kolom lebar 12 dengan teks yang berpusat, margin atas dan bawah -->
                    <h3 class="display-4">Edit Data Tagihan</h3>
                    <!-- Judul halaman dengan gaya teks display-4 -->
                </div>
                <?php
                include "koneksi.php";
                $koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");
                $no_kamar = $_GET['no_kamar'];
                $query = mysqli_query($koneksi, "SELECT * FROM tagihan WHERE no_kamar='$no_kamar'");
                $data = mysqli_fetch_array($query);
                ?>
                <form action="proses_edit_tagihan.php" method="post">
                    <!-- Form untuk mengirim data ke proses_edit_tagihan.php dengan metode POST -->
                    <input type="hidden" name="no_kamar" value="<?php echo $data['no_kamar']; ?>">
                    <!-- Input tersembunyi untuk menyimpan nomor kamar -->
                    <div class="form-group">
                        <label for="no_kamar">No Kamar:</label>
                        <input type="number" class="form-control" id="no_kamar" name="no_kamar" value="<?php echo $data['no_kamar']; ?>" disabled>
                        <!-- Input untuk nomor kamar, dinonaktifkan (disabled) karena tidak dapat diubah -->
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tagihan">Jumlah Tagihan:</label>
                        <input type="text" class="form-control" id="jumlah_tagihan" name="jumlah_tagihan"
                            value="<?php echo $data['jumlah_tagihan']; ?>" required>
                        <!-- Input untuk jumlah tagihan, wajib diisi (required) -->
                    </div>
                    <div class="form-group">
                        <label for="keterangan_pembayaran">Keterangan Pembayaran:</label>
                        <input type="text" class="form-control" id="keterangan_pembayaran" name="keterangan_pembayaran"
                            value="<?php echo $data['keterangan_pembayaran']; ?>" required>
                        <!-- Input untuk keterangan pembayaran, wajib diisi (required) -->
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <!-- Tombol untuk mengirim data form -->
                </form>
            </div>
            <!-- Penutup kolom lebar 8 -->
        </div>
        <!-- Penutup baris -->
    </div>
    <!-- Penutup container fluid -->
</body>
<!-- Penutup badan dokumen HTML -->
</html>
