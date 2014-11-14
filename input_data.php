<?
include('koneksi.php');

$username = $_POST['username'];
$namabarang = $_POST['namabarang'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$keperluan = $_POST['keperluan'];

$masukandata = mysql_query("INSERT INTO datapinjaman VALUES('', '$username', '$namabarang', '$tanggal', '$jumlah', '$keperluan')") or die(mysql_error());

if ($masukandata) {
    header('location:main_index.php?message=success');
}
?>