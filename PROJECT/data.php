<?php
  require 'function.php';

 $pekerja = query("SELECT * FROM pekerja");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
  <h2 style="text-align: center;">DATA KARYAWAN</h2>
  <a href="tambah.php">Tambahkan Data</a>
  <table border="1" cellpadding=10; cellspacing=0; align="center"> 
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Divisi</th>
        <th>Jabatan</th>
        <th>Tahun Masuk</th>
        <th>Aksi</th>
    </tr>
    <?php foreach( $pekerja as $pkj ) :?>
    <tr>
        <td><?= $pkj["id"]; ?></td>
        <td><?= $pkj["Nama"]; ?></td>
        <td><?= $pkj["Divisi"]; ?></td>
        <td><?= $pkj["Jabatan"]; ?></td>
        <td><?= $pkj["Tahun_Masuk"]; ?></td>
        <td>
            <a href="edit.php?id=<?= $pkj["id"]; ?>">Edit</a>
            <a href="delete.php?id=<?= $pkj["id"]; ?>">Hapus</a>
            <a href="detail.php?id=<?= $pkj["id"]; ?>">Detail</a>
        </td>
    </tr>
    <?php endforeach; ?>
  </table>  
</body>
</html>