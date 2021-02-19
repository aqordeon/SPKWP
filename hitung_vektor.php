<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Perhitungan Vektor</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

    <style>
        body {
            background-image: url("images/whitepaper.jpg");
            background-color: #cccccc;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>

    <?php 
        session_start();
        include "koneksi.php";
    ?>
</head>
<body>
    <a href="index.php" class="btn btn-outline-dark" style="height: 100vh; width: 10vw; position: relative; border: none; float: right;">
        <h1 style="margin: 0; position: relative; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">&#8674; Beranda</h1>
    </a>
    <div class="container">
    <center>
        <div class="row">
            <div class="col" style="height: 90vh; overflow: auto;">
                <?php 
                    
                    $i = $j = 1;
                    $total_vektors = 0;
                    $first = $second = $third = 0;
                    $rank3 = $rank1 = $rank2 = 0;
                    $namagame1= $namagame2 = $namagame3 = "abc";
                    $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");
                    $tabelalternatif1 = mysqli_query($con, "SELECT * FROM tb_alternatif");
                    $baristabelalternatif = mysqli_num_rows($tabelalternatif);
                    $baristabelalternatif1 = mysqli_num_rows($tabelalternatif1);

                    // Deklarasi variabel dari session
                    $totalbobot_kriteria = $_SESSION["bobotkriteria_tahunrilis"] + $_SESSION["bobotkriteria_rating"] + $_SESSION["bobotkriteria_metascore"] +$_SESSION["bobotkriteria_tingkatkesulitan"];
                    $normalisasibobot_tahunrilis = $_SESSION["bobotkriteria_tahunrilis"]/$totalbobot_kriteria;
                    $normalisasibobot_rating = $_SESSION["bobotkriteria_rating"]/$totalbobot_kriteria;
                    $normalisasibobot_metascore = $_SESSION["bobotkriteria_metascore"]/$totalbobot_kriteria;
                    $normalisasibobot_tingkatkesulitan = $_SESSION["bobotkriteria_tingkatkesulitan"]/$totalbobot_kriteria;
                ?>

                    <!-- Perhitungan vektor S dan menyimpan database alternatif nama_game ke session -->
                    <h2>Hasil perhitungan vektor S</h2>
                    <table class="table table-striped " style="width: 90%; margin: auto auto;">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center;">Vektor S</th>
                                <th scope="col">Nilai Vektor S</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if ($baristabelalternatif > 0) {
                                    while($row = mysqli_fetch_assoc($tabelalternatif)) { 

                                        $konversitahunrilis = $row['tahun_rilis'] >= 2020 ? 5 : (2018 <= $row['tahun_rilis'] && $row['tahun_rilis'] <= 2019 ? 4 : (2015 <= $row['tahun_rilis'] && $row['tahun_rilis']<= 2017 ? 3 : (2012 <= $row['tahun_rilis'] && $row['tahun_rilis']<= 2014 ? 2 : 1)));
                                        $konversirating = $row['rating'] >= 4.4 ? 5 : (4.1 <= $row['rating'] && $row['rating'] < 4.4 ? 4 : (3.7 <= $row['rating'] && $row['rating']< 4.1 ? 3 : (3.1 <= $row['rating'] && $row['rating'] < 3.7 ? 2 : 1)));
                                        $konversitingkatkesulitan = $row['tingkat_kesulitan'] >= 4.4 ? 5 : (4.1 <= $row['tingkat_kesulitan'] && $row['tingkat_kesulitan'] < 4.4 ? 4 : (3.7 <= $row['tingkat_kesulitan'] && $row['tingkat_kesulitan']< 4.1 ? 3 : (3.1 <= $row['tingkat_kesulitan'] && $row['tingkat_kesulitan']< 3.7 ? 2 : 1)));
                                        $konversimetascore = $row['metascore'] >= 91 ? 5 : (83 <= $row['metascore'] && $row['metascore'] < 91 ? 4 : (67 <= $row['metascore'] && $row['metascore']< 83 ? 3 : (58 <= $row['metascore'] && $row['metascore']< 83 ? 2 : 1)));
                                        
                                        $_SESSION["S".$i] = pow($konversitahunrilis, $normalisasibobot_tahunrilis) * pow($konversirating, $normalisasibobot_rating) * pow($row['metascore'], $normalisasibobot_metascore) * pow($konversitingkatkesulitan, -($normalisasibobot_tingkatkesulitan));
                                        $total_vektors = $total_vektors + $_SESSION["S".$i];
                                        // echo "<br>S" . $i . " adalah " . $_SESSION["S".$i];
                                        $_SESSION["namagame".$i] = $row['nama_game']; ?>
                                        <tr>
                                            <th scope="row" style="text-align: center;"><?php echo "S$i" ?></th>
                                            <td><?php echo $_SESSION["S".$i]; ?></td>
                                        </tr>
                                        <?php $i++;
                                    }
                                } ?>
                        </tbody>
                    </table>   
                    <?php echo "Total Vektor S adalah <b>" . $total_vektors . "</b><br>";
                        
                        // Perhitungan vektor V
                        $i = 0;
                        if ($baristabelalternatif1 > 0) {
                            while($row1 = mysqli_fetch_assoc($tabelalternatif1)) {
                                $i++;
                                $_SESSION["V".$i] = $_SESSION["S".$i]/$total_vektors;
                            }
                        }

                        // Memasukkan nilai vektor V ke array;
                        $vektorv = array(array());
                        for($j = 1; $j<=$i; $j++){
                            array_push($vektorv, array("V" . $j, $_SESSION["V".$j]));
                            // echo "<br>V" . $j . " = " . $_SESSION["S".$j] . "/" . $total_vektors . " = " . $_SESSION["V".$j];
                        }
                    ?>
    
                    <br>
                    <br>

                    <h2>Hasil perhitungan vektor V</h2>
                    <table class="table table-striped " style="width: 90%; margin: auto auto;">
                        <thead>
                            <tr>
                                <th scope="col">Vektor V</th>
                                <th scope="col">Alternatif</th>
                                <th scope="col">Nilai Vektor V</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  for ($no=1; $no<count($vektorv); $no++) { ?>
                            <tr>
                                <th scope="row" style="text-align: center;"><?php echo "V" . $no; ?></th>
                                <td><?php echo $_SESSION["namagame".$no]; ?></td>
                                <td><?php echo $_SESSION["V".$no]; ?></td>
                                <?php 
                                    $tampungnilaisessionv = $_SESSION["V".$no];
                                    if ($tampungnilaisessionv > $first){ // perankingan 1
                                        $third = $second;
                                        $second = $first; 
                                        $first = $tampungnilaisessionv;
                                        
                                        $rank3 = $rank2;
                                        $rank2 = $rank1;
                                        $rank1 = "V".$no;

                                        $namagame3 = $namagame2;
                                        $namagame2 = $namagame1;
                                        $namagame1 = $_SESSION['namagame'.$no];
                                    }

                                    else if ($tampungnilaisessionv > $second){ // perankingan 2
                                        $third = $second; 
                                        $second = $tampungnilaisessionv; 

                                        $rank3 = $rank2;
                                        $rank2 = "V".$no;

                                        $namagame3 = $namagame2;
                                        $namagame2 = $_SESSION['namagame'.$no];
                                    }

                                    else if ($tampungnilaisessionv > $third){ // perankingan 3
                                        $third = $tampungnilaisessionv;

                                        $rank3 = "V".$no;

                                        $namagame3 = $_SESSION['namagame'.$no];
                                    }
                                ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <div class="col">
            <!-- Cetak Perankingan -->
            <?php
                // echo "<br>Rank 1 : " . $rank1 . " : " . $first;
                // echo "<Br>Rank 2 : " . $rank2 . " : " . $second;
                // echo "<Br>Rank 3 : " . $rank3 . " : " . $third;
                // print_r($vektorv);
                // echo "<script>alert($total_vektors);</script>";
            ?>

                <!-- Cetak hasil akhir -->
                <div style="width: 90%; margin: 0; position: relative; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);"> <!-- agar center vertical dan horizontal -->
                    <h2>Hasil akhir perankingan vektor V</h2>
                        <table class="table table-striped">
                            <thead class="table-active">
                                <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Vektor V</th>
                                    <th scope="col">Alternatif</th>
                                    <th scope="col">Nilai Vektor V</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" style="text-align: center;">1</th>
                                    <td><?php echo $rank1; ?></td>
                                    <td><?php echo $namagame1; ?></td>
                                    <td><?php echo $first; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="text-align: center;">2</th>
                                    <td><?php echo $rank2; ?></td>
                                    <td><?php echo $namagame2; ?></td>
                                    <td><?php echo $second; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="text-align: center;">3</th>
                                    <td><?php echo $rank3; ?></td>
                                    <td><?php echo $namagame3; ?></td>
                                    <td><?php echo $third; ?></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
            <Br>
        </div>
        <!-- <a href="../spkwp" class="btn btn-info" style="margin: 10px;">Kembali lakukan perhitungan</a> -->
        </center>
    </div>
</body>
</html>