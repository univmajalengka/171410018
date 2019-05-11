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
	$date_simp = htmlspecialchars($data["date_simp"]);
	$jenis_simp = htmlspecialchars($data["jenis_simp"]);
	$jml_simp = htmlspecialchars($data["jml_simp"]);
	$ket_simp = htmlspecialchars($data["ket_simp"]);




$query = "INSERT INTO simp
			VALUES 
			('$id_a','$date_simp','$jenis_simp','$jml_simp','$ket_simp','')
		";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

//delete

function hapus($id){
	global $conn;
	mysqli_query($conn, " DELETE FROM simp WHERE id_simp = $id");
	return mysqli_affected_rows($conn);
 }



 ?>


