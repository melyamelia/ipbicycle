<?php


	// ambil data dari formulir
	$id_lokasi = $_SESSION['ID_Lokasi'];
    $nama_sepeda = $_POST['nama_sepeda'];
	$jumlah_sepeda = $_POST['jumlah_sepeda'];

	// buat query
  $query = mysql_query("INSERT INTO sepeda VALUEs ('', '$id_lokasi', '$nama_sepeda', '$jumlah_sepeda')");

	// apakah query simpan berhasil?
	if( $query) {
		echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Sepeda';</script>";
	} else {
		echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Sepeda';</script>";
	}
?>