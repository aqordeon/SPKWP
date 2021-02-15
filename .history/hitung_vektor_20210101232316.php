<?php 
session_start();
                    include "koneksi.php";

                $tabelkriteria = mysqli_query($con, "SELECT * FROM tb_kriteria");
                $baristabelkriteria = mysqli_num_rows($tabelkriteria);
                
                
                print_r($_SESSION);
                
?>