<!DOCTYPE html>
<html>
<head>
	<title>Tambah Lokasi</title>
</head>

<body>
	<header>
		<h3>Formulir Data Lokasi</h3>
	</header>

	<form action="?on=Proses Tambah Lokasi" method="POST">
		<fieldset>
		<p>
			<label for="id_pj">ID PJ: </label><br>
			<select name="id_pj">
			<option value="">-Pilih PJ-</option>
			<?php
			$pj = mysql_query("select * from pj where jabatan='2'");
			while($row = mysql_fetch_assoc($pj)){
			?>
			<option value="<?=$row['id_pj'];?>"><?=$row['nama_pj'];?></option>

			<?php } ?>
			</select>
		</p>
		<p>
        	<label for="nama_lokasi">Nama Lokasi: </label><br>
			<input type="text" name="nama_lokasi" placeholder="Nama Lokasi">
        </p>
		<p>	
			<input type="submit" value="Daftar" name="Daftar" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
