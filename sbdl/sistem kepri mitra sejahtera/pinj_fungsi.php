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
	$date_pinj = htmlspecialchars($data["date_pinj"]);
	$jangka_pinj = htmlspecialchars($data["jangka_pinj"]);
	$nom_pinj = htmlspecialchars($data["nom_pinj"]);
	$ket_pinj = htmlspecialchars($data["ket_pinj"]);
	$lunas_pinj = htmlspecialchars($data["lunas_pinj"]);



$query = "INSERT INTO pinj
			VALUES 
			('$id_a','','$date_pinj','$jangka_pinj','$nom_pinj','$ket_pinj','$lunas_pinj')
		";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

//delete

function hapus($id){
	global $conn;
	mysqli_query($conn, " DELETE FROM pinj WHERE id_p = $id");
	return mysqli_affected_rows($conn);
 }



 ?>


