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
    
<table>

    <tr>
        <td><a href="edit.php">CLICK TO EDIT</a> </td>
    </tr>

    <tr>
        <td>Nama Depan </td>
        <td>
        <?php
            echo $data['namaDepan'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Nama Tengah</td>
        <td>
        <?php
            echo $data['namaTengah'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Nama Belakang</td>
        <td>
        <?php
            echo $data['namaBelakang'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Tempat Lahir</td>
        <td>
        <?php
            echo $data['tempatLahir'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td>
        <?php
            echo $data['tanggalLahir'];
        ?>
        </td>
    </tr>

    <tr>
        <td>NIK</td>
        <td>
        <?php
            echo $data['NIK'];
        ?>
        </td>
    </tr>

    <tr>
        <td>Warga Negara</td>
        <td>
        <?php
            echo $data['wargaNegara'];
        ?>
        </td>
    </tr>

    <tr>
        <td>email</td>
        <td>
        <?php
            echo $data['email'];
        ?>
        </td>
    </tr>

    <tr>
        <td>No HP</td>
        <td>
        <?php
            echo $data['noHP'];
        ?>
        </td>
        
    </tr>

    <tr>
        <td>Alamat</td>
        <td>
        <?php
            echo $data['alamat'];
        ?>
        </td>
        
    </tr>

    <tr>
        <td>Kode Pos</td>
        <td>
        <?php
            echo $data['kodePOS'];
        ?>
        </td>
        
    </tr>

    <tr>
        <td>Foto Profil</td>
        <td>
        <img src="<?php echo $data['fotoProfil']?>">
        </td> 
    </tr>


        
    </table>

</body>
</html>