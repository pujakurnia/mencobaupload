<?php
$host	= 'localhost'; 
$user		= 'root'; //nama username
$pass		= ''; //password jika tadak ada bisa di kosongi seperti contoh 
$db	= 'apotek'; //nama database

$koneksi	= mysqli_connect($host,$user,$pass,$db);
if (!$koneksi){
	echo 'Tidak dapat terhubung ke database';
}
?>