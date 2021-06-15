<?php
if(isset($_GET['on'])){
	switch($_GET['on']){
		case 'Data Peminjaman' :
		include 'dashboard/utama.php'; break;

		case 'Tambah Transaksi' :
		include 'dashboard/transaksi.php'; break;

		case 'Proses Transaksi' :
		include 'dashboard/prosestransaksi.php'; break;

		case 'Data Mahasiswa' :
		include 'dashboard/progres.php'; break;
		
		case 'Tambah Mahasiswa' :
		include 'dashboard/daftar.php'; break;

		case 'prosesdaftar' :
		include 'dashboard/prosesdaftar.php'; break;
		
		case 'Sepeda' :
		include 'dashboard/sepeda.php'; break;

		case 'Tambah Sepeda' :
		include 'dashboard/daftarsepeda.php'; break;

		case 'Proses Tambah Sepeda' :
		include 'dashboard/prosessepeda.php'; break;

		case 'Lokasi' :
		include 'dashboard/lokasi.php'; break;
	
		case 'Tambah Lokasi' :
		include 'dashboard/daftarlokasi.php'; break;
	
		case 'Proses Tambah Lokasi' :
		include 'dashboard/proseslokasi.php'; break;

		case 'PJ' :
		include 'dashboard/pj.php'; break;
		
		case 'Tambah PJ' :
		include 'dashboard/daftarpj.php'; break;
		
		case 'Proses Tambah PJ' :
		include 'dashboard/prosespj.php'; break;
		
		case 'Error 404' :
		include 'dashboard/404.php'; break;
		case 'Error 403' :
		include 'dashboard/500.php'; break;
		
		default :
		include 'dashboard/404.php';
		break;
		
	}
	
}else {
	include 'dashboard/utama.php';
}


?>