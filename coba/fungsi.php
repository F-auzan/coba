<?php

// date
// echo date ("l, d-M-Y");

// Time
// echo time();
// tampilkan 2 hari kedepan
// echo date ("l", time()+172800);

// echo date("l", time()-60*60*24*101);

// mktime
// membuat detik sendiri dari 1 januari 1970
// mktime (0,0,0,0,0,0)
// Jam, menit, detik, bulan, tanggal, tahun
// echo mktime(0,0,0,3,11,2023)
// echo date ("l", mktime(0,0,0,8,25,1985));

// strtotime
// echo date ("l", strtotime("20 may 1999));

// $host = "localhost";
// $user = "root";
// $password = "";
// $database = "struktur";

// $conn = mysqli_connect($host, $user, $password, $database)

$conn = mysqli_connect("localhost", "root", "", "rumah_kita");

function query($query){
    global $conn;

    // ambil data database
    $ambil = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_asoc($ambil)) {
        $rows[] = $row;
    }

}
?>