<?php
    //konek ke database
    
    $koneksi = mysqli_connect("localhost", "root", "", "arara");

    function query ($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($querydata = mysqli_fetch_assoc($result)){
            $rows[] = $querydata;
        }

        return $rows;
    }

    function tambah($data){
        global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $fakultas = htmlspecialchars($data["fakultas"]);
        $nim = htmlspecialchars($data["nim"]);

        $query = "INSERT INTO info1 VALUES ('', '$nama', '$prodi', '$fakultas', '$nim')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        $hapus = "DELETE FROM info1 WHERE id = $id";
        mysqli_query($koneksi, $hapus);
        
        return mysqli_affected_rows($koneksi);
    }

    function edit($data){
        global $koneksi;
        
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $fakultas = htmlspecialchars($data["fakultas"]);
        $nim = htmlspecialchars($data["nim"]);

        $query = "UPDATE info1 SET 
                    nama = '$nama',
                    prodi = '$prodi',
                    fakultas = '$fakultas',
                    nim = '$nim'
                WHERE id = '$id'
                    ";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

?>