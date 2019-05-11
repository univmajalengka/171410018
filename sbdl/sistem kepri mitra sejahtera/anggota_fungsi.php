<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root", "", "sistem_informasi_kepri_mitra_sejahtera");

function query($query) {
	global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while( $row = mysqli_fetch_assoc($result)){
	$rows[] = $row;
}
return $rows;
}

//tambah
function tambah($data){
	global $conn;

	$id_a = htmlspecialchars($data["id_a"]);
	$id_user = htmlspecialchars($data["id_user"]);
	$tgl_d = htmlspecialchars($data["tgl_d"]);
	$nama_anggota = htmlspecialchars($data["nama_anggota"]);
	$alamat_anggota = htmlspecialchars($data["alamat_anggota"]);
	$jk_anggota = htmlspecialchars($data["jk_anggota"]);
	$tgl_l_anggota = htmlspecialchars($data["tgl_l_anggota"]);
	$hp_anggota = htmlspecialchars($data["hp_anggota"]);




$query = "INSERT INTO anggota
			VALUES 
			('$id_a','$id_user','$tgl_d','$nama_anggota','$alamat_anggota','$jk_anggota','$tgl_l_anggota','$hp_anggota')
		";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

//delete

function hapus($id){
	global $conn;
	mysqli_query($conn, " DELETE FROM anggota WHERE id_a = $id");
	return mysqli_affected_rows($conn);
 }



 ?>


