<?php 

require 'pinj_fungsi.php';

$id = $_GET["id_p"];

if( hapus($id) > 0 ){
	echo	"<script>
				alert('Terhapus');
				document.location.href = 'pinj.php';
			</script>";
}else{
	echo "<script>
				alert('gagal');
				document.location.href = 'pinj.php';
			</script>";
}

 ?>