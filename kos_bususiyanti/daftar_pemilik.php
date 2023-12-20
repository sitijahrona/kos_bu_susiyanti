<!-- Bagian: Deklarasi Jenis Dokumen -->
<!DOCTYPE html>
<html lang="en">

<!-- Bagian: Kepala Dokumen -->
<head>
    <!-- Sertakan CSS Bootstrap dari CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Setel judul dokumen -->
    <title>Kos Bu Susiyanti</title>
    
    <!-- Setel ikon untuk situs web -->
    <link rel="icon" href="usu.png">
    
    <!-- Gaya Internal -->
    <style>
        /* Sesuaikan ukuran font untuk heading display-4 */
        h3.display-4 {
            font-size: 2.0rem;
        }

        /* Gaya untuk tabel */
        table {
            text-align: center;
            font-size: 0.87rem;
            background-color: #AAB3B8;
        }

        /* Pusatkan konten di dalam sel tabel */
        th, td {
            vertical-align: middle;
            text-align: center;
        }

        /* Gaya untuk tombol "Tambah Data", "Edit", dan "Hapus" */
        .tombol-tambah {
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
            background-color: #A61212;
            color: #fff;
            transform: scale(1.05);
        }
    </style>
</head>

<!-- Bagian: Tubuh Dokumen -->
<body style="background-color: #dde0e3;">
    <!-- Sertakan sidebar menggunakan PHP -->
    <?php include_once "sidebar.php"; ?>

    <!-- Kontainer Konten Utama -->
    <div class="container-fluid">
        <!-- Baris untuk Menyusun Konten Tengah secara Horizontal -->
        <div class="row justify-content-center">
            <!-- Kolom untuk Menyusun Konten -->
            <div class="col-lg-9 offset-lg-2">
                <!-- Div untuk Menyusun Konten Pusat dengan Margin dan Padding -->
                <div class="col-lg-12 text-center mt-5 mb-5">
                    <!-- Heading Display-4 untuk Judul "DAFTAR PEMILIK" -->
                    <h3 class="display-4">DAFTAR PEMILIK</h3>
                    <!-- Tautan untuk Menambah Data Baru -->
                    <a href="index_pemilik.php" class="tombol-tambah">Tambah Data</a>
                </div>

                <!-- Div untuk Menyusun Tabel Responsif -->
                <div class="table-responsive">
                    <!-- Tabel dengan Bootstrap Styling dan Aturan Penyusunan -->
                    <table class="table table-striped mx-auto" style="width: 100%; text-align: center;">
                        <!-- Baris Kepala Tabel dengan Warna Latar Dark -->
                        <thead class="table-dark">
                            <th>No.</th>
                            <th>Nama Pemilik</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Opsi</th>
                        </thead>

                        <!-- Loop untuk Menampilkan Data Pemilik dari Database -->
                        <?php
                            // Buat koneksi ke database
                            $koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

                            // Ambil data dari tabel nama_pemilik
                            $data = mysqli_query($koneksi, "SELECT * FROM nama_pemilik");

                            // Loop untuk menampilkan setiap baris data
                            while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <!-- Baris Tabel untuk Setiap Data -->
                            <tr>
                                <td><?php echo $d['no']; ?></td>
                                <td><?php echo $d['nama_pemilik']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['no_hp']; ?></td>
                                
                                <!-- Kolom Opsi dengan Tautan Edit dan Hapus -->
                                <td>
                                    <a href="edit_pemilik.php?no=<?php echo $d['no']; ?>" class="tombol-edit">edit</a>
                                    <a href="hapus_pemilik.php?no=<?php echo $d['no']; ?>" class="tombol-hapus">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
