<?php
    include "koneksi/database.php";
    session_start();

    $login_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash('sha256', $password);


    $sql = "SELECT * FROM user WHERE username = '$username' AND password ='$hash_password'";

    $result = $db->query($sql);
    
    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data ["username"];
        $_SESSION["is_login"] = true;
        
        header("localtion: dashboard.php");

    }else {
        $login_message = "Akun tidak ditemukan";
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
    
    <?php include "layout/header.html" ?>
    <h3>Masuk akun</h3>
    <i><?= $login_message ?></i>
    <form action="login.php" method="POST">
        <input type="text" placeholder="Username" name="username"/>
        <input type="password" placeholder="Password" name="password"/>
        <button type="submit" name="login">Masuk Sekarang</button>
    </form>
    <?php include "layout/footer.html"?>
</body>
</html>