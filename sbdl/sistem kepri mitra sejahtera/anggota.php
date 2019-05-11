<?php 
require 'anggota_fungsi.php';
$anggota = query("SELECT * FROM anggota");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
<table cellpadding="10" cellspacing="0" align="center">
	<tr>
		<td><a href="index_user.php">User</a></td>
		<td><a href="anggota.php">Anggota</a></td>
		<td><a href="pinj.php">Pinjaman</a></td>
		<td><a href="simp.php">Simpanan</a></td>
		<td><a href="ang.php">Angsuran</a></td>
	</tr>
</table>

<h1>Data Anggota(parent)</h1>

<a class="btn btn-primary" href="anggota_tambah.php">TAMBAH</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0" class="table table-hover">

<tr align="center">
	<th scope="col">No.</th>
	<th scope="col">Aksi</th>
	<th scope="col">id_a</th>
	<th scope="col">id_user</th>
	<th scope="col">tgl_d</th>

</tr>
<?php $i = 1; ?>
<?php  foreach( $anggota as $row ) : ?>
<tr align="center">
	<td><?= $i ?></td>
	<td>
		<a class="btn btn-primary" href="anggota_detail.php?id_a=<?= $row["id_a"] ?>">detail</a>  
		<a class="btn btn-primary" href="anggota_hapus.php?id_a=<?= $row["id_a"]; ?>" onclick="return confirm('yakin ?')">hapus</a>
	</td>
	<td><?php echo $row["id_a"]; ?></td>
	<td>><?php echo $row["id_user"]; ?></td>
	<td><?php echo $row["tgl_d"]; ?></td>
	
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>