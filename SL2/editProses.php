<?php
    include("config.php");
    session_start();
    
    if(isset($_POST['edit'])){ 
        $fotoProfil = $_FILES['fotoProfil']['name'];
        $tempName = $_FILES['fotoProfil']['tmp_name'];
        $dirTujuan = "assets/";
        $upload = move_uploaded_file($tempName, $dirTujuan.$fotoProfil);
        $str_query = "update profile set 
        namaDepan = '".$_POST['namaDepan']."',
        namaTengah = '".$_POST['namaTengah']."',
        namaBelakang = '".$_POST['namaBelakang']."',
        tempatLahir = '".$_POST['tempatLahir']."',
        tanggalLahir = '".$_POST['tanggalLahir']."',
        wargaNegara = '".$_POST['wargaNegara']."',
        email = '".$_POST['email']."',
        noHP = '".$_POST['noHP']."',
        alamat = '".$_POST['alamat']."',
        `kodePOS` = '".$_POST['kodePos']."',
        fotoProfil = '".$dirTujuan.$fotoProfil."'
        where username = '".$_SESSION['username']."'
        ";
        $query = mysqli_query($connection,$str_query);
        header("location: home.php");
    }
?>

