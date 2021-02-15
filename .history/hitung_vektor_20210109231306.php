<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css" type="text/css" />

    <style>
        table {width: 300px; text-align: center; margin: auto; border: 1px solid #95a5a6;}
        table th {background-color: #dfe4ea; border: 1px solid #95a5a6;}
        table td {border: 1px solid #95a5a6;}
        h2{ text-align: center; font-style: italic; font-weight: bold;}
    </style>
</head>
<body>
    <div class="container">

<?php 
session_start();
                    include "koneksi.php";
                $i = 1;
                $j = 1;
                $total_vektors = 0;
                $third = $first = $second = 0;
                $rank3 = $rank1 = $rank2 = 0;
                $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");
                $tabelalternatif1 = mysqli_query($con, "SELECT * FROM tb_alternatif");
                $baristabelalternatif = mysqli_num_rows($tabelalternatif);
                $baristabelalternatif1 = mysqli_num_rows($tabelalternatif1);

                $totalbobot_kriteria = $_SESSION["bobotkriteria_tahunrilis"] + $_SESSION["bobotkriteria_rating"] + $_SESSION["bobotkriteria_grafis"] +$_SESSION["bobotkriteria_tingkatkesulitan"];
                $normalisasibobot_tahunrilis = $_SESSION["bobotkriteria_tahunrilis"]/$totalbobot_kriteria;
                $normalisasibobot_rating = $_SESSION["bobotkriteria_rating"]/$totalbobot_kriteria;
                $normalisasibobot_grafis = $_SESSION["bobotkriteria_grafis"]/$totalbobot_kriteria;
                $normalisasibobot_tingkatkesulitan = $_SESSION["bobotkriteria_tingkatkesulitan"]/$totalbobot_kriteria;
                
                if ($baristabelalternatif > 0) {
                    while($row = mysqli_fetch_assoc($tabelalternatif)) {
                        $_SESSION["S".$i] = pow($row['tahun_rilis'], $normalisasibobot_tahunrilis) * pow($row['rating'], $normalisasibobot_rating) * pow($row['grafis'], $normalisasibobot_grafis) * pow($row['tingkat_kesulitan'], -($normalisasibobot_tingkatkesulitan));
                        $total_vektors = $total_vektors + $_SESSION["S".$i];
                        echo "<br>S" . $i . " adalah " . $_SESSION["S".$i];
                        $i++;
                    }
                }

                echo "<br>Total Vektor S adalah <b>" . $total_vektors . "</b><br>";

                $i = 0;
                if ($baristabelalternatif1 > 0) {
                    while($row1 = mysqli_fetch_assoc($tabelalternatif1)) {
                        $i++;
                        $_SESSION["V".$i] = $_SESSION["S".$i]/$total_vektors;
                    }
                }

                $vektorv = array(array());
                for($j = 1; $j<=$i; $j++){
                    array_push($vektorv, array("V" . $j, $_SESSION["V".$j]));

                    

                    echo "<br>V" . $j . " = " . $_SESSION["S".$j] . "/" . $total_vektors . " = " . $_SESSION["V".$j];

                }
                ?>

                <form>
                    <table border="1" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Vektor V</th>
                            <th>Nilai</th>
                        </tr>

                    <?php  for ($no=1; $no<count($vektorv); $no++) { ?>

                        <tr>
                            <td> <?php echo $no; ?></td>
                            <td><?php echo "V" . $no; ?></td>
                            <td><?php echo $_SESSION["V".$no]; ?></td>
                            <?php 
                                $tampungnilaisessionv = $_SESSION["V".$no];
                                if ($tampungnilaisessionv > $first){
                                    $third = $second;
                                    $second = $first; 
                                    $first = $tampungnilaisessionv;
                                    
                                    $rank3 = $rank2;
                                    $rank2 = $rank1;
                                    $rank1 = "V".$no;
                                    
                                }

                                else if ($tampungnilaisessionv > $second){ 
                                    $third = $second; 
                                    $second = $tampungnilaisessionv; 

                                    $rank3 = $rank2;
                                    $rank2 = "V".$no;
                                }

                                else if ($tampungnilaisessionv > $third){
                                    $third = $tampungnilaisessionv;

                                    $rank3 = "V".$no;
                                }

                                else{

                                }
                                     
                            ?>

                        </tr>

                    <?php } ?>

                    </table>
                </form>

                <?php

                    echo "<br>Rank 1 : " . $rank1 . " : " . $first;
                    echo "<Br>Rank 2 : " . $rank2 . " : " . $second;
                    echo "<Br>Rank 3 : " . $rank3 . " : " . $third;
                    // print_r($vektorv);
                    // echo "<script>alert($total_vektors);</script>";
                ?>

                <br>
                <center><a href="../spkwp" class="btn btn-info">Kembali lakukan perhitungan</a></center>

    </div>
</body>
</html>