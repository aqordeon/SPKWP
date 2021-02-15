<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Game</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <style>
        body {
            background-image: url("images/whitepaper.jpg");
            background-color: #cccccc;
            background-size: cover;
        }
    </style>
    <?php 
        include "koneksi.php";
        $tabelalternatif = mysqli_query($con, "SELECT * FROM tb_alternatif");
        $baristabelalternatif = mysqli_num_rows($tabelalternatif);
        $i = 1;
    ?>
</head>
<body>

<a href="index.php" class="btn btn-light" style="height: 100vh; position: absolute">&#8672 Kembali</a>
    <div class="container" style="width: 50%; border: 2px solid black;">
        <h1 class="display-1" style="text-align: center;"><b>List Game</b></h1>
        <table class="table table-striped" style="margin: auto auto;">
            <thead class="table-dark">
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
                                <td><?php echo $row['nama_game']; ?></td>
                            </tr>
                        <?php $i++; }
                    } ?>
            </tbody>
        </table>
    </div>
    


</body>
</html>



    