<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table class="table table-striped " style="width: 90%; margin: auto auto;">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col">Nama Game</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if ($baristabelalternatif > 0) {
                    while($row = mysqli_fetch_assoc($tabelalternatif)) { 
                        $_SESSION["S".$i] = pow($row['tahun_rilis'], $normalisasibobot_tahunrilis) * pow($row['rating'], $normalisasibobot_rating) * pow($row['grafis'], $normalisasibobot_grafis) * pow($row['tingkat_kesulitan'], -($normalisasibobot_tingkatkesulitan));
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


</body>
</html>

<?php 
    include "koneksi.php";
    $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");
    $baristabelalternatif = mysqli_num_rows($tabelalternatif)
?>

    