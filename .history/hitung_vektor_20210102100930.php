<?php 
session_start();
                    include "koneksi.php";

                $tabelkriteria = mysqli_query($con, "SELECT * FROM tb_kriteria");
                $baristabelkriteria = mysqli_num_rows($tabelkriteria);
                
                
                print_r($_SESSION);

                $totalbobot_kriteria = $_SESSION["bobotkriteria_tahunrilis"] + $_SESSION["bobotkriteria_rating"] + $_SESSION["bobotkriteria_grafis"] +$_SESSION["bobotkriteria_tingkatkesulitan"];
                

                echo "<script>alert($totalbobot_kriteria);</script>";
                $totalbobot_kriteria;
?>