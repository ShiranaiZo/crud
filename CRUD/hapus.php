<?php

    require 'functionproject.php'; 
    $id = $_GET["id"];

    if(hapus($id) > 0){
        echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'database.php';
        </script>";
    }
    else{
        echo "
        <script>
            alert('Data tidak berhasil dihapus');
            document.location.href = 'database.php';
        </script>";
    }


?>