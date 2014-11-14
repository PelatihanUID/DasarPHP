<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: index.php');
	}
?>

<html>
<head>
	<title>Beranda - AccessNetLab</title>
</head>
<body>

	<center><h1>Selamat Datang,<br>
	Silahkan Masukan Data Barang Yang Anda Pinjam<br>
	<a href="logout.php">Logout</a></h1></center>

	<!-- Menampilkan Pesan Sukses -->
	<?php
  		if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    		echo '<center><h3>Berhasil Menginput Data!</h3></center>';
  		}
  	?>

	<table border="0" align="center" bgcolor="#FFFFFF">
	<tr>
	<form name="form_penginputan" method="post" action="input_data.php">
		<td>
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input name="username" type="text" value=" <?php echo $_SESSION['username'] ?>" ></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input name="namabarang" type="text" required="required"></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td>:</td>
					<td><input name="tanggal" type="date" required="required"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td>:</td>
					<td><input name="jumlah" type="number" required="required"></td>
				</tr>
				<tr>
					<td>Digunakan Untuk</td>
					<td>:</td>
					<td><textarea name="keperluan" rows="4" cols="22"></textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Input Data"></td>
				</tr>
			</table>
		</td>
	</form>
	</tr>
	</table>

</body>
</html>