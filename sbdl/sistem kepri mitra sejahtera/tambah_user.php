
<?php
require 'functions_user.php';
//tombol sudah ditekan atau belum
if( isset($_POST ["submit"]) ) {

//cek berhasil

	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('Berhasil');
				document.location.href = 'index_user.php';
			</script>
		";
	}else{
		echo "<script>
				alert('gagal');
				document.location.href = 'index_user.php';
			</script>";
	}

}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Tambah data user</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
<h1>Tambah data user</h1>
<a href="index_user.php" class="btn btn-danger">Kembali</a>
	<form action="" method="post">
		<table class="table table-hover">
			<tr>
				<td><label for="Username">Username : </label></td>
				<td><input type="text" name="Username" id="Username" required></td>
			</tr>
			<tr>
				<td><label for="password">Password : </label></td>
				<td><input type="text" name="password" id="password" required></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" class="btn btn-primary">Tambah</button></td>
			</tr>
		</table>
	
	</form>
</body>
</html>