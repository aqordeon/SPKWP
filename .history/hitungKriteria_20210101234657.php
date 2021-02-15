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

            <div class="container">
                
                <form method="post" action="" enctype='multipart/form-data'>
                    <h2 style="">Tahun Rilis</h2>
                    <input type="radio" id="optradio_tahunrilis1" name="radio_tahunrilis" value="1"><label for="optradio_tahunrilis1">1</label>
                    <input type="radio" id="optradio_tahunrilis2" name="radio_tahunrilis" value="2"><label for="optradio_tahunrilis2">2</label>
                    <input type="radio" id="optradio_tahunrilis3" name="radio_tahunrilis" value="3"><label for="optradio_tahunrilis3">3</label>
                    <input type="radio" id="optradio_tahunrilis4" name="radio_tahunrilis" value="4"><label for="optradio_tahunrilis4">4</label>
                    <input type="radio" id="optradio_tahunrilis5" name="radio_tahunrilis" value="5"><label for="optradio_tahunrilis5">5</label>

                    <h2 style="">Rating</h2>
                    <input type="radio" id="optradio_tahunrilis1" name="radio_tahunrilis" value="1"><label for="male">1</label>
                    <input type="radio" id="optradio_tahunrilis2" name="radio_tahunrilis" value="2"><label for="female">2</label>
                    <input type="radio" id="optradio_tahunrilis3" name="radio_tahunrilis" value="3"><label for="other">3</label>
                    <input type="radio" id="optradio_tahunrilis4" name="radio_tahunrilis" value="4"><label for="other">4</label>
                    <input type="radio" id="optradio_tahunrilis5" name="radio_tahunrilis" value="5"><label for="other">5</label>

                    <h2 style="">Grafis</h2>
                    <input type="radio" id="optradio_tahunrilis1" name="radio_tahunrilis" value="1"><label for="male">1</label>
                    <input type="radio" id="optradio_tahunrilis2" name="radio_tahunrilis" value="2"><label for="female">2</label>
                    <input type="radio" id="optradio_tahunrilis3" name="radio_tahunrilis" value="3"><label for="other">3</label>
                    <input type="radio" id="optradio_tahunrilis4" name="radio_tahunrilis" value="4"><label for="other">4</label>
                    <input type="radio" id="optradio_tahunrilis5" name="radio_tahunrilis" value="5"><label for="other">5</label>

                    <h2 style="">Tingkat Kesulitan</h2>
                    <input type="radio" id="optradio_tahunrilis1" name="radio_tahunrilis" value="1"><label for="male">1</label>
                    <input type="radio" id="optradio_tahunrilis2" name="radio_tahunrilis" value="2"><label for="female">2</label>
                    <input type="radio" id="optradio_tahunrilis3" name="radio_tahunrilis" value="3"><label for="other">3</label>
                    <input type="radio" id="optradio_tahunrilis4" name="radio_tahunrilis" value="4"><label for="other">4</label>
                    <input type="radio" id="optradio_tahunrilis5" name="radio_tahunrilis" value="5"><label for="other">5</label>

                </form>


            </div>

            
            <a href="hitung_vektor.php" class="btn btn-primary" name='kriteria_submit'>Subdmit</a>   <!-- mengarah ke hitung_vektor.php -->

    </center>

    <?php
        if(isset($_POST['kriteria_submit'])){
    
            $_SESSION["bobotkriteria_tahunrilis"] = $_POST["optradio_tahunrilis"];
            echo "<div class='alert alert-info'>Query berhasil dan file telah dipindah.</div>";
                    echo "<meta http-equiv='refresh' content='4;url=hitung_vektor.php'>";

        }
    ?>

    
</div>
</body>
</html>