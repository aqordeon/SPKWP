<?php 
        session_start();
        include "koneksi.php";
        
    ?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobot Kriteria</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <style>
        body {
            background-image: url("images/whitepaper.jpg");
            background-color: #cccccc;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
    <center>
        <h1>Tentukan Bobot Kriteria</h1>
        <h3>(prioritas)</h3>

        <br><br><br>
            <?php 
                $tabelkriteria = mysqli_query($con, "SELECT * FROM tb_kriteria");
                $baristabelkriteria = mysqli_num_rows($tabelkriteria);
            ?>

            <!-- FORM -->
            <div class="container">
                <form method="post" action="" enctype='multipart/form-data'>
                    <h2 style="">Tahun Rilis</h2>
                    <input type="radio" id="optradio_tahunrilis1" name="radio_tahunrilis" value="1" required="required"><label for="optradio_tahunrilis1">&nbsp;1&nbsp;&nbsp;</label>
                    <input type="radio" id="optradio_tahunrilis2" name="radio_tahunrilis" value="2"><label for="optradio_tahunrilis2">&nbsp;2&nbsp;&nbsp;</label>
                    <input type="radio" id="optradio_tahunrilis3" name="radio_tahunrilis" value="3"><label for="optradio_tahunrilis3">&nbsp;3&nbsp;&nbsp;</label>
                    <input type="radio" id="optradio_tahunrilis4" name="radio_tahunrilis" value="4"><label for="optradio_tahunrilis4">&nbsp;4&nbsp;&nbsp;</label>
                    <input type="radio" id="optradio_tahunrilis5" name="radio_tahunrilis" value="5"><label for="optradio_tahunrilis5">&nbsp;5&nbsp;&nbsp;</label>
                    <br>
                    <br>

                    <h2 style="">Rating</h2>
                    <input type="radio" id="optradio_rating1" name="radio_rating" value="1" required="required"><label for="optradio_rating1">1</label>
                    <input type="radio" id="optradio_rating2" name="radio_rating" value="2"><label for="optradio_rating2">&nbsp;2&nbsp;&nbsp;</label>
                    <input type="radio" id="optradio_rating3" name="radio_rating" value="3"><label for="optradio_rating3">&nbsp;3&nbsp;&nbsp;</label>
                    <input type="radio" id="optradio_rating4" name="radio_rating" value="4"><label for="optradio_rating4">&nbsp;4&nbsp;&nbsp;</label>
                    <input type="radio" id="optradio_rating5" name="radio_rating" value="5"><label for="optradio_rating5">&nbsp;5&nbsp;&nbsp;</label>

                    <br>
                    <h2 style="">Grafis</h2>
                    <input type="radio" id="optradio_grafis1" name="radio_grafis" value="1" required="required"><label for="optradio_grafis1">1</label>
                    <input type="radio" id="optradio_grafis2" name="radio_grafis" value="2"><label for="optradio_grafis2">2</label>
                    <input type="radio" id="optradio_grafis3" name="radio_grafis" value="3"><label for="optradio_grafis3">3</label>
                    <input type="radio" id="optradio_grafis4" name="radio_grafis" value="4"><label for="optradio_grafis4">4</label>
                    <input type="radio" id="optradio_grafis5" name="radio_grafis" value="5"><label for="optradio_grafis5">5</label>

                    <br>
                    <h2 style="">Tingkat Kesulitan</h2>
                    <input type="radio" id="optradio_tingkatkesulitan1" name="radio_tingkatkesulitan" value="1" required="required"><label for="optradio_tingkatkesulitan1">1</label>
                    <input type="radio" id="optradio_tingkatkesulitan2" name="radio_tingkatkesulitan" value="2"><label for="optradio_tingkatkesulitan2">2</label>
                    <input type="radio" id="optradio_tingkatkesulitan3" name="radio_tingkatkesulitan" value="3"><label for="optradio_tingkatkesulitan3">3</label>
                    <input type="radio" id="optradio_tingkatkesulitan4" name="radio_tingkatkesulitan" value="4"><label for="optradio_tingkatkesulitan4">4</label>
                    <input type="radio" id="optradio_tingkatkesulitan5" name="radio_tingkatkesulitan" value="5"><label for="optradio_tingkatkesulitan5">5</label>
                
                    <br><Br>
                    <input type='submit' class="btn btn-primary" value='Upload' name='but_upload'>
                </form>
            </div>   

            <!-- <a href="hitung_vektor.php" class="btn btn-primary" name='kriteria_submit'>Submit</a>   mengarah ke hitung_vektor.php -->

    </center>

    <?php
        if(isset($_POST['but_upload'])){
            $_SESSION["bobotkriteria_tahunrilis"] = $_POST['radio_tahunrilis'];
            $_SESSION["bobotkriteria_rating"] = $_POST['radio_rating'];
            $_SESSION["bobotkriteria_grafis"] = $_POST['radio_grafis'];
            $_SESSION["bobotkriteria_tingkatkesulitan"] = $_POST['radio_tingkatkesulitan'];
            echo "<div class='alert alert-info'>Bobot Kriteria berhasil diterima.";
            echo "<meta http-equiv='refresh' content='1;url=hitung_vektor.php'>";
        }
    ?>
    
</div>
</body>
</html>