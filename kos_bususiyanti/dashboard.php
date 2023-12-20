<!-- Bagian: Deklarasi Jenis Dokumen -->
<!DOCTYPE html>
<html lang="en">

<!-- Bagian: Kepala Dokumen -->
<head>
    <!-- Setel pengaturan karakter dan tampilan responsif -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Judul Halaman -->
    <title>Dashboard</title>
    
    <!-- Sertakan gaya dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    
    <!-- Gaya Internal -->
    <style>
        /* Setel properti awal untuk elemen body */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            height: 100vh;
            transition: background-color 0.5s;
            background-image: url('img/1.jpg'); /* Ganti path dengan path ke gambar Anda */
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif;
        }

        /* Gaya untuk sidebar */
        .sidebar {
            background-color: #333;
            color: #C5DBE9;
            width: 280px;
            height: 100%;
            transition: all 0.5s ease;
            position: fixed;
        }

        /* Gaya untuk bagian atas sidebar */
        .top {
            font-size: 20px;
            color: #fff;
            text-align: center;
            line-height: 70px;
            background-image: linear-gradient(to right, #286589, #C5DBE9);
            font-family: 'Rowdies', sans-serif;
        }

        /* Pengaturan gaya untuk daftar menu sidebar */
        ul {
            padding: 0;
        }

        ul a {
            display: block;
            line-height: 50px;
            font-size: 16px;
            color: #fff;
            padding-left: 20px;
            box-sizing: border-box;
            border-top: 1px solid rgba(6, 255, 251, 0.1);
            border-bottom: 1px solid rgba(125, 134, 146, 0.302);
            transition: all 0.5s ease;
        }

        li:hover a {
            padding-left: 40px;
            background: #efe7bc;
            color: rgb(0, 0, 0);
        }

        ul a i {
            margin-right: 10px;
        }

        /* Gaya untuk konten utama */
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-left: 300px; /* Sesuaikan margin berdasarkan lebar sidebar Anda */
            transition: margin-left 0.5s;
        }

        /* Gaya untuk item grid pada konten utama */
        .grid-item {
            background-color: #AAB3B8;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            text-align: center;
            transition: box-shadow 0.3s, transform 0.3s;
            font-size: 17px;
            border-radius: 10px; /* Atur radius sesuai preferensi Anda */
        }

        /* Gaya saat item grid dihover */
        .grid-item:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        /* Gaya untuk tombol "Lihat" */
        .btn-lihat {
            background-color: #286589;
            color: #fff;
            padding: 8px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
            border-radius: 50px;
        }

        /* Gaya saat tombol "Lihat" dihover */
        .btn-lihat:hover {
            background-color: #F6F9FA;
            color: #286589;
        }
    </style>
</head>

<!-- Bagian: Tubuh Dokumen -->
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Bagian Atas Sidebar dengan Nama KOS BU SUSIYANTI -->
        <div class="top">
            KOS BU SUSIYANTI
        </div>
        
        <!-- Daftar Menu Sidebar -->
        <ul>
            <li><a class="#" href="beranda.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a class="#" href="logout.php"><i class="fa fa-user-circle"></i> Log Out</a></li>
        </ul>
    </div>
    
    <!-- Konten Utama -->
    <div class="content">
        <!-- Grid Item Pertama untuk Daftar Pemilik -->
        <div class="grid-item">
            <h2>DAFTAR PEMILIK</h2>
            <button class="btn-lihat" onclick="location.href='daftar_pemilik.php'">Lihat</button>
        </div>

        <!-- Grid Item Kedua untuk Daftar Penyewa -->
        <div class="grid-item">
            <h2>DAFTAR PENYEWA</h2>
            <button class="btn-lihat" onclick="location.href='daftar_penyewa.php'">Lihat</button>
        </div>
        
        <!-- Grid Item Ketiga untuk Daftar Tagihan -->
        <div class="grid-item">
            <h2>DAFTAR TAGIHAN</h2>
            <button class="btn-lihat" onclick="location.href='daftar_tagihan.php'">Lihat</button>
        </div>
        
        <!-- Grid Item Keempat untuk Daftar Kamar Kost -->
        <div class="grid-item">
            <h2>DAFTAR KAMAR KOST</h2>
            <button class="btn-lihat" onclick="location.href='daftar_kamar.php'">Lihat</button>
        </div>
        
        <!-- Grid Item Kelima untuk Daftar Penjaga Kost -->
        <div class="grid-item">
            <h2>DAFTAR PENJAGA KOST</h2>
            <button class="btn-lihat" onclick="location.href='daftar_penjaga.php'">Lihat</button>
        </div>
    </div>
</body>

</html>
