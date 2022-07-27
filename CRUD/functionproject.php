<?php

    $kons = mysqli_connect("localhost", "root", "", "newproject");

    function query($query){
        global $kons;
        $result = mysqli_query($kons, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data){
        global $kons;
        
        $Nama = htmlspecialchars($data["Nama"]);
        $Hobby = htmlspecialchars($data["Hobby"]);
        $Lulusan = htmlspecialchars($data["Lulusan"]);
        $Cita_Cita = htmlspecialchars($data["Cita_Cita"]);

        $query = "INSERT INTO datamahasiswa VALUES('', '$Nama', '$Hobby', '$Lulusan', '$Cita_Cita')";
        mysqli_query($kons, $query);

        return mysqli_affected_rows($kons);
    }

    function hapus($id){
        global $kons;
        $hapus = "DELETE FROM datamahasiswa WHERE id = $id";
        mysqli_query($kons, $hapus);

        return mysqli_affected_rows($kons);
    }

    function edit($data){
        global $kons;

        $id = $data["id"];
        $Nama = htmlspecialchars($data["Nama"]);
        $Hobby = htmlspecialchars($data["Hobby"]);
        $Lulusan = htmlspecialchars($data["Lulusan"]);
        $Cita_Cita = htmlspecialchars($data["Cita_Cita"]);

        $query = "UPDATE datamahasiswa SET
                    Nama = '$Nama',
                    Hobby = '$Hobby',
                    Lulusan = '$Lulusan',
                    Cita_Cita = '$Cita_Cita'
                Where id = $id
                    ";

                mysqli_query($kons, $query);

        return mysqli_affected_rows($kons);
    }
?>