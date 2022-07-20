<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }else {
        die ("No ID tidak ditemukan!");
    }

    include "function.php";
    $query = mysqli_query($conn, "SELECT * FROM pekerja WHERE id='$id'");
    $result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan</title>
    <style>
        h2{
            text-align: center;
        }
        table{
            text-align: left;
        }
        p{
            margin-top: 350px;
            text-align: center;
            font-family: 'Times New Roman';
        }
    </style>
</head>
<body>
    <h2>Detail Karyawan</h2>
    <table align="center"; >
        <tr>
            <td>ID Karyawan :</td>
            <td><?= $result['id']?></td>
        </tr>
        <tr>
            <td>Nama Karyawan :</td>
            <td><?= $result['Nama']?></td>
        </tr>
        <tr>
            <td>Divisi :</td>
            <td><?= $result['Divisi']?></td>
        </tr>
        <tr>
            <td>Jabatan :</td>
            <td><?= $result['Jabatan']?></td>
        </tr>
        <tr>
            <td>Tahun Masuk :</td>
            <td><?= $result['Tahun_Masuk']?></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="data.php">Kembali</a></td>
        </tr>
    </table>
        <p>Copyright by Ara's Group</p>
</body>
</html>