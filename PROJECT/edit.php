<?php
require 'function.php';

$id = $_GET["id"];

$pkj = query("SELECT * FROM pekerja WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "
        <script> 
        alert('Data Diubah!!');
        document.location.href = 'data.php'; 
        </script>";
    }else{
        echo "
        <script> alert('Gagal Diubah!!');
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
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <h2>Ubah Data Pekerja</h2>
    <input type="hidden" name="id" value="<?= $pkj["id"]; ?>">
    <div class="container">
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" id="Nama" value="<?= $pkj["Nama"]; ?>">
    </div>
    <div class="container">
        <label for="Divisi">Divisi : </label>
        <input type="text" name="Divisi" id="Divisi" value="<?= $pkj["Divisi"]; ?>">
    </div>
    <div class="container">
        <label for="Jabatan">Jabatan : </label>
        <input type="text" name="Jabatan" id="Jabatan" value="<?= $pkj["Jabatan"]; ?>">
    </div>
    <div class="container">
        <label for="Tahun_Masuk">Tahun_Masuk : </label>
        <input type="text" name="Tahun_Masuk" id="Tahun_Masuk" value="<?= $pkj["Tahun_Masuk"]; ?>">
    </div>
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>