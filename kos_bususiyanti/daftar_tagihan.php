
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bagian kepala dokumen HTML -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Penambahan stylesheet dari Bootstrap -->
    <title>Kos Bu Susiyanti</title>
    <!-- Judul halaman web -->
    <link rel="icon" href="usu.png">
    <!-- Penambahan ikon pada tab browser -->
    <style>
        /* Gaya CSS internal untuk menentukan tampilan halaman */
        h3.display-4 {
            font-size: 2.0rem; /* Ukuran font untuk judul halaman */
        }

        table {
            text-align: center;
            font-size: 0.87rem; /* Ukuran font untuk isi tabel */
            background-color: #AAB3B8; /* Warna latar belakang tabel */
        }

        th, td {
            vertical-align: middle;
            text-align: center;
        }

        .tombol-tambah{
            display: inline-block;
            padding: 2px 5px;
            margin: 4px;
            color: #fff;
            border: 2px solid #A61212;
            background-color: #A61212;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 13px;
        }

        /* Menambahkan gaya pada tombol "Tambah Data", "Edit", dan "Hapus" */
        .tombol-edit,
        .tombol-hapus {
            display: inline-block;
            padding: 2px 3px;
            margin: 4px;
            color: #fff;
            border: 2px solid #A61212;
            background-color: #A61212;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 10px;
        }

        .tombol-tambah:hover,
        .tombol-edit:hover,
        .tombol-hapus:hover {
            background-color: #A61212; /* Warna latar belakang tombol saat dihover */
            color: #fff; /* Warna teks tombol saat dihover */
            transform: scale(1.05); /* Efek scaling saat dihover */
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
            <div class="col-lg-9 offset-lg-2">
                <!-- Kolom lebar 9 dengan offset 2 (menggeser posisi kolom) -->
                <div class="col-lg-12 text-center mt-5 mb-5">
                    <!-- Kolom lebar 12 dengan teks yang berpusat, margin atas dan bawah -->
                    <h3 class="display-4">DAFTAR TAGIHAN</h3>
                    <!-- Judul halaman dengan gaya teks display-4 -->
                    <a href="index_tagihan.php" class="tombol-tambah">Tambah Data</a>
                    <!-- Tombol untuk menambahkan data tagihan -->
                </div>
                <div class="table-responsive">
                    <!-- Kontainer responsif untuk tabel -->
                    <table class="table table-striped mx-auto" style="width: 100%; text-align: center;">
                        <!-- Tabel dengan gaya Bootstrap, striping, dan diatur rata tengah -->
                        <thead class="table-dark">
                            <!-- Bagian kepala tabel dengan latar belakang gelap -->
                            <th>No.</th>
                            <th>No Kamar</th>
                            <th>Jumlah Tagihan</th>
                            <th>Keterangan Pembayaran</th>
                            <th>Opsi</th>
                            <!-- Kolom-kolom pada bagian kepala tabel -->
                        </thead>
                        <?php
                        include_once "koneksi.php";
                        $koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");
                        $no = 1; // Mulai nomor dari 1
                        $data = mysqli_query($koneksi, "SELECT * FROM tagihan");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <!-- Baris data dalam tabel -->
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['no_kamar']; ?></td>
                                <td><?php echo $d['jumlah_tagihan']; ?></td>
                                <td><?php echo $d['keterangan_pembayaran']; ?></td>
                                <!-- Kolom-kolom pada baris data -->
                                <td>
                                    <a href="edit_tagihan.php?no_kamar=<?php echo $d['no_kamar']; ?>" class="tombol-edit">edit</a>
                                    <a href="hapus_tagihan.php?no_kamar=<?php echo $d['no_kamar']; ?>" class="tombol-hapus">hapus</a>
                                    <!-- Tombol edit dan hapus untuk setiap baris data -->
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <!-- Penutup tabel -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>