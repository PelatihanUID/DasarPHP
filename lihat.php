<?php
include('koneksi.php');
?>

<html>
<head>
    <title>Lihat Data - AccessNetLab</title>
</head>
<body>
    <center><h1>Daftar Peminjaman</h1>
        <table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <td><center><b>No</b></center></td>
            <td><center><b>Username</b></center></td>
            <td><center><b>Nama Barang</b></center></td>
            <td><center><b>Tanggal Pinjam</b></center></td>
            <td><center><b>Jumlah</b></center></td>
            <td><center><b>Keperluan</b></center></td>
            <td><center><b>Pilihan</b></center></td>
        </tr>
    </thead>
    <tbody>

    <?php 
    $query = mysql_query("SELECT * FROM datapinjaman");
    
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td><center><?php echo $no; ?></center></td>
            <td><center><?php echo $data['username']; ?></center></td>
            <td><center><?php echo $data['namabarang']; ?></center></td>
            <td><center><?php echo $data['tanggal']; ?></center></td>
            <td><center><?php echo $data['jumlah']; ?></center></td>
            <td><center><?php echo $data['keperluan']; ?></center></td>
            <td>
                <a href="edit.php?id=<?php echo $data['user_id']; ?>">Edit</a> || 
                <a href="delete.php?id=<?php echo $data['user_id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
        $no++;
    } 
    ?>
    </tbody>
</table>
    </center>
</body>
</html>