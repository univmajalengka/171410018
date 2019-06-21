<?php 
require 'functions_user.php';
$id = $_GET["id_user"];
$query = mysqli_query($conn, "SELECT * FROM user_view WHERE id_user =$id");
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
 	<table border="1" cellspacing="0" cellpadding="10" class="table table-hover">
 		<tr>
 			<td>id</td>
 			<td>:</td>
 			<td><?php echo $row['id_user'] ?></td>
 		</tr>
 		<tr>
 			<td>Username</td>
 			<td>:</td>
 			<td><?php echo $row['Username'] ?></td>
 		</tr>
 		<tr>
 			<td>password</td>
 			<td>:</td>
 			<td><?php echo $row['password'] ?></td>
 		</tr>
 	</table>
<a class="btn btn-danger" href="index_user.php">KEMBALI</a>
 </p>
 </body>
 </html>