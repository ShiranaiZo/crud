<?php

    require 'functionproject.php';
    if(isset($_POST["submit"])){

        if(tambah($_POST) > 0){
            echo"
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'database.php';
            </script>
            ";
        }
        else{
            echo"
            <script>
                alert('Data tidak berhasil ditambahkan');
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
    <h1 style="text-align: center;">Input data</h1>
    <form style="text-align: center;" action="" method="POST">
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" id="Nama" name="Nama"><br>       
            </li>
            
            <li>
                <label for="Hobby">Hobby :</label>
                <input type="text" id="Hobby" name="Hobby"><br>
            </li>

            <li>
                <label for="Lulusan">Lulusan :</label>
                <input type="text" id="Lulusan" name="Lulusan"><br>
            </li>       

            <li>
                <label for="Cita_Cita">Cita - Cita :</label>
                <input type="text" id="Cita_Cita" name="Cita_Cita"><br>
            </li>           
        <br>
        <input type="submit" name="submit">
    </form>

</body>
</html>