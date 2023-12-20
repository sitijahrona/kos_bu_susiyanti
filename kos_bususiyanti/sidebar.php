<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Set informasi meta untuk karakter encoding dan viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tambahkan link ke file Bootstrap CSS dan beberapa font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-hp4W+9s5u7HuItzhbh5U5Wxj8A6tRxybZcMIbapz2zOjU0geVI5toAsgiSS+tpb" crossorigin="anonymous">

    <!-- Atur judul halaman dan icon -->
    <title>Mahasiswa</title>
    <link rel="icon" href="usu.png">

    <!-- Tambahkan gaya CSS internal untuk tata letak dan desain -->
    <style>
        body {
            display: flex;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        .content {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            flex: 1;
            transition: margin-left 0.5s;
            margin-left: 80px; /* Menambahkan margin pada .content sesuai lebar sidebar */
        }

        /* Menambahkan style untuk tabel */
        .table-responsive {
            margin-top: 20px; /* Atur margin sesuai kebutuhan */
            margin-left: auto;
            margin-right: auto;
        }

        .sidebar {
            background-color: #333;
            color: #C5DBE9;
            width: 280px;
            height: 100%;
            transition: all 0.5s ease;
            position: fixed;
        }

        .top {
            font-size: 20px;
            color: #fff;
            text-align: center;
            line-height: 70px;
            background-image: linear-gradient(to right, #286589, #C5DBE9);
            font-family: 'Rowdies', sans-serif; /* Perbarui baris ini */
        }

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
    </style>
</head>

<body>
    <!-- Sidebar sebagai navigasi -->
    <div class="sidebar">
        <div class="top">
            <i class="fi fi-home"></i> KOS BU SUSIYANTI
        </div>

        <!-- Daftar navigasi -->
        <ul>
            <li><a class="#" href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a class="#" href="daftar_pemilik.php"><i class="fa fa-home"></i> Daftar Pemilik</a></li>
            <li><a class="#" href="daftar_penyewa.php"><i class="fa fa-shopping-basket"></i> Daftar Penyewa</a></li>
            <li><a class="#" href="daftar_penjaga.php"><i class="fa fa-shopping-bag"></i> Daftar Penjaga Kos</a></li>
            <li><a class="#" href="daftar_kamar.php"><i class="fa fa-user-circle"></i> Daftar Kamar Kost</a></li>
            <li><a class="#" href="daftar_tagihan.php"><i class="fa fa-user-circle"></i> Daftar Tagihan</a></li>
            <li><a class="#" href="logout.php"><i class="fa fa-user-circle"></i> Log Out</a></li>
        </ul>
    </div>

    <!-- Konten utama halaman -->
    <div class="content">
        <!-- Konten halaman akan ditampilkan di sini -->
    </div>
</body>

</html>
