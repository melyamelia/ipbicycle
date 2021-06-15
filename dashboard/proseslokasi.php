<?php


	// ambil data dari formulir
    $id_lokasi = $_POST['id_lokasi'];
	$id_pj = $_POST['id_pj'];
    $nama_lokasi = $_POST['nama_lokasi'];

	// buat query
  $query = mysql_query("INSERT INTO lokasi VALUEs ('$id_lokasi', '$id_pj', '$nama_lokasi')");

	// apakah query simpan berhasil?
	if( $query) {
		echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Lokasi';</script>";
	} else {
		echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Lokasi';</script>";
	}
?>