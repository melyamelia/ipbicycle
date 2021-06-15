<?php if(!isset($_SESSION['Username'])){}?>
  <h3>Data Penanggung Jawab <a class="btn btn-sm btn-primary" href="?on=Tambah PJ">Tambah PJ</a></h3> 
	<div class="table-responsive">
    <table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
	<th>#</th>
	<th>ID PJ</th>
	<th>Nama PJ</th>
	<th>No HP</th>
	<th>Username</th>
    <th>Jabatan</th>
	<th></th>
	<th></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$datako = mysql_query("select * from pj order by id_pj asc");
	$a=1;
	while($r=mysql_fetch_assoc($datako)){
		if($r['jabatan']=="1"){$j="Kepala Cabang";}else{$j="Penanggung Jawab";}
	?>
	<tr>
	<td align="center"><?=$a;?></td>
	<td align="center"><?=$r['id_pj'];?></td>
	<td align="center"><?=$r['nama_pj'];?></td>
	<td align="center"><?=$r['nohp'];?></td>
    <td align="center"><?=$r['username'];?></td>
    <td align="center"><?=$j;?></td>
	<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Proses<?=$r['id_pj'];?>">Edit</button></td>
	<td><a href="?on=PJ&buka=2&tap=<?=$r['id_pj'];?>" class="btn btn-sm btn-danger" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS [<?=strtoupper($r['nama_pj']);?>] ... ?')">Hapus</a></td>
	</tr>

<!-- Modal -->
<div class="modal fade" id="Proses<?=$r['id_pj'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Penanggung Jawab</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="?on=PJ&buka=1" method="post">
		<input type="text" name="id_pj" hidden value="<?=$r['id_pj'];?>">
		
		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama PJ</label>
		<div class="col-sm-8">
		<input class="form-control" name="nama_pj" type="text" value="<?=$r['nama_pj'];?>" />
		</div>
		</div>

        <div class="form-group row">
		<label class="col-sm-4 col-form-label">No HP</label>
		<div class="col-sm-8">
		<input class="form-control" name="nohp" type="text" value="<?=$r['nohp'];?>" />
		</div>
		</div>
		
        <div class="form-group row">
		<label class="col-sm-4 col-form-label">Username</label>
		<div class="col-sm-8">
		<input class="form-control" name="username" type="text" value="<?=$r['username'];?>" />
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Jabatan</label>
		<div class="col-sm-8">
		<select name='j' class="form-control">
		<option value='<?=$r['jabatan'];?>'><?=$j;?></option>
		<option value=''>----------------------</option>
		<option value='1'>Kepala Cabang</option>
		<option value='2'>Penanggung Jawab</option>
		</select>
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
		$id_pj = $_POST['id_pj'];
		$nama_pj = mysql_real_escape_string($_POST['nama_pj']);
		$nohp = $_POST['nohp'];
        $username = $_POST['username'];
		$jabatan = $_POST['j'];
		$update = mysql_query("update pj set id_pj='$id_pj', nama_pj='$nama_pj', nohp='$nohp', username='$username', jabatan='$jabatan' where id_pj='$id_pj'");
		if($update){
			
			echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=PJ';</script>";
		}else{
			echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=PJ';</script>";
		}
		
		
		break;
		case 2 :
		$tap = $_GET['tap'];
		$hapus1 = mysql_query("delete from PJ where id_pj='$tap'");
		echo "<script language='javascript'>document.location='?on=PJ';</script>";
		break;
	}
}



?>
