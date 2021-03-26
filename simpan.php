<?php
include("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat']; 
$pesan=$_POST['pesan'];
$sql="insert into dataku(nama,email,alamat,pesan) values ('$nama','$email','$alamat','$pesan',')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:buku-tamu.php');
?>
