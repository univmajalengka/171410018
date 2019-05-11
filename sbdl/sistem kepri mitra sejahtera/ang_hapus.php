<?php 

require 'ang_fungsi.php';

$id = $_GET["nota_ang"];

if( hapus($id) > 0 ){
	echo	"<script>
				alert('Terhapus');
				document.location.href = 'ang.php';
			</script>";
}else{
	echo "<script>
				alert('gagal');
				document.location.href = 'ang.php';
			</script>";
}

 ?>