<?php

	
	// ambil data dari formulir
	$nim = $_POST['nim'];
    $kode_sepeda = $_POST['kode_sepeda'];
	
	//Kurangi Stock Sepeda
	$stock = mysql_fetch_assoc(mysql_query("select jumlah_sepeda from sepeda where kode_sepeda ='$kode_sepeda'"));
	$jml = $stock['jumlah_sepeda'];
    $stock_sepeda = $jml-1;
	//-----------------------
	
	$id_lokasi = $_SESSION['ID_Lokasi'];
	$tgl_pinjam = $_POST['tgl_pinjam'];

	
  $query = mysql_query("INSERT INTO peminjaman VALUEs ('', '$nim', '$kode_sepeda', '$id_lokasi', '$tgl_pinjam', '$tgl_kembali')");
  
  // Query Update Stock Sepeda 
  $update = mysql_query("update sepeda set jumlah_sepeda='$stock_sepeda' where kode_sepeda='$kode_sepeda'");
	// apakah query simpan berhasil?
	if( $query && $update) {
		echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Data Peminjaman';</script>";
	} else {
		echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Data Peminjaman';</script>";
	}

?>