<?php 
require 'functions_user.php';
$user = query("SELECT * FROM user");
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

<h1>Data User(parent)</h1>

<a class="btn btn-primary" type="submit" href="tambah_user.php">TAMBAH</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0" class="table table-hover">

<tr align="center">
	<th scope="col">No.</th>
	<th scope="col">Aksi</th>
	<th scope="col">id_user</th>
	<th scope="col">Username</th>
	<th scope="col">pasword</th>

</tr>
<?php $i = 1; ?>
<?php  foreach( $user as $row ) : ?>
<tr align="center">
	<td><?= $i ?></td>
	<td>
		<a class="btn btn-primary" type="submit" href="detail_user.php?id_user=<?= $row["id_user"] ?>">detail</a>  
		<a class="btn btn-primary" type="submit" href="hapus_user.php?id_user=<?= $row["id_user"]; ?>" onclick="return confirm('yakin ?')">hapus</a>
	</td>
	<td><?php echo $row["id_user"]; ?></td>
	<td>><?php echo $row["Username"]; ?></td>
	<td><?php echo $row["password"]; ?></td>
	
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>