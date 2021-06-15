<?php if(!isset($_SESSION['Username'])){}?>
  <h3>Data Sepeda <a class="btn btn-sm btn-primary" href="?on=Tambah Sepeda">Tambah Sepeda</a></h3> 
	<div class="table-responsive">
    <table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
	<th>#</th>
	<th>Kode Sepeda</th>
	<th>Nama Lokasi</th>
	<th>Nama Sepeda</th>
	<th>Jumlah Sepeda</th>
	<th>Status Sepeda</th>
	<th></th>
	<th></th>
	</tr>
	</thead>
	<tbody>
	<?php
	if($_SESSION['Jabatan']==1){$pass ="";}else{$pass= "where id_lokasi=$_SESSION[ID_Lokasi]";}
	$datako = mysql_query("select * from sepeda $pass order by kode_sepeda asc");
	$a=1;
	while($r=mysql_fetch_assoc($datako)){
		$lokasi = mysql_fetch_assoc(mysql_query("select nama_lokasi from lokasi where id_lokasi='$r[id_lokasi]'"));
		if($r['jumlah_sepeda']=="0"){$ss="Tidak Tersedia";}else{$ss="Tersedia";}
	?>
	<tr>
	<td align="center"><?=$a;?></td>
	<td align="center"><?=$r['kode_sepeda'];?></td>
	<td align="center"><?=$lokasi['nama_lokasi'];?></td>
	<td align="center"><?=$r['nama_sepeda'];?></td>
	<td align="center"><?=$r['jumlah_sepeda'];?></td>
    <td align="center"><?=$ss;?></td>
	<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Proses<?=$r['kode_sepeda'];?>">Edit</button></td>
	<td><a href="?on=Sepeda&buka=2&tap=<?=$r['kode_sepeda'];?>" class="btn btn-sm btn-danger" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS [<?=strtoupper($r['nama_sepeda']);?>] ... ?')">Hapus</a></td>
	</tr>

<!-- Modal -->
<div class="modal fade" id="Proses<?=$r['kode_sepeda'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Sepeda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="?on=Sepeda&buka=1" method="post">
		<input type="text" name="kode_sepeda" hidden value="<?=$r['kode_sepeda'];?>">

		
		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama Sepeda</label>
		<div class="col-sm-8">
		<input class="form-control" name="nama_sepeda" type="text" value="<?=$r['nama_sepeda'];?>" />
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Jumlah Sepeda</label>
		<div class="col-sm-8">
		<input class="form-control" name="jumlah_sepeda" type="text" value="<?=$r['jumlah_sepeda'];?>" />
		</div>
		</div>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->	
	
	
	<?php $a++; } ?>
	</tbody>
	</table>
	</div>


<?php
if(isset($_GET['buka'])){
	switch($_GET['buka']){
		case 1 : 
		$kode_sepeda= $_POST['kode_sepeda'];
		$id_lokasi= $_POST['id_lokasi'];
		$nama_sepeda = $_POST['nama_sepeda'];
		$jumlah_sepeda = $_POST['jumlah_sepeda'];
		$update = mysql_query("update sepeda set nama_sepeda='$nama_sepeda', jumlah_sepeda='$jumlah_sepeda' where kode_sepeda='$kode_sepeda'");
		if($update){
			
			echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Sepeda';</script>";
		}else{
			echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Sepeda';</script>";
		}
		
		
		break;
		case 2 :
		$tap = $_GET['tap'];
		$hapus1 = mysql_query("delete from sepeda where kode_sepeda='$tap'");
		echo "<script language='javascript'>document.location='?on=Sepeda';</script>";
		break;
	}
}



?>
