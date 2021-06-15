<?php if(!isset($_SESSION['Username'])){}?>
  <h3>Lokasi Peminjaman<a class="btn btn-sm btn-primary" href="?on=Tambah Lokasi">Tambah Lokasi</a></h3> 
	<div class="table-responsive">
    <table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
	<th>#</th>
	<th>ID Lokasi</th>
	<th>Penanggung Jawab</th>
	<th>Nama Lokasi</th>
	<th></th>
	<th></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$datako = mysql_query("select * from lokasi order by id_lokasi asc");
	$a=1;
	while($r=mysql_fetch_assoc($datako)){
		$pj = mysql_fetch_assoc(mysql_query("select nama_pj from pj where id_pj='$r[id_pj]'"));
	?>
	<tr>
	<td align="center"><?=$a;?></td>
	<td align="center"><?=$r['id_lokasi'];?></td>
	<td align="center"><?=$pj['nama_pj'];?></td>
	<td align="center"><?=$r['nama_lokasi'];?></td>
	<td><a href="?on=Lokasi&buka=2&tap=<?=$r['id_lokasi'];?>" class="btn btn-sm btn-danger" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS [<?=strtoupper($r['nama_lokasi']);?>] ... ?')">Hapus</a></td>
	</tr>

	<?php $a++; } ?>
	</tbody>
	</table>
	</div>


<?php
if(isset($_GET['buka'])){
	switch($_GET['buka']){
		case 1 : 
		$id_lokasi = mysql_real_escape_string($_POST['id_lokasi']);
		$nama_sepeda = $_POST['nama_sepeda'];
		$status_sepeda = $_POST['status_sepeda'];
		$update = mysql_query("update sepeda set id_lokasi='$id_lokasi', nama_sepeda='$nama_sepeda', status_sepeda='$status_sepeda' where kode_sepeda='$kode_sepeda'");
		if($update){
			
			echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Sepeda';</script>";
		}else{
			echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Sepeda';</script>";
		}
		
		
		break;
		case 2 :
		$tap = $_GET['tap'];
		$hapus1 = mysql_query("delete from lokasi where id_lokasi='$tap'");
		echo "<script language='javascript'>document.location='?on=Lokasi';</script>";
		break;
	}
}



?>
