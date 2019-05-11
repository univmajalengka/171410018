
<?php
require 'sim_fungsi.php';
//tombol sudah ditekan atau belum
if( isset($_POST ["submit"]) ) {

//cek berhasil

	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('Berhasil');
				document.location.href = 'simp.php';
			</script>
		";
	}else{
		echo "<script>
				alert('gagal');
				document.location.href = 'simp.php';
			</script>";
	}

}
 ?>
 <?php 
$query = "SELECT * FROM anggota ORDER BY id_a ASC";
$result = mysqli_query($conn,$query);
  ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Tambah data simpanan</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
<h1>Tambah data simpanan</h1>
<a href="simp.php" class="btn btn-danger">Kembali</a>
	<form action="" method="post">
		<table class="table table-hover">
			<tr>
				<td><label for="id_a">id_a : </label></td>
				<td><select name="id_a" required>
					<?php 
					while ($data = mysqli_fetch_array($result)) {
					?>
					<option><?php echo $data['id_a'] ?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td><label for="date_simp">date_simp : </label></td>
				<td><input type="date" name="date_simp" id="date_simp" required></td>
			</tr>
			<tr>
				<td><label for="jenis_simp">jenis_simp : </label></td>
				<td><input type="text" name="jenis_simp" id="jenis_simp" required></td>
			</tr>
			<tr>
				<td><label for="jml_simp">jml_simp : </label></td>
				<td><input type="text" name="jml_simp" id="jml_simp" required></td>
			</tr>
			<tr>
				<td><label for="ket_simp">ket_simp : </label></td>
				<td><input type="text" name="ket_simp" id="ket_simp" required></td>
			</tr>
			<tr>
				<td>
				<button type="submit" name="submit" class="btn btn-primary">Tambah</button>
				</td>
			</tr>
	</table>
	</form>
</body>
</html>