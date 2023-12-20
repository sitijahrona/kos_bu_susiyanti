<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
        <title>Kos Bu Susiyanti</title>

    <style> 
        body {
        background: linear-gradient(to right, #AAB3B8, #87CEEB);
        height: 100vh;
        font-family: 'Poppins', sans-serif;
        }

        h3 {
            text-align: center;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
        }

        form {
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
            width: 100%;
        }

        td {
            padding: 7px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
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
            background-color: #F6F9FA;
            color: #286589;
        }

        /* Gaya tambahan untuk tombol "kembali" */
        h3 a {
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: #A5B2BF;
            color: #286589;
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
        }

        h3 a:hover {
            color: #EFEFEF;
            background-color: #F6F9FA;
            color: #286589; 
        }
    
    </style>
    </head>
    <!-- tambah -->
    
    <body>
        <h3>
            <a href="daftar_pemilik.php"><- Kembali</a><br>
            <p>Tambah Data Pemilik</p>
        </h3>
        <form action="tambah_pemilik.php" method="post">
            <table>
                <tr>
                    <td>No.</td>
                    <td>:</td>
                    <td><input type="number" name="no" required>  </td>
                </tr>
                <tr>
                    <td>Nama Pemilik</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pemilik" required>  </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" required> </td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type="text" name="no_hp" required> </td>
                </tr>
                    <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="tambah" value="Tambah">  </td>
                </tr>
            </table>
        </form>
    </body>
</html>