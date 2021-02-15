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
            $ambiltabelkriteria = mysqli_query($con, "SELECT * FROM tb_kriteria");
            $pecahtabelkriteria = mysqli_num_rows($ambiltabelkriteria);

            while($pecahtabelkriteria){ ?>
                <h2><?php echo $pecahtabelkriteria['id']; ?>
            <?php } ?>

        

        <br><br>

        <div class="container">
            <h2 style="display: inline;">Rating</h2>
            <form>
                <label class="radio-inline">
                    <input type="radio" name="optradio2">1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio2">2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio2">3
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio2">4
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio2">5
                </label>
            </form>
        </div>

        <br><br>

        <div class="container">
            <h2 style="display: inline;">Grafis</h2>
            <form>
                <label class="radio-inline">
                    <input type="radio" name="optradio3">1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio3">2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio3">3
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio3">4
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio3">5
                </label>
            </form>
        </div>

        <br><br>

        <div class="container">
            <h2 style="display: inline;">Tingkat Kesulitan</h2>
            <form>
                <label class="radio-inline">
                    <input type="radio" name="optradio4">1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio4">2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio4">3
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio4">4
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio4">5
                </label>
            </form>
        </div>
    </center>

    <button class="btn btn-primary" value="Submit">Submit</button>   <!-- mengarah ke hitung_vektorS.php -->
    
</div>
</body>
</html>