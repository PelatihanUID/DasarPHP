<?php
include('koneksi.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$cek_login = mysql_query("SELECT * FROM anggota WHERE username='$username' AND password='$password'");

if (mysql_num_rows($cek_login) == 1) {
	$_SESSION['username'] = $username;
	header('location:main_index.php');
	} else {
	header('location:login.php?message=failed');
}
?>