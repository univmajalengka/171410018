
<?php
require 'ang_fungsi.php';
//tombol sudah ditekan atau belum
if( isset($_POST ["submit"]) ) {

//cek berhasil

	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('Berhasil');
				document.location.href = 'ang.php';
			</script>
		";
	}else{
		echo "<script>
				alert('gagal');
				document.location.href = 'ang.php';
			</script>";
	}

}
 ?>
 <?php 
$query = "SELECT * FROM pinj ORDER BY id_p ASC";
$result = mysqli_query($conn,$query);
  ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Tambah data angsuran</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<h1>Tambah data angsuran</h1>
<a class="btn btn-danger" href="ang.php">Kembali</a>
<div class="form-group">
	<form action="" method="post">
		<table class="table table-hover">
			<tr>
				<td><label for="date_ang">date_ang : </label></td>
				<td><input type="date" name="date_ang" id="date_ang" required></td>
			</tr>
			<tr>
				<td><label for="id_p">id_p : </label></td>
				<td><select name="id_p" required>
					<?php 
					while ($data = mysqli_fetch_array($result)) {
					?>
					<option><?php echo $data['id_p'] ?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td><label for="pokok_ang">pokok_ang : </label></td>
				<td><input type="text" name="pokok_ang" id="pokok_ang" required></td>
			</tr>
			<tr>
				<td><label for="ang">ang : </label></td>
				<td><input type="text" name="ang" id="ang" required></td>
			</tr>
			<tr>
				<td><label for="prov_ang">prov_ang : </label></td>
				<td><input type="text" name="prov_ang" id="prov_ang" required></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" class="btn btn-primary">Tambah</button></td>
			</tr>
	</table>
	</form>
</body>
</html>