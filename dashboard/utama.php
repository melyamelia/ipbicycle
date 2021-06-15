<?php if(isset($_SESSION['Username'])){ ?>
  <h3>Daftar Peminjam Sepeda <a class="btn btn-sm btn-primary" href="?on=Tambah Transaksi">Transaksi</a></h3>  


  <div class="table-responsive">
    <table id="example" class="table table-bordered table-striped">
	<thead>
	<tr>
	<th>#</th>
	<th>NIM</th>
	<th>Nama</th>
	<th>Nama Sepeda</th>
	<th>Nama Lokasi</th>
	<th>Stock Sepeda</th>
	<th>Tanggal Pinjam</th>
	<th>Tanggal Kembali</th>
	<th>Status Peminjaman</th>
	<th></th>
	<th></th>
	</tr>
	</thead>
	<tbody>
	<?php
	if($_SESSION['Jabatan']==1){$pass ="";}else{$pass= "where id_lokasi=$_SESSION[ID_Lokasi]";}
	$datako = mysql_query("select * from peminjaman $pass order by tgl_pinjam desc");
	$a=1;
	while($r=mysql_fetch_assoc($datako)){
		$sepeda = mysql_fetch_assoc(mysql_query("select jumlah_sepeda, nama_sepeda from sepeda where kode_sepeda='$r[kode_sepeda]'"));
		$lokasi = mysql_fetch_assoc(mysql_query("select nama_lokasi from lokasi where id_lokasi='$r[id_lokasi]'"));
		$mahasiswa = mysql_fetch_assoc(mysql_query("select nama from mahasiswa where nim='$r[nim]'"));
		if($r['tgl_kembali']==""){$status = "Masih dipinjam"; $tombol="";} else {$status = "Sudah kembali"; $tombol="disabled";}
	?>
	<tr>
	<td align="center"><?=$a;?></td>
	<td align="center"><?=$r['nim'];?></td>
	<td align="center"><?=$mahasiswa['nama'];?></td>
	<td align="center"><?=$sepeda['nama_sepeda'];?></td>
	<td align="center"><?=$lokasi['nama_lokasi'];?></td>
	<td align="center"><?=$sepeda['jumlah_sepeda'];?></td>
	<td align="center"><?=$r['tgl_pinjam'];?></td>
	<td align="center"><?=$r['tgl_kembali'];?></td>
	<td align="center"><?=$status;?></td>
	<td><button type="button" class="btn btn-primary btn-sm" <?=$tombol;?> data-toggle="modal" data-target="#Proses<?=$r['id_peminjaman'];?>">Kembali</button></td>
	<td><a href="pdf.php?id=<?=$r['id_peminjaman'];?>" class="btn btn-sm btn-danger" target="_blank" onclick="return confirm('ANDA YAKIN AKAN MENCETAK [<?=strtoupper($mahasiswa['nama']);?>] ... ?')">Cetak</a></td>
	</tr>

<!-- Modal -->
<div class="modal fade" id="Proses<?=$r['id_peminjaman'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengembalian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="?on=Data Peminjaman&buka=1" method="post">
		<input type="text" name="id_peminjaman" hidden value="<?=$r['id_peminjaman'];?>">
		<input type="text" name="kode_sepeda" hidden value="<?=$r['kode_sepeda'];?>">
		<div class="form-group row">
		<label class="col-sm-4 col-form-label">NIM</label>
		<div class="col-sm-8">
		<input class="form-control" readonly type="text" value="<?=$r['nim'];?>" />
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama</label>
		<div class="col-sm-8">
		<input class="form-control" readonly type="text" value="<?=$mahasiswa['nama'];?>" />
		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-4 col-form-label">Tanggal Kembali</label>
		<div class="col-sm-8">
		<input class="form-control" name="tgl_kembali" type="date" value="<?=$r['tgl_kembali'];?>" />
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
		$id_peminjaman= $_POST['id_peminjaman'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$kode_sepeda = $_POST['kode_sepeda'];
		$sepeda=mysql_fetch_assoc(mysql_query("select jumlah_sepeda from sepeda where kode_sepeda='$sepeda'"));
		$jml = $sepeda['jumlah_sepeda']+1;
		
		$update = mysql_query("update peminjaman set tgl_kembali='$tgl_kembali' where id_peminjaman='$id_peminjaman'");
		$update1 = mysql_query("update sepeda set jumlah_sepeda='$jml' where kode_sepeda='$kode_sepeda'");
		if($update && $update1){
			
			echo "<script language='javascript'>alert('Alhamdulillah.. Data berhasil diupdate!');document.location='?on=Data Peminjaman';</script>";
		}else{
			echo "<script language='javascript'>alert('Subhanallah... Sabar yaaa, Data gagal terupdate');document.location='?on=Data Peminjaman';</script>";
		}
		
		
		break;
		case 2 :
		$tap = $_GET['tap'];
		$hapus1 = mysql_query("delete from peminjaman where id_peminjaman='$tap'");
		echo "<script language='javascript'>document.location='?on=Data Peminjaman';</script>";
		break;
	}
}



?>

	
	<?php
	}else{echo "<script>document.location=\"?on=Error 403\"</script>";
}?>