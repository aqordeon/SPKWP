<?php
    session_start();
    require_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        body {
            background-image: url("images/whitepaper.jpg");
            background-color: #cccccc;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6" style="margin: auto; width: 30%; padding: 10px;">
                <p>&larr; <a href="index.php" style="text-decoration: none;">Beranda</a><br><br>    
                <h2 style=""><center>LOGIN</center></h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" required/>
                    </div>
                    <input type="submit" class="btn btn-info btn-block btn-sm" name="login" value="Submit" />
                </form>
                <?php 
                    if(isset($_POST['login'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $data = mysqli_query($con,"SELECT * FROM users where USERNAME='$username' and password='$password'");
                        $cek = mysqli_num_rows($data);
                        
                        if($cek > 0){
                            $_SESSION['user'] = $username;
                            echo "<div class='alert alert-info'>Login sukses.</div>";
                            echo "<meta http-equiv='refresh' content='1;url=tambahgame.php'>";
                        }else{
                            echo "<div class='alert alert-danger'>Data tidak cocok.</div>";
                            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>