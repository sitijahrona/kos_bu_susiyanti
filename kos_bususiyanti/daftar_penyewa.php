<!-- Bagian: Deklarasi Jenis Dokumen -->
<!DOCTYPE html>
<html lang="en">

<!-- Bagian: Kepala Dokumen -->
<head>
    <!-- Sertakan stylesheet dari Bootstrap untuk tata letak dan komponen UI -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Judul Halaman -->
    <title>Kos Bu Susiyanti</title>
    
    <!-- Icon Halaman -->
    <link rel="icon" href="usu.png">
    
    <!-- Gaya Internal -->
    <style>
        /* Gaya untuk judul display-4 */
        h3.display-4 {
            font-size: 2.0rem; /* Sesuaikan ukuran font dengan kebutuhan Anda */
        }

        /* Gaya untuk tabel */
        table {
            text-align: center;
            font-size: 0.87rem; /* Sesuaikan ukuran font dengan kebutuhan Anda */
            background-color: #AAB3B8;
        }

        /* Gaya untuk sel header dan data tabel */
        th, td {
            vertical-align: middle;
            text-align: center;
        }

        /* Gaya untuk tombol tambah data */
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

        /* Gaya saat hover pada tombol-tambah, tombol-edit, dan tombol-hapus */
        .tombol-tambah:hover,
        .tombol-edit:hover,
        .tombol-hapus:hover {
            background-color: #A61212;
            color: #fff;
            transform: scale(1.05);
        }

        /* Gaya untuk formulir pencarian */
        form {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-bottom: 15px;
        }

        /* Gaya untuk input dan tombol pencarian */
        input[name="keyword"] {
          padding: 5px;
          margin-right: 5px;
          border: 1px solid #ccc;
          border-radius: 5px;
          color: #286589; /* Ganti warna teks sesuai keinginan Anda */
        }

        button.btn-primary {
          padding: 5px;
          border: none;
          border-radius: 5px;
          background-color: #286589;
          color: #fff;
        }

        /* Gaya saat hover pada tombol pencarian */
        button.btn-primary:hover{
            background-color: #F6F9FA;
            color: #286589;
        }

    </style>
</head>

<!-- Bagian: Tubuh Dokumen -->
<body style="background-color: #dde0e3;">
  <!-- Sertakan sidebar.php ke dalam body -->
  <?php include_once "sidebar.php"; ?>

  <!-- Kontainer Fluid -->
  <div class="container-fluid">
    <!-- Baris dengan penjustifikasian tengah -->
    <div class="row justify-content-center">
      <!-- Kolom lebar 9 dengan offset lebar 2 pada sisi kiri -->
      <div class="col-lg-9 offset-lg-2">
        <!-- Kolom lebar 12 dengan penambahan margin pada bagian atas dan bawah -->
        <div class="col-lg-12 text-center mt-3 mb-3">
          <!-- Formulir pencarian -->
          <form action="" method="post">
            <input type="text" name="keyword" placeholder="Cari Nama Penyewa">
            <button type="submit" class="btn btn-primary">Cari</button>
          </form>
        </div>

        <!-- Kolom lebar 12 dengan penambahan margin pada bagian atas dan bawah -->
        <div class="col-lg-12 text-center mt-5 mb-5">
          <!-- Judul display-4 -->
          <h3 class="display-4">DAFTAR PENYEWA</h3>
          <!-- Tombol tambah data dengan kelas tombol-tambah -->
          <a href="index_penyewa.php" class="tombol-tambah">Tambah Data</a>
        </div>

        <!-- Kolom lebar 12 dengan penambahan margin pada bagian atas dan bawah -->
        <div class="table-responsive">
          <!-- Tabel dengan kelas table-striped, mx-auto, dan penyesuaian lebar 100% dan penjajaran tengah -->
          <table class="table table-striped mx-auto" style="width: 100%; text-align: center;">
            <!-- Baris kepala tabel dengan kelas table-dark -->
            <thead class="table-dark">
              <!-- Kolom-kolom kepala tabel -->
              <th>No.</th>
              <th>Nama Penyewa</th>
              <th>Jenis Kelamin</th>
              <th>Lantai</th>
              <th>No Kamar</th>
              <th>No HP</th>
              <th>Opsi</th>
            </thead>

            <?php
            // Koneksi ke database
            $koneksi = mysqli_connect("localhost", "root", "", "kos_bu_susiyanti");

            // Cek apakah form pencarian telah di-submit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $keyword = $_POST["keyword"];
              $query = "SELECT * FROM nama_penyewa WHERE nama_penyewa LIKE '%$keyword%'";
            } else {
              $query = "SELECT * FROM nama_penyewa";
            }

            // Eksekusi query dan ambil data dari database
            $data = mysqli_query($koneksi, $query);

            // Iterasi untuk menampilkan data pada tabel
            while ($d = mysqli_fetch_array($data)) {  
            ?>
              <!-- Baris data tabel -->
              <tr>
                <!-- Kolom data -->
                <td><?php echo $d['no']; ?></td>
                <td><?php echo $d['nama_penyewa']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['lantai']; ?></td>
                <td><?php echo $d['no_kamar']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <!-- Kolom opsi dengan tombol edit dan hapus -->
                <td>
                  <a href="edit_penyewa.php?no=<?php echo $d['no']; ?>" class="tombol-edit">edit</a>
                  <a href="hapus_penyewa.php?no=<?php echo $d['no']; ?>" class="tombol-hapus">hapus</a>
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
