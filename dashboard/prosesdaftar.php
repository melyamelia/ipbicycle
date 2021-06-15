<?php


	// ambil data dari formulir
    $nim = $_POST['nim'];
	$nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	// buat query
  $query = mysql_query("INSERT INTO mahasiswa (nim, nama, jenis_kelamin, nohp, alamat, username, password) VALUEs ('$nim', '$nama', '$jenis_kelamin', '$nohp', '$alamat', '$username', '$password')");

	// apakah query simpan berhasil?
	if( $query) {
		echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Data Mahasiswa';</script>";
	} else {
		echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Data Mahasiswa';</script>";
	}
?>