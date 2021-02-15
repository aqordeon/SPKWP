<?php
    session_start();
    session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="bootstrap.css" type="text/css" />
</head>
<body>
    <div>Input Data</div>
    <center>
        <div>Lihat Daftar Game</div>
        <a href="hitungKriteria.php" class="btn btn-outline-primary btn-lg">Lakukan Perhitungan</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>