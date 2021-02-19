<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_spkwp";

    $con = mysqli_connect($servername, $username, $password, $database);

    $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");

    // $ambilparagraf = $con->query("SELECT * FROM paragraph");
    // $cekdbparagraf = $ambilparagraf->fetch_assoc();
?>