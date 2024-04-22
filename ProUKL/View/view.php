<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
            <th>aksi</th>
            <th>Edit</th>
        </tr>
    


<?php

$nomor=1;

include ("../koneksi/database.php");

$db= mysqli_query($db, "SELECT * FROM user")or die(mysqli_error());

while($data= mysqli_fetch_array($db)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["Nama"];?></td>
    <td><?php echo $data["Username"];?></td>
    <td><?php echo $data["Password"];?></td>
    <td><?php echo $data["email"];?></td>
    <td><span><a href='delete.php?id=<?php echo $data["ID"];?>'>hapus</a></span></td>
    <td><span><a href='edit_user.php'<?php echo $data["ID"];?>>Edit</a></span></td>


</tr>
<?php }?>
</table>

</body>
</html>