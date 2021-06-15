<!DOCTYPE html>
<html>
<head>
	<title>Tambah Transaksi</title>
</head>

<body>
	<header>
		<h3>Formulir Transaksi</h3>
	</header>

	<form action="?on=Proses Transaksi" method="POST">
		<fieldset>

		<p>
			<label for="NIM">NIM: </label><br>
			<input list="encodings" name="nim" value="">
			<datalist id="encodings">
			<?php
				$mahas = mysql_query("select nim, nama from mahasiswa order by nim asc");
				while($r=mysql_fetch_assoc($mahas)){
				echo "<option value=\"".$r['nim']."\">".$r['nama']."</option>";
			}
				?>
			</datalist>
		</p>

		<p>
			<label for="kode_sepeda">Kode Sepeda: </label><br>
			<select name="kode_sepeda" id="sepeda">
			<option value="">Pilih Sepeda</option>
			<?php 
			$id = $_SESSION['ID_Lokasi'];
			$sepeda=mysql_query("select * from sepeda where id_lokasi='$id' and jumlah_sepeda > 0");
			while($r=mysql_fetch_assoc($sepeda)){
				echo "<option value=\"".$r['kode_sepeda']."\">".$r['nama_sepeda']."</option>";
			}
			?>
			</select>

        <p>
        <label for="tgl_pinjam">Tanggal Pinjam:</label><br>
			<input type="date" name="tgl_pinjam" placeholder="Tanggal Pinjam">
        </p>
	
        <p>
			<input type="submit" value="Daftar" name="Daftar" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
