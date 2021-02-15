<?php 
    include "koneksi.php";
    $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");
    $baristabelalternatif = mysqli_num_rows($tabelalternatif);



?>