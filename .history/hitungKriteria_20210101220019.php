<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php 
        include "koneksi.php";
    ?>
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
                
                if ($baristabelkriteria > 0) {
                    while($row = mysqli_fetch_assoc($tabelkriteria)) { ?>
                        <div class="container">
                            <h2 style="display: inline;"><?php echo $row["nama_kriteria"]; ?></h2>
                            <form method="post" action="" enctype='multipart/form-data'>
                                <label class="radio-inline">
                                    <input type="radio" name="<?php echo "optradio" . $row["id"]; ?>" value="1">1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="<?php echo "optradio" . $row["id"]; ?>" value="2">2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="<?php echo "optradio" . $row["id"]; ?>" value="3">3
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="<?php echo "optradio" . $row["id"]; ?>" value="4">4
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="<?php echo "optradio" . $row["id"]; ?>" value="5">5
                                </label>
                            </form>
                        </div>
                   <?php }
                } else {
                    echo "0 results";
                }

            ?>
        
    </center>

    <button class="btn btn-primary" value="Submit">Submit</button>
    <input type='submit' class="btn btn-primary" value='Submitsa' name='but_upload'>   <!-- mengarah ke hitung_vektor.php -->
    
</div>
</body>
</html>