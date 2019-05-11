<?php 
require 'pinj_fungsi.php';
$pinj = query("SELECT * FROM pinj");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
<table  cellpadding="10" cellspacing="0" align="center">
	<tr>
		<td><a href="index_user.php">User</a></td>
		<td><a href="anggota.php">Anggota</a></td>
		<td><a href="pinj.php">Pinjaman</a></td>
		<td><a href="simp.php">Simpanan</a></td>
		<td><a href="ang.php">Angsuran</a></td>
	</tr>
</table>

<h1>Data Pinjaman(parent)</h1>

<a class="btn btn-primary" href="pinj_tambah.php">TAMBAH</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0" class="table table-hover">

<tr align="center">
	<th scope="col">No.</th>
	<th scope="col">Aksi</th>
	<th scope="col">id_a</th>
	<th scope="col">id_p</th>
	<th scope="col">date_pinj</th>

</tr>
<?php $i = 1; ?>
<?php  foreach( $pinj as $row ) : ?>
<tr align="center">
	<td><?= $i ?></td>
	<td>
		<a class="btn btn-primary" href="pinj_detail.php?id_simp=<?= $row["id_p"] ?>">detail</a>
		<a class="btn btn-primary" href="pinj_hapus.php?id_p=<?= $row["id_p"]; ?>" onclick="return confirm('yakin ?')">hapus</a>
	</td>
	<td><?php echo $row["id_a"]; ?></td>
	<td>><?php echo $row["id_p"]; ?></td>
	<td><?php echo $row["date_pinj"]; ?></td>
	
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>