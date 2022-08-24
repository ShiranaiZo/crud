<?php
    require 'functionproject.php';
    $datadiri = mysqli_query($kons, "SELECT*FROM datamahasiswa");
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
<h1 style="text-align: center;">Data Mahasiswa</h3>
<h3 style="text-align: center;"><button><a href="tambah.php">Tambah</a></button></h3>

<table border="1px"; align="center"; cellspacing=0; cellpadding=20;>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Hobby</th>
            <th>Lulusan</th>
            <th>Cita_Cita</th>
        </tr>
        <?php foreach($datadiri as $querydata): ?>
        
            <tr>
            <td><?php echo $querydata["id"];?></td>
            <td><?php echo $querydata["Nama"];?></td>
            <td><?php echo $querydata["Hobby"];?></td>
            <td><?php echo $querydata["Lulusan"];?></td>
            <td><?php echo $querydata["Cita_Cita"];?></td>
            <td>
                <a href="edit.php?id=<?=$querydata["id"];?>">Edit</a>
                <a href="hapus.php?id=<?=$querydata["id"];?>">Hapus</a>
            </td>
        </tr>

    <?php endforeach ?>

</table>
</body>
</html>