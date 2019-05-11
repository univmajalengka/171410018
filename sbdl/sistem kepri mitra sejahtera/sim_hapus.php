<?php 

require 'sim_fungsi.php';

$id = $_GET["id_simp"];

if( hapus($id) > 0 ){
	echo	"<script>
				alert('Terhapus');
				document.location.href = 'simp.php';
			</script>";
}else{
	echo "<script>
				alert('gagal');
				document.location.href = 'simp.php';
			</script>";
}

 ?>