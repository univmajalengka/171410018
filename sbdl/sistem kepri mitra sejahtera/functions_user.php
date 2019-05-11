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

	$Username = htmlspecialchars($data["Username"]);
	$password = htmlspecialchars($data["password"]);



$query = "INSERT INTO user
			VALUES 
			('','$Username','$password')
		";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

//delete

function hapus($id){
	global $conn;
	mysqli_query($conn, " DELETE FROM user WHERE id_user = $id");
	return mysqli_affected_rows($conn);
 }



 ?>


