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
                <h2 style="display: inline;">Tahun Rilis</h2>
                <form method="post" action="" enctype='multipart/form-data'>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tahunrilis" value="1">1 <!-- name = optradio1 / optradio2 -->
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tahunrilis" value="2">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tahunrilis" value="3">3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tahunrilis" value="4">4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tahunrilis" value="5">5
                    </label>
                </form>

                <h2 style="display: inline;">Rating</h2>
                <form method="post" action="" enctype='multipart/form-data'>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_rating" value="1">1 <!-- name = optradio1 / optradio2 -->
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_rating" value="2">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_rating" value="3">3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_rating" value="4">4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_rating" value="5">5
                    </label>
                </form>

                <h2 style="display: inline;">Grafis</h2>
                <form method="post" action="" enctype='multipart/form-data'>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_grafis" value="1">1 <!-- name = optradio1 / optradio2 -->
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_grafis" value="2">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_grafis" value="3">3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_grafis" value="4">4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_grafis" value="5">5
                    </label>
                </form>

                <h2 style="display: inline;">Tingkat Kesulitan</h2>
                <form method="post" action="" enctype='multipart/form-data'>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tingkatkesulitan" value="1">1 <!-- name = optradio1 / optradio2 -->
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tingkatkesulitan" value="2">2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tingkatkesulitan" value="3">3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tingkatkesulitan" value="4">4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio_tingkatkesulitan" value="5">5
                    </label>
                </form>


            </div>

            <input type='submit' class="btn btn-primary" value='Upload' name='kriteria_submit'>
            <a href="hitung_vektor.php" class="btn btn-primary" name='kriteria_submit'>Subdmit</a>   <!-- mengarah ke hitung_vektor.php -->

    </center>

    <?php
        if(isset($_POST['kriteria_submit'])){
    
            echo "<div class='alert alert-info'>Query berhasil dan file telah dipindah.</div>";
                    echo "<meta http-equiv='refresh' content='1;url=produk.php'>";

        }
    ?>

    
</div>
</body>
</html>