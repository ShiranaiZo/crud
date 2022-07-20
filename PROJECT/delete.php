<?php
require 'function.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        <script> 
        alert('Data Terhapus!!');
        document.location.href = 'data.php'; 
        </script>";
}else{
    echo "
        <script> 
        alert('Gagal Terhapus!!');
        document.location.href = 'data.php'; 
        </script>";
}

?>