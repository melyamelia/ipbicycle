<?php


	// ambil data dari formulir
    $id_pj= $_POST['id_pj'];
	$nama_pj = $_POST['nama_pj'];
    $nohp = $_POST['nohp'];
    $username = $_POST['username'];
    $password= SHA1($_POST['password']);
    $jabatan = $_POST['jabatan'];

	// buat query
  $query = mysql_query("INSERT INTO pj VALUEs ('$id_pj', '$nama_pj', '$nohp', '$username', '$password', '$jabatan')");

	// apakah query simpan berhasil?
	if( $query) {
		echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=PJ';</script>";
	} else {
		echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=PJ';</script>";
	}
?>