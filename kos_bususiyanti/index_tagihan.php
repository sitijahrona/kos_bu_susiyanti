<html>
<head>
    <!-- Menggunakan Bootstrap untuk tata letak dan tampilan yang responsif -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Menggunakan font Poppins dari Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    
    <title>Kos Bu Susiyanti</title>


    <style>
        body {
            /* Menggunakan gradasi warna latar belakang dan font-family Poppins */
            background: linear-gradient(to right, #AAB3B8, #87CEEB);
            height: 100vh; /* 100% tinggi viewport */
            font-family: 'Poppins', sans-serif;
        }

        h3 {
            /* Gaya untuk judul halaman */
            text-align: center;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
        }

        form {
            /* Gaya untuk form dengan beberapa efek bayangan dan padding */
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 18px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
        }

        table {
            /* Lebar tabel 100% */
            width: 100%;
        }

        td {
            /* Gaya untuk sel data tabel dengan padding */
            padding: 7px;
        }

        input[type="text"],
        input[type="number"] {
            /* Lebar penuh dengan beberapa gaya padding dan margin */
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            /* Gaya untuk tombol submit */
            background-color: #286589;
            color: #fff;
            padding: 7px 19px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
            border-radius: 50px;
        }

        input[type="submit"]:hover {
            /* Gaya hover untuk tombol submit */
            background-color: #F6F9FA;
            color: #286589;
        }

        /* Gaya tambahan untuk tombol "kembali" */
        h3 a {
            /* Gaya untuk tombol "kembali" dengan efek hover */
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: #A5B2BF;
            color: #286589;
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
        }

        h3 a:hover {
            /* Gaya hover untuk tombol "kembali" */
            color: #EFEFEF;
            background-color: #F6F9FA;
            color: #286589; 
        }
    </style>
</head>

<body>
    <!-- Tombol "Kembali" dan judul halaman -->
    <h3>
        <a href="daftar_tagihan.php"><- Kembali</a><br>
        <p>Tambah Data </p>
    </h3>
    <!-- Form untuk menambahkan data tagihan -->
    <form action="tambah_tagihan.php" method="post">
        <!-- Tabel untuk tata letak elemen form -->
        <table>
            <!-- Baris untuk input nomor kamar -->
            <tr>
                <td>No Kamar</td>
                <td>:</td>
                <td><input type="number" name="no_kamar" required>  </td>
            </tr>
            <!-- Baris untuk input jumlah tagihan -->
            <tr>
                <td>Jumlah Tagihan</td>
                <td>:</td>
                <td><input type="text" name="jumlah_tagihan" required> </td>
            </tr>
            <!-- Baris untuk input keterangan pembayaran -->
            <tr>
                <td>Keterangan Pembayaran</td>
                <td>:</td>
                <td><input type="text" name="keterangan_pembayaran" required> </td>
            </tr>
            <!-- Baris untuk tombol submit -->
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah">  </td>
            </tr>
        </table>
    </form>
</body>
</html>