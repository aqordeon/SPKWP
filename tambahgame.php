<?php 
    include "koneksi.php";
    require_once "auth.php";
?>
<!doctype html>
<html>
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

        
    </head>
    <body>
        <a href="index.php" class="btn btn-outline-dark" style="height: 100vh; width: 10vw; position: relative; border: none; float: right;">
            <h1 style="margin: 0; position: relative; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">&#8674; Beranda</h1>
        </a>
        <center>
        <div class="container" style="">
        <h1>Tambah Game</h1>
        <form method="post" action="" enctype='multipart/form-data'>
            <div class="form-group row">
                <label for="inputnama" class="col-md-2 col-form-label">Nama Game</label>
                <div class="col-md-3 col-sm-10">
                    <input type="text" name="namagame" class="form-control" id="namagameid" required maxlength="50" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">Tahun Rilis</label>
                <div class="col-md-3 col-sm-10" id="onlynumber">
                    <input type="text" name="tahunrilis" class="form-control" id="tahunrilisid" onkeypress="return Angkasaja(event)" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">Rating</label>
                <div class="col-md-3 col-sm-10">
                    <input type="text" name="rating" class="form-control" id="ratingid" onkeypress="return Angkasaja(event)" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">Tingkat Kesulitan</label>
                <div class="col-md-3 col-sm-10">
                    <input type="text" name="tingkatkesulitan" class="form-control" id="tingkatkesulitanid" onkeypress="return Angkasaja(event)" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-md-2 col-form-label">Metascore</label>
                <div class="col-md-3 col-sm-10">
                    <input type="text" name="metascore" class="form-control" id="metascoreid" onkeypress="return Angkasaja(event)" required>
                </div>
            </div>

            <input type='submit' class="btn btn-primary" value='Upload' name='but_upload'>
        </form>
        </center>
        </div>


        <script type="text/javascript">
            function Angkasaja(e) {
                if (window.event) // IE
                {
                    if ((e.keyCode < 48 || e.keyCode > 57) & e.keyCode != 46 && e.keyCode != 31) {
                        event.returnValue = false;
                        return false;
                    }
                }
                else { // Fire Fox
                    if ((e.which < 48 || e.which > 57) & e.keyCode != 46 && e.keyCode != 31) {
                        e.preventDefault();
                        return false;
                    }
                }
            }     
        </script>
    </body>
</html>

    <?php
        if(isset($_POST['but_upload'])){
            $namagame = $_POST['namagame'];
            $tahunrilis = $_POST['tahunrilis'];
            $rating = $_POST['rating'];
            $tingkatkesulitan = $_POST['tingkatkesulitan'];
            $metascore = $_POST['metascore'];
            $alternatif_namagame = mysqli_query($con, "SELECT nama_game FROM tb_alternatif WHERE nama_game='$namagame'");
            if (mysqli_num_rows($alternatif_namagame) > 0) {
                echo "<div class='alert alert-danger container'>Game <b>$namagame</b> sudah ada di database.</div>";
                echo "<meta http-equiv='refresh' content='1;url=tambahgame.php'>";
            }
            else{
                $upload = $con->query("INSERT INTO tb_alternatif(nama_game, tahun_rilis, rating, tingkat_kesulitan, metascore) values('$namagame', '$tahunrilis', '$rating', '$tingkatkesulitan', '$metascore')");
                if($upload){
                    echo "<div class='alert alert-info container'><b>$namagame</b> berhasi ditambah ke database.</div>";
                    echo "<meta http-equiv='refresh' content='1;url=tambahgame.php'>";
                }else{
                    echo "<div class='alert alert-danger container'>Query gagal, <b>$namagame</b> belum ditambah!</div>";
                    echo "<meta http-equiv='refresh' content='1;url=tambahgame.php'>";
                }
            }            
        }
    ?>
