<?php 
require 'ang_fungsi.php';
$ang = query("SELECT * FROM ang_view");
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

<h1>Data Angsuran</h1>

<a class="btn btn-primary" href="ang_tambah.php">TAMBAH</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0" class="table table-hover">

<tr align="center">
	<th scope="col">No.</th>
	<th scope="col">Aksi</th>
	<th scope="col">date_ang</th>
	<th scope="col">nota_ang</th>
	<th scope="col">id_p</th>

</tr>
<?php $i = 1; ?>
<?php  foreach( $ang as $row ) : ?>
<tr align="center">
	<td><?= $i ?></td>
	<td>
		<a class="btn btn-primary" href="ang_detail.php?nota_ang=<?= $row["nota_ang"] ?>">detail</a>  
		<a class="btn btn-primary" href="ang_hapus.php?nota_ang=<?= $row["nota_ang"]; ?>" onclick="return confirm('yakin ?')">hapus</a>
	</td>
	<td><?php echo $row["date_ang"]; ?></td>
	<td>><?php echo $row["nota_ang"]; ?></td>
	<td><?php echo $row["id_p"]; ?></td>
	
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>