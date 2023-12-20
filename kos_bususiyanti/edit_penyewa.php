<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bagian kepala dokumen HTML -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Penambahan stylesheet dari Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <!-- Penambahan stylesheet dari Google Fonts untuk font Poppins -->
    <title>Kos Bu Susiyanti - Edit Penyewa</title>
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
                    <h3 class="display-4">Edit Data Penyewa</h3>
                    <!-- Judul halaman dengan gaya teks display-4 -->
                </div>
                <?php
                include "koneksi.php";
                $koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");
                $no = $_GET['no'];
                $query = mysqli_query($koneksi, "SELECT * FROM nama_penyewa WHERE no='$no'");
                $data = mysqli_fetch_array($query);
                ?>
                <form action="proses_edit_penyewa.php" method="post">
                    <!-- Form untuk mengirim data ke proses_edit_penyewa.php dengan metode POST -->
                    <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
                    <!-- Input tersembunyi untuk menyimpan nomor -->
                    <div class="form-group">
                        <label for="no">No.</label>
                        <input type="number" class="form-control" id="no" name="no" value="<?php echo $data['no']; ?>" disabled>
                        <!-- Input untuk nomor, dinonaktifkan (disabled) karena tidak dapat diubah -->
                    </div>
                    <div class="form-group">
                        <label for="nama_penyewa">Nama Penyewa:</label>
                        <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa"
                        value="<?php echo $data['nama_penyewa']; ?>" required>
                        <!-- Input untuk nama penyewa, wajib diisi (required) -->
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <!-- Dropdown untuk memilih jenis kelamin, wajib diisi (required) -->
                            <option value="Pria" <?php if($data['jenis_kelamin'] == 'Pria') echo 'selected'; ?>>Pria</option>
                            <option value="Wanita" <?php if($data['jenis_kelamin'] == 'Wanita') echo 'selected'; ?>>Wanita</option>
                            <!-- Opsi jenis kelamin, yang terpilih sesuai data dari database -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lantai">Lantai:</label>
                        <input type="text" class="form-control" id="lantai" name="lantai" value="<?php echo $data['lantai']; ?>" required>
                        <!-- Input untuk lantai, wajib diisi (required) -->
                    </div>
                    <div class="form-group">
                        <label for="no_kamar">No Kamar:</label>
                        <input type="number" class="form-control" id="no_kamar" name="no_kamar" value="<?php echo $data['no_kamar']; ?>" required>
                        <!-- Input untuk nomor kamar, wajib diisi (required) -->
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP:</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>
                        <!-- Input untuk nomor HP, wajib diisi (required) -->
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <!-- Tombol untuk mengirim data form -->
                </form>
                <!-- Penutup form -->
            </div>
            <!-- Penutup kolom lebar 8 -->
        </div>
        <!-- Penutup baris -->
    </div>
    <!-- Penutup container fluid -->
</body>
<!-- Penutup badan dokumen HTML -->
</html>
