<?php
    require 'functionproject.php';

    $id = $_GET["id"];

    $mahasiswa = query("SELECT * FROM datamahasiswa WHERE id = $id")[0];

        if(isset($_POST["submit"])){
        
            if(edit($_POST) > 0){
            echo"
                <script>
                   alert('Data berhasil diubah');
                    document.location.href = 'database.php';
                </script>
            ";
    }
            else { 
            echo"
                 <script>
                    alert('Data tidak berhasil diubah');
                    document.location.href = 'edit.php';
                </script>
            ";
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

<h1 style="text-align: center;">Update Data</h1>
    
    <form style="text-align: center;" action="" method="post">
        <input type="hidden" name="id" value="<?=$mahasiswa["id"]; ?>">
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" id="Nama" name="Nama" required value="<?=$mahasiswa["Nama"]; ?>"><br>       
            </li>
            
            <li>
                <label for="Hobby">Hobby :</label>
                <input type="text" id="Hobby" name="Hobby" required value="<?=$mahasiswa["Hobby"]; ?>"><br>
            </li>

            <li>
                <label for="Lulusan">Lulusan :</label>
                <input type="text" id="Lulusan" name="Lulusan" required value="<?=$mahasiswa["Lulusan"]; ?>"><br>
            </li>       

            <li>
                <label for="Cita_Cita">Cita - Cita :</label>
                <input type="text" id="Cita_Cita" name="Cita_Cita" required value="<?=$mahasiswa["Cita_Cita"]; ?>"><br>
            </li>           
        <br>
        <button type="submit" name="submit">Edit data</button>
    </form>
    
</body>
</html>