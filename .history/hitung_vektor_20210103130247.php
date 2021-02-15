<?php 
session_start();
                    include "koneksi.php";
                $i = 1;
                $j = 1;
                $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");
                $baristabelalternatif = mysqli_num_rows($tabelalternatif);

                $totalbobot_kriteria = $_SESSION["bobotkriteria_tahunrilis"] + $_SESSION["bobotkriteria_rating"] + $_SESSION["bobotkriteria_grafis"] +$_SESSION["bobotkriteria_tingkatkesulitan"];
                $normalisasibobot_tahunrilis = $_SESSION["bobotkriteria_tahunrilis"]/$totalbobot_kriteria;
                $normalisasibobot_rating = $_SESSION["bobotkriteria_rating"]/$totalbobot_kriteria;
                $normalisasibobot_grafis = $_SESSION["bobotkriteria_grafis"]/$totalbobot_kriteria;
                $normalisasibobot_tingkatkesulitan = $_SESSION["bobotkriteria_tingkatkesulitan"]/$totalbobot_kriteria;
                
                if ($baristabelalternatif > 0) {
                    while($row = mysqli_fetch_assoc($tabelalternatif)) {
                        $_SESSION["S".$i] = pow($row['tahun_rilis'], $normalisasibobot_tahunrilis) * pow($row['rating'], $normalisasibobot_rating) * pow($row['grafis'], $normalisasibobot_grafis) * pow($row['tingkat_kesulitan'], -($normalisasibobot_tingkatkesulitan));
                        $total_vektors = $total_vektors + $_SESSION["S".$i];
                        $i++;
                    }
                }

                // if ($baristabelalternatif > 0) {
                //     while($row = mysqli_fetch_assoc($tabelalternatif)) {

                //         $j++;
                //     }
                // }


                print_r($_SESSION);
                echo "<script>alert($total_vektors);</script>";
                 


?>