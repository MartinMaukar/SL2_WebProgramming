<?php
    include("config.php");
    session_start();
    $userNow = $_SESSION['username'];

    $str_query = "select*from profile where username='$userNow'";
    $query = mysqli_query($connection,$str_query);
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div class="navbar">
        <div class="logo">
            <h1>APLIKASI PENGELOLAAN KEUANGAN</h1>
        </div>

        <div class="links">
            <a href="home.php" >HOME</a>
            <a href="profile.php">PROFILE</a>
            <a href="login.php">LOGOUT</a>
        </div>
    </div>


    
 
    <div class="welcome">
        <?php
            echo "<h1>Halo, ".$data['namaDepan']." ".$data['namaTengah']." !"."</h1>";
        ?>
    </div>
    
    
</body>
</html>