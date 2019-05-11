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

	$date_ang = htmlspecialchars($data["date_ang"]);
	$id_p = htmlspecialchars($data["id_p"]);
	$pokok_ang = htmlspecialchars($data["pokok_ang"]);
	$ang = htmlspecialchars($data["ang"]);
	$prov_ang = htmlspecialchars($data["prov_ang"]);



$query = "INSERT INTO ang
			VALUES 
			('$date_ang','','$id_p','$pokok_ang','$ang','$prov_ang')
		";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

//delete

function hapus($id){
	global $conn;
	mysqli_query($conn, " DELETE FROM ang WHERE nota_ang = $id");
	return mysqli_affected_rows($conn);
 }



 ?>


