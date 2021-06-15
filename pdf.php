<?php
require('apps/fpdf182/fpdf.php');
require_once('apps/config.php');

//Database
$id = htmlentities($_GET['id']);

$r = mysql_fetch_assoc(mysql_query("select peminjaman.*, mahasiswa.nama, sepeda.nama_sepeda, lokasi.nama_lokasi from peminjaman
left join mahasiswa on mahasiswa.nim=peminjaman.nim
left join lokasi on lokasi.id_lokasi=peminjaman.id_lokasi
left join sepeda on sepeda.kode_sepeda=peminjaman.kode_sepeda
where peminjaman.id_peminjaman='$id' order by peminjaman.tgl_pinjam desc"));

// Setting halaman PDF
$pdf = new FPDF('P','mm','A5');
// Menambah halaman baru
$pdf->AddPage();
$pdf->SetTitle('Cetak Bukti '.$r['nama']);

$pdf->Image('./image/logo1.jpg',37,15,70);

$pdf->SetY(55);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(130,30,'SURAT BUKTI PEMINJAMAN',0,1,'C');
$pdf->Cell(130,-17,'IPBICYCLE',0,1,'C');


$pdf->SetY(94);
$pdf->SetX(1.5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(17,6,'ID Pinjam',1,0,'C');
$pdf->Cell(23,6,'NIM',1,0,'C');
$pdf->Cell(45,6,'Nama Mahasiswa',1,0,'C');
$pdf->Cell(20,6,'Sepeda',1,0,'C');
$pdf->Cell(20,6,'Lokasi',1,0,'C');
$pdf->Cell(20,6,'Tgl Pinjam',1,1,'C');

$pdf->SetY(100);
$pdf->SetX(1.5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(17,6,$r['id_peminjaman'],1,0,'C');
$pdf->Cell(23,6,$r['nim'],1,0,'C');
$pdf->Cell(45,6,$r['nama'],1,0,'C');
$pdf->Cell(20,6,$r['nama_sepeda'],1,0,'C');
$pdf->Cell(20,6,$r['nama_lokasi'],1,0,'C');
$pdf->Cell(20,6,$r['tgl_pinjam'],1,1,'C');

$pdf->SetY(150);
$pdf->SetX(50);
$pdf->SetFont('Arial','',10);
$pdf->Cell(130,30,'Tanda Tangan',0,1,'C');
$pdf->Cell(210,8,'PJ Lokasi',0,1,'C');

$pdf->SetY(150);
$pdf->SetX(100);
$pdf->SetFont('Arial','',10);
$pdf->Cell(-150,30,'Tanda Tangan',0,1,'C');
$pdf->Cell(27,7,'Peminjam',0,1,'C');

$pdf->Output('Cetak Bukti-'.$r['nim'].'-'.$r['nama'].'.pdf','I');
?>