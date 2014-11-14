<?
include('koneksi.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nim = $_POST['nim'];
$username = $_POST['username'];
$password = $_POST['password'];

$masukandata = mysql_query("INSERT INTO anggota VALUES('$nama', '$alamat', '$nim', '$username', '$password')") or die(mysql_error());

if ($masukandata) {
    header('location:daftar.php?message=success');
}
?>