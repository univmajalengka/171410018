<?php 
require 'sim_fungsi.php';
$id = $_GET["id_simp"];
$query = mysqli_query($conn, "SELECT * FROM simp WHERE id_simp =$id");
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
 			<td>date_simp</td>
 			<td>:</td>
 			<td><?php echo $row['date_simp'] ?></td>
 		</tr>
 		<tr>
 			<td>jenis_simp</td>
 			<td>:</td>
 			<td><?php echo $row['jenis_simp'] ?></td>
 		</tr>
 		<tr>
 			<td>jml_simp</td>
 			<td>:</td>
 			<td><?php echo $row['jml_simp'] ?></td>
 		</tr>
 		<tr>
 			<td>ket_sim</td>
 			<td>:</td>
 			<td><?php echo $row['ket_simp'] ?></td>
 		</tr>
 		<tr>
 			<td>id_simp</td>
 			<td>:</td>
 			<td><?php echo $row['id_simp'] ?></td>
 		</tr>
 	</table>
<a class="btn btn-danger" href="simp.php">KEMBALI</a>
 </p>
 </body>
 </html>