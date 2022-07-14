<?php
    require 'functions.php';
    //ambil data dari table
    $mahasiswa = mysqli_query($koneksi, "select*from info1");
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
<h1 style="text-align: center;">DATA MAHASISWA</h1>
<a href="tambah.php">Tambah</a>
<br>
<br>

<table border=1px; align="center"; cellspacing=0; cellpadding=20;>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
            <th>NIM</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $querydata): ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $querydata["nama"];?></td>
            <td><?php echo $querydata["prodi"];?></td>
            <td><?php echo $querydata["fakultas"];?></td>
            <td><?php echo $querydata["nim"];?></td>
            <td>
                <a href="edit.php?id=<?=$querydata["id"]; ?>">Edit</a>
                <a href="hapus.php?id=<?=$querydata["id"]; ?>" onclick="return confirm('Apakah Anda Yakin?')"; >Delete</a>
                <a href="detail2.php?id=<?=$querydata["id"]; ?>">Detail</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</table>

</body>
</html>