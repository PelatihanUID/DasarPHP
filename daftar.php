<html>
<head>
	<title>Daftar - AccessNetLab</title>
</head>
<body>

	<!-- Membuat Form Pendaftaran -->
	<center><h1><b>Silahkan Mengisi Form Pendaftaran</b></h1></center>

	<!-- Menampilkan Pesan Sukses -->
	<?php
  		if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    		echo '<center><h3>Berhasil Mendaftar!<br> Silahkan <a href=login.php>Login</a></center></h3>';
  		}
  	?>

	<table border="0" align="center" bgcolor="#FFFFFF">
	<tr>
	<form name="form_pendaftaran" method="post" action="input_pendaftaran.php">
		<td>
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input name="nama" type="text" required="required"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input name="alamat" type="text" required="required"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input name="nim" type="number" required="required"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input name="username" type="text" required="required"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="password" type="password" required="required"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Buat Akun"></td>
				</tr>
			</table>
		</td>
	</form>
	</tr>
	</table>

</body>
</html>