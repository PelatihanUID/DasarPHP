<?php
session_start();
if (isset($_SESSION['username'])) {
	header('Location: main_index.php');
	}
?>

<html>
<head>
	<title>Selamat Datang</title>
</head>
<body>
	<center><h1>Selamat Datang!!!</h1>
		<h2><a href="login.php">Login</a> || <a href="daftar.php">Daftar</a></h2>
	</center>
</body>
</html>