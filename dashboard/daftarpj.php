<!DOCTYPE html>
<html>
<head>
	<title>Tambah PJ</title>
</head>

<body>
	<header>
		<h3>Formulir Data PJ</h3>
	</header>

	<form action="?on=Proses Tambah PJ" method="POST">
		<fieldset>
		<p>
			<label for="nama_pj">Nama PJ: </label><br>
			<input type="text" name="nama_pj" placeholder="Nama PJ" />
		</p>
		<p>
        <label for="nohp">Nomor HP:</label><br>
			<input type="text" name="nohp" placeholder="Nomor HP">
        </p>
        <p>
        <label for="username">Username:</label><br>
			<input type="text" name="username" placeholder="Username">
        </p>
        <p>
        <label for="password">Password:</label><br>
			<input type="text" name="password" placeholder="Password">
        </p>
		<p> 
        <label for="jabatan">Jabatan: </label>
			<label><input type="radio" name="jabatan" value="1"> Kepala Cabang</label>
			<label><input type="radio" name="jabatan" value="2"> Penanggung Jawab</label>
        </p>
        <p>
			<input type="submit" value="Daftar" name="Daftar" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
