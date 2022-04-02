

<?php
include("config.php");
session_start();
$nameErr = $emailErr = $tempatLahirErr = $tanggalLahirErr = $nikErr = $wargaNegaraErr =
$noHpErr= $alamatErr= $kodePosErr = $usernameErr =$password1Err = $password2Err= "";


$namaDepan = $namaTengah = $namaBelakang = $tempatLahir = $email
=$tanggalLahir= $nik = $wargaNegara = $noHP = $alamat = $kodePos=$username = $password1 =
$password2 = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flag = true;

  if (empty($_POST["namaDepan"])) {
    $nameErr = "Nama Tidak Boleh Kosong";
    $flag = false;
  } else {
    $namaDepan = test_input($_POST["namaDepan"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/",$namaDepan)) {
      $nameErr = "Hanya huruf dan spasi diperbolehkan";
      $flag = false;
    }
  }

  if (empty($_POST["namaTengah"])) {
    $nameErr = "Nama Tidak Boleh Kosong";
    $flag = false;
  } else {
    $namaTengah = test_input($_POST["namaTengah"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/",$namaTengah)) {
      $nameErr = "Hanya huruf dan spasi diperbolehkan";
      $flag = false;
    }
  }

  if (empty($_POST["namaBelakang"])) {
    $nameErr = "Nama Tidak Boleh Kosong";
    $flag = false;
  } else {
    $namaBelakang = test_input($_POST["namaBelakang"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/",$namaBelakang)) {
      $nameErr = "Hanya huruf dan spasi diperbolehkan";
      $flag = false;
    }
  }

  if (empty($_POST["tempatLahir"])) {
    $tempatLahirErr = "Tempat lahir tidak boleh kosong";
    $flag = false;
  } else {
    $tempatLahir = test_input($_POST["tempatLahir"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/",$tempatLahir)) {
      $tempatLahirErr = "Hanya huruf dan spasi diperbolehkan";
      $flag = false;
    }
  }

  if (empty($_POST["tanggalLahir"])) {
    $tanggalLahirErr = "Tanggal lahir tidak boleh kosong";
    $flag = false;
  }

  if (empty($_POST["nik"])) {
    $nikErr = "NIK tidak boleh kosong";
    $flag = false;
  }

  if (empty($_POST["wargaNegara"])) {
    $wargaNegaraErr = "Warga Negara tidak boleh kosong";
    $flag = false;
  } else {
    $wargaNegara = test_input($_POST["wargaNegara"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/",$wargaNegara)) {
      $wargaNegaraErr = "Hanya huruf dan spasi diperbolehkan";
      $flag = false;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email tidak boleh kosong";
    $flag = false;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag = false;
    }
  }

  if (empty($_POST["noHP"])) {
    $noHpErr = "No HP tidak boleh kosong";
    $flag = false;
  } else {
    $noHP = test_input($_POST["noHP"]);
    if (!preg_match("/^[0-9]*$/",$noHP)){
      $noHpErr = "Invalid email format";
      $flag = false;
    }
  }

  if (empty($_POST["alamat"])) {
    $alamatErr = "Alamat tidak boleh kosong";
    $flag = false;
  } else {
    $alamat = test_input($_POST["alamat"]);
     if (!preg_match("/^[a-zA-Z-' ]*$/",$alamat)) {
      $alamatErr = "Hanya huruf dan spasi diperbolehkan";
      $flag = false;
    }
  }

  if (empty($_POST["kodePos"])) {
    $kodePosErr = "kode Pos tidak boleh kosong";
    $flag = false;
  } 

  if (empty($_POST["username"])) {
    $usernameErr = "Username tidak boleh kosong";
    $flag = false;
  } 

  if (empty($_POST["password1"])||empty($_POST["password2"])) {
    $password1Err = "Password tidak boleh kosong";
    $flag = false;
  } else {
    $password1 = test_input($_POST["password1"]);
    $password2 = test_input($_POST["password2"]);
     if ($password1 != $password2) {
      $password1Err = "Password 1 dan Password 2 harus sama";
      $flag = false;
    }
  }

  if($flag == true){
        $_SESSION['namaDepan'] = $_POST['namaDepan'];
        $_SESSION['namaTengah'] = $_POST['namaTengah'];
        $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
        $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tanggalLahir'] = $_POST['tanggalLahir'];
        $_SESSION['nik'] = $_POST['nik'];
        $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
        $_SESSION['noHP'] = $_POST['noHP'];
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['kodePos'] = $_POST['kodePos'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password1'] = $_POST['password1'];
        $_SESSION['password2'] = $_POST['password2'];


        $fotoProfil = $_FILES['fotoProfil']['name'];
        $tempName = $_FILES['fotoProfil']['tmp_name'];

        $dirTujuan = "assets/";

        $upload = move_uploaded_file($tempName, $dirTujuan.$fotoProfil);
        // $_SESSION['fotoProfil'] = $_FILES['fotoProfil'];

        $str_query = "insert into profile values(
          '".$_POST['namaDepan']."',
          '".$_POST['namaTengah']."',
          '".$_POST['namaBelakang']."',
          '".$_POST['tempatLahir']."',
          '".$_POST['tanggalLahir']."',
          '".$_POST['nik']."',
          '".$_POST['wargaNegara']."',
          '".$_POST['email']."',
          '".$_POST['noHP']."',
          '".$_POST['alamat']."',
          '".$_POST['kodePos']."',
          '".$dirTujuan.$fotoProfil."',
          '".$_POST['username']."',
          '".$_POST['password1']."')";

          $query = mysqli_query($connection,$str_query);
          if($query){
            echo "<script>";
              echo "alert('Data Berhasil Ditambahkan')";
            echo "</script>";

            echo "<script>";
              echo "window.location='index.php'";
            echo "</script>";
          }
          

      header("location: ./index.php");
  }
  

    
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
    <div class="registerForm">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post" enctype="multipart/form-data">
            <table>
                <caption> REGISTER </caption>

            <tr>
                <td>Nama Depan</td>
                <td><input type = "text" name="namaDepan"/>
                <span class="error">* <?php echo $nameErr;?></span></td>
            </tr>

            <tr>
                <td>Nama Tengah</td>
                <td><input type = "text" name="namaTengah"/>
                <span class="error">* <?php echo $nameErr;?></span></td>
            </tr>

            <tr>
                <td>Nama Belakang</td>
                <td><input type = "text" name="namaBelakang"/>
                <span class="error">* <?php echo $nameErr;?></span></td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td><input type = "text" name="tempatLahir"/>
                <span class="error">* <?php echo $tempatLahirErr;?></span></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><input type = "date" name="tanggalLahir"/>
                <span class="error">* <?php echo $tanggalLahirErr;?></span></td>
            </tr>

            <tr>
                <td>NIK</td>
                <td><input type = "text" name="nik"/>
                <span class="error">* <?php echo $nikErr;?></span></td>
            </tr>

            <tr>
                <td>Warga Negara</td>
                <td><input type = "text" name="wargaNegara"/>
                <span class="error">* <?php echo $wargaNegaraErr;?></span></td>
            </tr>

            <tr>
                <td>email</td>
                <td><input type = "text" name="email"/>
                <span class="error">* <?php echo $emailErr;?></span></td>
            </tr>

            <tr>
                <td>No HP</td>
                <td><input type = "text" name="noHP"/>
                <span class="error">* <?php echo $noHpErr;?></span></td>
                
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type = "text" name="alamat"/>
                <span class="error">* <?php echo $alamatErr;?></span></td>
                
            </tr>

            <tr>
                <td>Kode Pos</td>
                <td><input type = "text" name="kodePos"/>
                <span class="error">* <?php echo $kodePosErr;?></span></td>
                
            </tr>

            <tr>
                <td>Foto Profil</td>
                <td><input type = "file" name="fotoProfil"/></td>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type = "text" name="username"/>
                <span class="error">* <?php echo $usernameErr;?></span></td>
                
            </tr>

            <tr>
                <td>Password 1</td>
                <td><input type = "password" name="password1"/>
                <span class="error">* <?php echo $password1Err;?></span></td>
              
            </tr>

            <tr>
                <td>Password 2</td>
                <td><input type = "password" name="password2"/>
                <span class="error">* <?php echo $password2Err;?></span></td>
                
            </tr>

            
            <td><input type = "submit" name="register" value="REGISTER"/></td>

            <td>
            <div class="backbtn">
              <a href="index.php">KEMBALI</a>
            </div>
            </td>
           
                
            </table>
    
    </div>
</body>
</html>