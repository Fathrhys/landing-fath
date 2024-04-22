<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("../koneksi/database.php");

    if(!isset($_GET['id'])){
        header('Location: index.php');
    }
    $id = $_GET['id'];

    $result = mysqli_query($db, "SELECT * FROM user WHERE id=$id");

    while($user_data = mysqli_fetch_array($result))
    {
        $nama = $user_data['nama'];
        $username = $user_data['Username'];
        $password = $user_data['Password'];
        $level = $user_data['level'];
    }
    ?>
    <?php
    include("../koneksi/database.php");
    
    if(isset($_POST['simpan'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $level = $_POST['level'];
        
        $result = mysqli_query($db, "UPDATE user 
        SET nama='$nama', Username='$username', Password='$password', level='$level'
        WHERE id=$id");
        header('Location: index.php');
    }else{
        die("Akses Dilarang!!!...");
    }
    ?>
</body>
</html>