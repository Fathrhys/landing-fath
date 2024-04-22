<?php
include_once("../koneksi/database.php");

$id = $_GET['id'];

$result = mysqli_query($db, "DELETE FROM user WHERE ID=$id");
header("location:view.php")
?>