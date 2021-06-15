<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akun</title>
</head>

<body>
	<header>
		<h3>Formulir Data Diri</h3>
	</header>

	<form action="?on=prosesdaftar" method="POST">
		<fieldset>
		<p>
			<label for="nim">NIM: </label><br>
			<input type="text" name="nim" placeholder="NIM" />
		</p>
		<p>
			<label for="nama"> Nama: </label><br>
			<input type="text" name="nama" placeholder="nama" />
		</p>
		<p>
        <label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="L"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
        </p>
        <p>
            <label for="nohp">Nomor Telepon:</label><br>
			<input type="number" name="nohp" placeholder="no telepon">
		</p>
		<p>
			<label for="alamat">Alamat: </label><br>
			<textarea name="alamat" placeholder="alamat"></textarea>
		</p>
		<p>
			<label for="username">Username:</label><br>
			<input type="username" name="username" placeholder="username">
		</p>
		<p>
			<label for="password">Password:</label><br>
			<input type="password" name="password" placeholder="password">
		</p>
		<p>
			<input type="submit" value="Daftar" name="Daftar" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
