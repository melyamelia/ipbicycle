<?php if(!isset($_SESSION['Username'])){}?>
  <h3>Data Mahasiswa <a class="btn btn-sm btn-primary" href="?on=Tambah Mahasiswa">Tambah Mahasiswa</a></h3> 
	<div class="table-responsive">
    <table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
	<th>#</th>
	<th>NIM</th>
	<th>Nama Mahasiswa</th>
	<th>Jenis Kelamin</th>
	<th>Nomor HP</th>
	<th>Alamat</th>
	<th></th>
	<th></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$datako = mysql_query("select * from mahasiswa order by nim asc");
	$a=1;
	while($r=mysql_fetch_assoc($datako)){
		if($r['jenis_kelamin']=="L"){$jk="laki-laki";}else{$jk="Perempuan";}
	?>
	<tr>
	<td align="center"><?=$a;?></td>
	<td align="center"><?=$r['nim'];?></td>
	<td><?=$r['nama'];?></td>
	<td align="center"><?=$jk;?></td>
	<td align="center"><?=$r['nohp'];?></td>
	<td align="center"><?=$r['alamat'];?></td>
	<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Proses<?=$r['nim'];?>">Edit</button></td>
	<td><a href="?on=Data Mahasiswa&buka=2&tap=<?=$r['nim'];?>" class="btn btn-sm btn-danger" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS [<?=strtoupper($r['nama']);?>] ... ?')">Hapus</a></td>
	</tr>

<!-- Modal -->
<div class="modal fade" id="Proses<?=$r['nim'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="?on=Data Mahasiswa&buka=1" method="post">
		<input type="text" name="nim" hidden value="<?=$r['nim'];?>">
		
		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama Mahasiswa</label>
		<div class="col-sm-8">
		<input class="form-control" name="nama" type="text" value="<?=$r['nama'];?>" />
		</div>
		</div>
		
		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Jenis Kelamin</label>
		<div class="col-sm-8">
		<select name='jk' class="form-control">
		<option value='<?=$r['jenis_kelamin'];?>'><?=$jk;?></option>
		<option value=''>----------------------</option>
		<option value='L'>Laki-Laki</option>
		<option value='P'>Perempuan</option>
		</select>
		</div>
		</div>
		
		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nomor HP</label>
		<div class="col-sm-8">
		<input class="form-control" name="nohp" type="text" value="<?=$r['nohp'];?>" />
		</div>
		</div>
		
		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Alamat</label>
		<div class="col-sm-8">
		<input class="form-control" name="alamat" type="text" value="<?=$r['alamat'];?>" />
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
		$nim= $_POST['nim'];
		$nama = mysql_real_escape_string($_POST['nama']);
		$jenis_kelamin = $_POST['jk'];
		$nohp = $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$update = mysql_query("update mahasiswa set nama='$nama', jenis_kelamin='$jenis_kelamin', nohp='$nohp', alamat='$alamat' where nim='$nim'");
		if($update){
			
			echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Data Mahasiswa';</script>";
		}else{
			echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Data Mahasiswa';</script>";
		}
		
		
		break;
		case 2 :
		$tap = $_GET['tap'];
		$hapus1 = mysql_query("delete from mahasiswa where nim='$tap'");
		echo "<script language='javascript'>document.location='?on=Data Mahasiswa';</script>";
		break;
	}
}



?>
