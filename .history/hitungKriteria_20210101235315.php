<?php 
        session_start();
        include "koneksi.php";
        
    ?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
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
                    <input type="radio" id="optradio_tahunrilis1" name="radio_tahunrilis" value="1"><label for="optradio_tahunrilis1">1</label>
                    <input type="radio" id="optradio_tahunrilis2" name="radio_tahunrilis" value="2"><label for="optradio_tahunrilis2">2</label>
                    <input type="radio" id="optradio_tahunrilis3" name="radio_tahunrilis" value="3"><label for="optradio_tahunrilis3">3</label>
                    <input type="radio" id="optradio_tahunrilis4" name="radio_tahunrilis" value="4"><label for="optradio_tahunrilis4">4</label>
                    <input type="radio" id="optradio_tahunrilis5" name="radio_tahunrilis" value="5"><label for="optradio_tahunrilis5">5</label>

                    <h2 style="">Rating</h2>
                    <input type="radio" id="optradio_rating1" name="radio_rating" value="1"><label for="optradio_rating1">1</label>
                    <input type="radio" id="optradio_rating2" name="radio_rating" value="2"><label for="optradio_rating2">2</label>
                    <input type="radio" id="optradio_rating3" name="radio_rating" value="3"><label for="optradio_rating3">3</label>
                    <input type="radio" id="optradio_rating4" name="radio_rating" value="4"><label for="optradio_rating4">4</label>
                    <input type="radio" id="optradio_rating5" name="radio_rating" value="5"><label for="optradio_rating5">5</label>

                    <h2 style="">Grafis</h2>
                    <input type="radio" id="optradio_grafis1" name="radio_grafis" value="1"><label for="optradio_grafis1">1</label>
                    <input type="radio" id="optradio_grafis2" name="radio_grafis" value="2"><label for="optradio_grafis2">2</label>
                    <input type="radio" id="optradio_grafis3" name="radio_grafis" value="3"><label for="optradio_grafis3">3</label>
                    <input type="radio" id="optradio_grafis4" name="radio_grafis" value="4"><label for="optradio_grafis4">4</label>
                    <input type="radio" id="optradio_grafis5" name="radio_grafis" value="5"><label for="optradio_grafis5">5</label>

                    <h2 style="">Tingkat Kesulitan</h2>
                    <input type="radio" id="optradio_tingkatkesulitan1" name="radio_tingkatkesulitan" value="1"><label for="optradio_tingkatkesulitan1">1</label>
                    <input type="radio" id="optradio_tingkatkesulitan2" name="radio_tingkatkesulitan" value="2"><label for="optradio_tingkatkesulitan2">2</label>
                    <input type="radio" id="optradio_tingkatkesulitan3" name="radio_tingkatkesulitan" value="3"><label for="optradio_tingkatkesulitan3">3</label>
                    <input type="radio" id="optradio_tingkatkesulitan4" name="radio_tingkatkesulitan" value="4"><label for="optradio_tingkatkesulitan4">4</label>
                    <input type="radio" id="optradio_tingkatkesulitan5" name="radio_tingkatkesulitan" value="5"><label for="optradio_tingkatkesulitan5">5</label>
                
                    <input type="submit">
                </form>
            </div>   

            <a href="hitung_vektor.php" class="btn btn-primary" name='kriteria_submit'>Submit</a>   <!-- mengarah ke hitung_vektor.php -->

    </center>

    <?php
        if(isset($_POST['kriteria_submit'])){
    
            $_SESSION["bobotkriteria_tahunrilis"] = "444";
            echo "<div class='alert alert-info'>Query berhasil dan file telah dipindah.</div>";
                    echo "<meta content='4;url=hitung_vektor.php'>";

        }
    ?>

    
</div>
</body>
</html>