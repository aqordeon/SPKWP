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
                    <h2 style="display: inline;">Tahun Rilis</h2>
                    <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label>

                 
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