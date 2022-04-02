<?php
    include("config.php");
    session_start();
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
    <div class="loginHeader">
        <h1>LOGIN</h1>
    </div>

    <div class="loginForm">
        <form action="./loginProses.php" method = "post"> 
        <table>
            <tr>
                <td>USERNAME</td>
                <td><input type = "text" name="username"/>
            </tr>

            <tr>
                <td>PASSWORD</td>
                <td><input type = "password" name="password"/>
            </tr>

            <td><input type = "submit" name="login" value="LOGIN"/></td>
            <td>
                <div class="backbtn">
                  <a href="index.php">KEMBALI</a>
            </div>
            </td>

        </table>


        </form>
    </div>
   
    
</body>
</html>