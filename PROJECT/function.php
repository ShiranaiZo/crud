<?php

$conn = mysqli_connect("localhost", "root", "", "karyawan");

function query($query){
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($hasil) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $Nama = $data["Nama"];
    $Divisi = $data["Divisi"];
    $Jabatan = $data["Jabatan"];
    $Tahun_Masuk = $data["Tahun_Masuk"];

    $query = "INSERT INTO pekerja VALUE ('', '$Nama', '$Divisi', '$Jabatan', '$Tahun_Masuk')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM pekerja WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    $id = $data["id"];
    $Nama = htmlspecialchars($data["Nama"]);
    $Divisi = htmlspecialchars($data["Divisi"]);
    $Jabatan = htmlspecialchars($data["Jabatan"]);
    $Tahun_Masuk = htmlspecialchars($data["Tahun_Masuk"]);

    $query = "UPDATE pekerja SET 
                    Nama = '$Nama', 
                    Divisi = '$Divisi', 
                    Jabatan = '$Jabatan', 
                    Tahun_Masuk = '$Tahun_Masuk'
                    WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>