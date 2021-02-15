<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
        include "koneksi.php";
        $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");
        $baristabelalternatif = mysqli_num_rows($tabelalternatif);
        $i = 1;
    ?>
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
                    while($row = mysqli_fetch_assoc($tabelalternatif)) { ?>
                        <tr>
                            <th scope="row" style="text-align: center;"><?php echo $i; ?></th>
                            <td><?php echo $_SESSION["S".$i]; ?></td>
                        </tr>
                    <?php $i++; }
                } ?>
        </tbody>
    </table>


</body>
</html>



    