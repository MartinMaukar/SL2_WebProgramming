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
</head>
<body>
<div class="registerForm">
        <form action="editProses.php" method = "post" enctype="multipart/form-data">
            <table>
                <caption> EDIT PROFILE </caption>

            <tr>
                <td>Nama Depan</td>
                <td><input type = "text" name="namaDepan" value="<?php echo $data['namaDepan']?>" />
            </tr>

            <tr>
                <td>Nama Tengah</td>
                <td><input type = "text" name="namaTengah" value="<?php echo $data['namaTengah']?>"/>

            </tr>

            <tr>
                <td>Nama Belakang</td>
                <td><input type = "text" name="namaBelakang" value="<?php echo $data['namaBelakang']?>"/>

            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td><input type = "text" name="tempatLahir" value="<?php echo $data['tempatLahir']?>"/>

            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><input type = "date" name="tanggalLahir" value="<?php echo $data['tanggalLahir']?>"/>

            </tr>


            <tr>
                <td>Warga Negara</td>
                <td><input type = "text" name="wargaNegara" value="<?php echo $data['wargaNegara']?>"/>

            </tr>

            <tr>
                <td>email</td>
                <td><input type = "text" name="email" value="<?php echo $data['email']?>">

            </tr>

            <tr>
                <td>No HP</td>
                <td><input type = "text" name="noHP" value="<?php echo $data['noHP']?>"/>
                
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type = "text" name="alamat" value="<?php echo $data['alamat']?>"/>

                
            </tr>

            <tr>
                <td>Kode Pos</td>
                <td><input type = "text" name="kodePos" value="<?php echo $data['kodePOS']?>"/>

                
            </tr>

            <tr>
                <td>Foto Profil</td>
                <td><img src="<?php echo $data['fotoProfil']?>"> <input type = "file" name="fotoProfil" /></td>
            </tr>

            
            <td><input type = "submit" name="edit" value="DONE"/></td>

            <td>
            <div class="backbtn">
              <a href="home.php">CANCEL</a>
            </div>
            </td>
           
                
            </table>
    
    </div>
</body>
</html>