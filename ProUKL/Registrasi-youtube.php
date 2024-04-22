<?php
require 'database.php';
if(isset($_POST["register"])){
    $username - $_POST["username"];
    $password - $_POST["password"];

    $sql - "INSERT INTO user (username, password) VALUES ('$username','$password')";
    if($db->query($sql)){
        echo "Data Masuk Nich";
    } else{
        echo "Data Tidak Masuk Nich";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>
    </form>

</body>
</html>