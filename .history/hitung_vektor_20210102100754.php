<?php 
session_start();
                    include "koneksi.php";

                $tabelkriteria = mysqli_query($con, "SELECT * FROM tb_kriteria");
                $baristabelkriteria = mysqli_num_rows($tabelkriteria);
                
                
                print_r($_SESSION);

                $totalbobot_kriteria = $_SESSION["bobotkriteria_tahunrilis"] + $_SESSION["bobotkriteria_tahunrilis"] + $_SESSION["bobotkriteria_tahunrilis"] +$_SESSION["bobotkriteria_tahunrilis"];
                

                echo "<div class='aler alert-info>" . $totalbobot_kriteria;
?>