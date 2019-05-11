<?php 
require 'anggota_fungsi.php';
$id = $_GET["id_a"];
$query = mysqli_query($conn, "SELECT * FROM anggota WHERE id_a =$id");
$row = mysqli_fetch_array($query);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>detail</title>
 			<link rel="stylesheet" type="text/css" href="bootstrap.css">

 </head>
 <body>
 <p>
 	<table border="1" cellspacing="0" cellpadding="10"  class="table table-hover">
 		<tr>
 			<td>id_a</td>
 			<td>:</td>
 			<td><?php echo $row['id_a'] ?></td>
 		</tr>
 		<tr>
 			<td>id_user</td>
 			<td>:</td>
 			<td><?php echo $row['id_user'] ?></td>
 		</tr>
 		<tr>
 			<td>tgl_d</td>
 			<td>:</td>
 			<td><?php echo $row['tgl_d'] ?></td>
 		</tr>
 		<tr>
 			<td>nama_anggota</td>
 			<td>:</td>
 			<td><?php echo $row['nama_anggota'] ?></td>
 		</tr>
 		<tr>
 			<td>alamat_anggota</td>
 			<td>:</td>
 			<td><?php echo $row['alamat_anggota'] ?></td>
 		</tr>
 		<tr>
 			<td>jk_anggota</td>
 			<td>:</td>
 			<td><?php echo $row['jk_anggota'] ?></td>
 		</tr>
 		<tr>
 			<td>tgl_l_anggota</td>
 			<td>:</td>
 			<td><?php echo $row['tgl_l_anggota'] ?></td>
 		</tr>
 		<tr>
 			<td>hp_anggota</td>
 			<td>:</td>
 			<td><?php echo $row['hp_anggota'] ?></td>
 		</tr>
 	</table>
<a class="btn btn-danger" href="anggota.php">KEMBALI</a>
 </p>
 </body>
 </html>