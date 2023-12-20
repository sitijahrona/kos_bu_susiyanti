<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Menggunakan Bootstrap untuk tata letak dan tampilan yang responsif -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Menggunakan font Poppins dari Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">

    <title>Kos Bu Susiyanti</title>


    <style>
        body {
            /* Menggunakan gradasi warna latar belakang */
            background: linear-gradient(to right, #AAB3B8, #87CEEB);
            height: 100vh; /* 100% tinggi viewport */
        }

        h3 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            /* Membatasi lebar form dan memberikan tata letak dan bayangan */
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 8px;
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
            padding: 8px 20px;
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
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: #A5B2BF;
            color: #7E8892;
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
        <a href="daftar_kamar.php"><- Kembali</a><br>
        <p>Tambah Data Kamar</p>
    </h3>
    <!-- Form untuk menambahkan data kamar -->
    <form action="tambah_kamar.php" method="post">
        <!-- Tabel untuk tata letak elemen form -->
        <table>
            <!-- Baris untuk input nomor kamar -->
            <tr>
                <td>No Kamar</td>
                <td>:</td>
                <td><input type="text" name="no_kamar" required></td>
            </tr>
            <!-- Baris untuk input lantai -->
            <tr>
                <td>Lantai</td>
                <td>:</td>
                <td><input type="number" name="lantai" required></td>
            </tr>
            <!-- Baris untuk input fasilitas -->
            <tr>
                <td>Fasilitas</td>
                <td>:</td>
                <td><input type="text" name="fasilitas" required></td>
            </tr>
            <!-- Baris untuk input harga sewa -->
            <tr>
                <td>Harga Sewa</td>
                <td>:</td>
                <td><input type="number" name="harga_sewa" required></td>
            </tr>
            <!-- Baris untuk tombol submit -->
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>
