<?php
    //konek ke database
    require 'functions.php';

    $id = $_GET["id"];

    //ambil data dari table
    $mahasiswa = query("SELECT*FROM info1 WHERE id = $id")[0];

    if(isset($_POST["submit"])){

        if( edit($_POST) > 0 ){
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'arara.php';
                </script>
            ";
        } else{
            echo "
            <script>
                alert('Data Gagal Diubah');
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
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$mahasiswa["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?=$mahasiswa["nama"]; ?>">
            </li>
            <li>
                <label for="prodi">Program Studi :</label>
                <input type="text" name="prodi" id="prodi" required value="<?=$mahasiswa["prodi"]; ?>">
            </li>
            <li> 
                <label for="fakultas">Fakultas :</label>
                <input type="text" name="fakultas" id="fakultas" required value="<?=$mahasiswa["fakultas"]; ?>">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required value="<?=$mahasiswa["nim"]; ?>">
            </li>

            <button type="submit" name="submit">Edit Data</button>
        </ul>
    </form>
</body>
</html>