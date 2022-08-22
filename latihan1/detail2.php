<?php
    if(isset($_GET['id'])){
        $id    =$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    require 'functions.php';
    $query    =mysqli_query($koneksi, "SELECT * FROM info1 WHERE id='$id'");
    $result    =mysqli_fetch_array($query);
?>
<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>
    <h2>Detail Data Mahasiswa</h2>
    <p><i>Dibawah ini adalah detail informasi karyawan berdasarkan id_mahasiswa</i> <b><?php echo $id?></b></p>
    <table cellpadding="4">
        <tr>
            <td size="90">ID</td>
            <td>: <?php echo $result['id']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['nama']?></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>: <?php echo $result['prodi']?></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>: <?php echo $result['fakultas']?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: <?php echo $result['nim']?></td>
        </tr>
        
        <tr height="40">
            <td></td>
            <td>   <a href="arara.php">Kembali</a></td>
        </tr>
    </table>
</body>
</html>