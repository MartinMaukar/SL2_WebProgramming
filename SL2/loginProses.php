<?php
    include("config.php");
    session_start();
    

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $str_query = "select*from profile where username='$username'";
        $query = mysqli_query($connection,$str_query);
        $data = mysqli_fetch_array($query);
        if($data['password1'] == $password){
            $_SESSION['username'] = $data['username'];
            header("location: home.php");
        }
        else{
            header("location:login.php");
        }
      
    }


?>