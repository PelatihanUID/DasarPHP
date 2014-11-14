<?php
$host = 'localhost';
$username = 'root';
$password = '';
$namadatabase = 'peminjaman';

$koneksidatabase = mysql_connect($host, $username, $password) or die(mysql_error());
$pilihdatabase = mysql_select_db($namadatabase);
?>