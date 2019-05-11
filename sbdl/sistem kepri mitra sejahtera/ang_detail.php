<?php 
require 'ang_fungsi.php';
$id = $_GET["nota_ang"];
$query = mysqli_query($conn, "SELECT * FROM ang WHERE nota_ang =$id");
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
 			<td>date_ang</td>
 			<td>:</td>
 			<td><?php echo $row['date_ang'] ?></td>
 		</tr>
 		<tr>
 			<td>nota_ang</td>
 			<td>:</td>
 			<td><?php echo $row['nota_ang'] ?></td>
 		</tr>
 		<tr>
 			<td>id_p</td>
 			<td>:</td>
 			<td><?php echo $row['id_p'] ?></td>
 		</tr>
 		<tr>
 			<td>pokok_ang</td>
 			<td>:</td>
 			<td><?php echo $row['pokok_ang'] ?></td>
 		</tr>
 		<tr>
 			<td>ang</td>
 			<td>:</td>
 			<td><?php echo $row['ang'] ?></td>
 		</tr>
 		<tr>
 			<td>prov_ang</td>
 			<td>:</td>
 			<td><?php echo $row['prov_ang'] ?></td>
 		</tr>
 	</table>
<a class="btn btn-danger" href="ang.php">KEMBALI</a>
 </p>
 </body>
 </html>