<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_spkwp";

    $con = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }

    $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");

    // $ambilparagraf = $con->query("SELECT * FROM paragraph");
    // $cekdbparagraf = $ambilparagraf->fetch_assoc();
?>