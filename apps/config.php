<?php
$server = "localhost";
$dbase = "sepeda";
$user = "root";
$pass = "";
 
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect($server,$user,$pass);
$db = mysql_select_db($dbase);
if($host && $db){}else{
	$status_db = "// koneksi gagal atau database tidak ditemukan";
}
?>