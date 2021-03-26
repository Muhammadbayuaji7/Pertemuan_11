<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "buku_tamu";

$db = mysqli_connect($server, $user, $password, $db);

if (!$db) {
	die("Gagal Terhubung dengan database :" .mysqli_connect_error());
}

 ?>
