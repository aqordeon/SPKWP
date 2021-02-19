<html lang="en">
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

    <?php 
        session_start();
        include "koneksi.php";
    ?>
</head>
<body>
    <a href="index.php" class="btn btn-outline-dark" style="height: 100vh; width: 10vw; position: relative; border: none; float: right;">
        <h1 style="margin: 0; position: relative; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">&#8674; Beranda</h1>
    </a>
    <Br><br>
    <div class="container" style="width: 40%;">
        <center>
            <div style=""> <!-- agar center vertical dan horizontal -->
                <h2><strong>Hasil akhir perankingan vektor V</strong></h2>
                    <table class="table table-striped">
                        <thead class="table-active">
                            <tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Vektor V</th>
                                <th scope="col">Alternatif</th>
                                <th scope="col">Nilai Vektor V</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="text-align: center;">1</th>
                                <td><?php echo $_SESSION["rank1"]; ?></td>
                                <td><?php echo $_SESSION["rankgame1"]; ?></td>
                                <td><?php echo $_SESSION["first"]; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center;">2</th>
                                <td><?php echo $_SESSION["rank2"]; ?></td>
                                <td><?php echo $_SESSION["rankgame2"]; ?></td>
                                <td><?php echo $_SESSION["second"]; ?></td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center;">3</th>
                                <td><?php echo $_SESSION["rank3"]; ?></td>
                                <td><?php echo $_SESSION["rankgame3"]; ?></td>
                                <td><?php echo $_SESSION["third"]; ?></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </center>
    </div>
</body>
</html>