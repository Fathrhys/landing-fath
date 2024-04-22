<?php
include ("koneksi/database.php");
session_start();

if(isset($_POST["register"])){
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash_password = hash("sha256", $password);
    $role = $_POST["level"];
    $email = $_POST["email"];
   

    try {
        $sql = "INSERT INTO user (Nama,Username, Password, level, email ) VALUES ('$nama','$username', '$hash_password', '$role', '$email')";

        if($db->query($sql)) {
            echo "<script> alert('Daftar akun berhasil, silahkan login')</script>";
        }else{
            echo "<script> alert('Daftar akun gagal, silahkan coba lagi')</script>";
        }
    }catch (mysqli_sql_exception) {
            echo "<script> alert('Akun sudah digunakan, silahkan coba lagi ')</script>";
    }
    $db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html"?>

    <h3>Daftar Akun</h3>
    <form action="Register.php" method="POST">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <input type="text" placeholder="level" name="level"/>
        <input type="email" placeholder="email" name="email"/>
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>
    <?php include "layout/footer.html"?>
    
</body>
</html>
