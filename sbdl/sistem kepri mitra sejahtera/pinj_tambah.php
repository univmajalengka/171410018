
<?php
require 'pinj_fungsi.php';
//tombol sudah ditekan atau belum
if( isset($_POST ["submit"]) ) {

//cek berhasil

	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('Berhasil');
				document.location.href = 'pinj.php';
			</script>
		";
	}else{
		echo "<script>
				alert('gagal');
				document.location.href = 'pinj.php';
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
	<title>Tambah data Pinjaman</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
<h1>Tambah data Pinjaman</h1>
<a href="pinj.php" class="btn btn-danger">Kembali</a>
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
				<td><label for="date_pinj">date_simp : </label></td>
				<td><input type="date" name="date_pinj" id="date_pinj" required></td>
			</tr>
			<tr>
				<td><label for="jangka_pinj">jangka_pinj : </label></td>
				<td><input type="text" name="jangka_pinj" id="jangka_pinj" required></td>
			</tr>
			<tr>
				<td><label for="nom_pinj">nom_pinj : </label></td>
				<td><input type="text" name="nom_pinj" id="nom_pinj" required></td>
			</tr>
			<tr>
				<td><label for="ket_pinj">ket_pinj : </label></td>
				<td><input type="text" name="ket_pinj" id="ket_pinj" required></td>
			</tr>
				<tr>
				<td><label for="lunas_pinj">lunas_pinj : </label></td>
				<td><input type="text" name="lunas_pinj" id="lunas_pinj" required></td>
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