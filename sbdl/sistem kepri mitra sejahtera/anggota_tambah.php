
<?php
require 'anggota_fungsi.php';
//tombol sudah ditekan atau belum
if( isset($_POST ["submit"]) ) {

//cek berhasil

	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('Berhasil');
				document.location.href = 'anggota.php';
			</script>
		";
	}else{
		echo "<script>
				alert('gagal');
				document.location.href = 'anggota.php';
			</script>";
	}

}
 ?>
 <?php 
$query = "SELECT * FROM user ORDER BY id_user ASC";
$result = mysqli_query($conn,$query);
  ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Tambah data Anggota</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<h1>Tambah data angsuran</h1>
<a class="btn btn-danger" href="anggota.php">Kembali</a>
<div class="form-group">
	<form action="" method="post">
		<table class="table table-hover">
			<tr>
				<td><label for="id_a">id_a : </label></td>
				<td><input type="text" name="id_a" id="id_a" required></td>
			</tr>
			<tr>
				<td><label for="id_user">id_user : </label></td>
				<td><select name="id_user" required>
					<?php 
					while ($data = mysqli_fetch_array($result)) {
					?>
					<option><?php echo $data['id_user'] ?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td><label for="tgl_d">tgl_d : </label></td>
				<td><input type="date" name="tgl_d" id="tgl_d" required></td>
			</tr>
			<tr>
				<td><label for="nama_anggota">nama_anggota : </label></td>
				<td><input type="text" name="nama_anggota" id="nama_anggota" required></td>
			</tr>
			<tr>
				<td><label for="alamat_anggota">alamat_anggota : </label></td>
				<td><input type="text" name="alamat_anggota" id="alamat_anggota" required></td>
			</tr>
			<tr>
				<td><label for="jk_anggota">jk_anggota : </label></td>
				<td><input type="text" name="jk_anggota" id="jk_anggota" required></td>
			</tr>
			<tr>
				<td><label for="tgl_l_anggota">tgl_l_anggota : </label></td>
				<td><input type="date" name="tgl_l_anggota" id="tgl_l_anggota" required></td>
			</tr>
			<tr>
				<td><label for="hp_anggota">hp_anggota : </label></td>
				<td><input type="text" name="hp_anggota" id="hp_anggota" required></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" class="btn btn-primary">Tambah</button></td>
			</tr>
	</table>
	</form>
</body>
</html>