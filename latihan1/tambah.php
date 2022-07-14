<?php
    //konek ke database
    require 'functions.php';

    if(isset($_POST["submit"])){

        if( tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    document.location.href = 'arara.php';
                </script>
            ";
        } else{
            echo "
            <script>
                alert('Data Gagal Ditambah');
            </script>";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="prodi">Program Studi :</label>
                <input type="text" name="prodi" id="prodi" required>
            </li>
            <li>
                <label for="fakultas">Fakultas :</label>
                <input type="text" name="fakultas" id="fakultas" required>
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>
            </li>

            <button type="submit" name="submit">Tambah Data</button>
        </ul>
    </form>
</body>
</html>