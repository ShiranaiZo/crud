<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script> 
        alert('Data Tersimpan!!');
        document.location.href = 'data.php'; 
        </script>";
    }else{
        echo "
        <script> alert('Gagal Tersimpan!!');
        document.location.href = 'tambah.php'; 
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
    <title>Data Karyawan</title>
    <style>
        .container{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <h2 style="text-align: center;">Tambah Data Pekerja</h2>
    <div class="container">
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" id="Nama" placeholder="Rizky Fajar Saputra">
    </div>
    <div class="container">
        <label for="Divisi">Divisi : </label>
        <input type="text" name="Divisi" id="Divisi" placeholder="Program">
    </div>
    <div class="container">
        <label for="Jabatan">Jabatan : </label>
        <input type="text" name="Jabatan" id="Jabatan" placeholder="Manager">
    </div>
    <div class="container">
        <label for="Tahun_Masuk">Tahun_Masuk : </label>
        <input type="text" name="Tahun_Masuk" id="Tahun_Masuk" placeholder="03 July 2022">
    </div>
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>