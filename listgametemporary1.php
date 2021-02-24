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

    <a href="index.php" class="btn btn-outline-light" style="height: 100vh; width: 10vw; position: absolute; border: none; ">
        <h1 style="width: 90%; margin: 0; position: relative; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">&#8672 Kembali</h1>
    </a>
    <div class="container" style="width: 50%;" >
        <h1 class="display-1" style="text-align: center;"><b>KONVERSI</b></h1>
        <div style="height: 80vh; overflow: auto;">
            <table class="table table-striped" style="margin: auto auto;">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" style="text-align: center;">No.</th>
                        <th scope="col">Nama Game</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Tahun Rilis</th>
                        <th scope="col">Tingkat Kesulitan</th>
                        <th scope="col">Metascore</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if ($baristabelalternatif > 0) {
                            while($row = mysqli_fetch_assoc($tabelalternatif)) { 
                                $konversitahunrilis = $row['tahun_rilis'] >= 2020 ? 5 : (2018 <= $row['tahun_rilis'] && $row['tahun_rilis'] <= 2019 ? 4 : (2015 <= $row['tahun_rilis'] && $row['tahun_rilis']<= 2017 ? 3 : (2012 <= $row['tahun_rilis'] && $row['tahun_rilis']<= 2014 ? 2 : 1)));
                                $konversirating = $row['rating'] >= 4.4 ? 5 : (4.1 <= $row['rating'] && $row['rating'] < 4.4 ? 4 : (3.7 <= $row['rating'] && $row['rating']< 4.1 ? 3 : (3.1 <= $row['rating'] && $row['rating'] < 3.7 ? 2 : 1)));
                                $konversitingkatkesulitan = $row['tingkat_kesulitan'] >= 4.4 ? 5 : (4.1 <= $row['tingkat_kesulitan'] && $row['tingkat_kesulitan'] < 4.4 ? 4 : (3.7 <= $row['tingkat_kesulitan'] && $row['tingkat_kesulitan']< 4.1 ? 3 : (3.1 <= $row['tingkat_kesulitan'] && $row['tingkat_kesulitan']< 3.7 ? 2 : 1)));
                                $konversimetascore = $row['metascore'] >= 91 ? 5 : (83 <= $row['metascore'] && $row['metascore'] < 91 ? 4 : (67 <= $row['metascore'] && $row['metascore']< 83 ? 3 : (58 <= $row['metascore'] && $row['metascore']< 83 ? 2 : 1)));
                    ?>
                            
                                <tr>
                                    <td scope="row" style="text-align: center;"><strong><?php echo $i; ?></strong></td>
                                    <td><?php echo $row['nama_game']; ?></td>
                                    <td><?php echo $konversirating; ?></td>
                                    <td><?php echo $konversitahunrilis; ?></td>
                                    <td><?php echo $konversitingkatkesulitan; ?></td>
                                    <td><?php echo $konversimetascore; ?></td>
                                </tr>
                            <?php $i++; }
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
    


</body>
</html>



    