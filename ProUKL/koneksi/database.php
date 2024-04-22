<?php 
// isi nama host,username mysql dan password mysql anda
$hostname = "localhost";
$username = "root";
$passwords = "";
$database = "ukl";

$db = mysqli_connect($hostname, $username, $passwords, $database);

    //$host = mysql_connect ("localhost", "root", "");

if($db->connect_error){
    echo "Koneksi database gagal";
    die("error!");
}
?>