<?php 
require 'pinj_fungsi.php';
$id = $_GET["id_simp"];
$query = mysqli_query($conn, "SELECT * FROM pinjdetail_view WHERE id_p =$id");
$row = mysqli_fetch_array($query);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>detail</title>
 	 			<link rel="stylesheet" type="text/css" href="bootstrap.css" >

 </head>
 <body>
 <p>
 	<table border="1" cellspacing="0" cellpadding="10" class="table table-hover">
 		<tr>
 			<td>id_a</td>
 			<td>:</td>
 			<td><?php echo $row['id_a'] ?></td>
 		</tr>
 		<tr>
 			<td>id_p</td>
 			<td>:</td>
 			<td><?php echo $row['id_p'] ?></td>
 		</tr>
 		<tr>
 			<td>date_pinj</td>
 			<td>:</td>
 			<td><?php echo $row['date_pinj'] ?></td>
 		</tr>
 		<tr>
 			<td>jangka_pinj</td>
 			<td>:</td>
 			<td><?php echo $row['jangka_pinj'] ?></td>
 		</tr>
 		<tr>
 			<td>nom_pinj</td>
 			<td>:</td>
 			<td><?php echo $row['nom_pinj'] ?></td>
 		</tr>
 		<tr>
 			<td>ket_pinj</td>
 			<td>:</td>
 			<td><?php echo $row['ket_pinj'] ?></td>
 		</tr>
 		<tr>
 			<td>lunas_pinj</td>
 			<td>:</td>
 			<td><?php echo $row['lunas_pinj'] ?></td>
 		</tr>
 	</table>
<a class="btn btn-danger" href="pinj.php">KEMBALI</a>
 </p>
 </body>
 </html>