<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php 
        include "koneksi.php";
        session_start();
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
                                    <input type="radio" name="<?php echo "optradio" . $row["id"]; ?>" value="1">1 <!-- name = optradio1 / optradio2 -->
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
        <a href="hitung_vektor.php" class="btn btn-primary" name='kriteria_submit'>Submit</a>   <!-- mengarah ke hitung_vektor.php -->

    </center>

    <?php
        if(isset($_POST['kriteria_submit'])){
        
            if ($baristabelkriteria > 0) {
                while($nilaikriteria = mysqli_fetch_assoc($tabelkriteria)) {
                    $nilaikriteria["id"] = "optradio".$row["id"];
                    $_SESSION["haha"] = "fdjasfjdsafhdsa";
                    $_SESSION["radio".$row["id"]] = $nilaikriteria["id"];
                }
            } else {
                echo "$ nilaikriteria tidak ada isinya";
            }

            
            $upload = $con->query("INSERT INTO product(nama, deskripsi, gambar, jenis, stock, harga1, harga2, harga3, harga4) values('$nameproduct', '$deskripsi', '$filename', '$jenisproduct', '$stockproduct', '$harga1', '$harga2', '$harga3', '$harga4')");
            
            $last_id = mysqli_insert_id($con);
            $newfilename = $last_id . "." . $file_extension;

            if(in_array($file_extension,$valid_ext)){
                if($upload){
                    compressImage($_FILES['imgproduct']['tmp_name'], $location . $newfilename, 60);
                    $con->query("UPDATE product SET gambar='$newfilename' WHERE id='$last_id'");
                    echo "<div class='alert alert-info'>Query berhasil dan file telah dipindah.</div>";
                    echo "<meta http-equiv='refresh' content='1;url=produk.php'>";
                }else{
                    echo "<div class='alert alert-danger'>Query gagal, file belum dipindah!</div>";
                    echo "<meta http-equiv='refresh' content='1;url=produk.php'>";
                }
            }else{
                echo "Type file salah!";
            }
        }
        
        function compressImage($source, $destination, $quality) {

            $info = getimagesize($source);
      
            if ($info['mime'] == 'image/jpeg') 
                $image = imagecreatefromjpeg($source);
      
            elseif ($info['mime'] == 'image/gif') 
                $image = imagecreatefromgif($source);
      
            elseif ($info['mime'] == 'image/png') 
                $image = imagecreatefrompng($source);
      
            imagejpeg($image, $destination, $quality);
      
        }
    ?>

    
</div>
</body>
</html>