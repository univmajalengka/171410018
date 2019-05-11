<?php 

require 'anggota_fungsi.php';

$id = $_GET["id_a"];

if( hapus($id) > 0 ){
	echo	"<script>
				alert('Terhapus');
				document.location.href = 'anggota.php';
			</script>";
}else{
	echo "<script>
				alert('gagal');
				document.location.href = 'anggota.php';
			</script>";
}

 ?>