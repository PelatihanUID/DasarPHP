<html>
<head>
	<title>Login - AccessNetLab</title>
</head>
<body>

	<center><h1><b>Silahkan Login Terlebih Dahulu</b></h1></center>

	<!-- Menampilkan Pesan Gagal Login -->
	<?php
  		if (!empty($_GET['message']) && $_GET['message'] == 'failed') {
    		echo '<center><h3>Gagal Login. Username atau Password Salah!<br> Silahkan Login Kembali</center></h3>';
  		}
  	?>
	
	<!-- Membuat Form Login -->
	<table border="0" align="center" bgcolor="#FFFFFF">
	<tr>
	<form name="form_login" method="post" action="cek_login.php">
		<td>
			<table>
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
					<td><input type="submit" name="Submit" value="Login"></td>
				</tr>
			</table>
		</td>
	</form>
	</tr>
	</table>

</body>
</html>