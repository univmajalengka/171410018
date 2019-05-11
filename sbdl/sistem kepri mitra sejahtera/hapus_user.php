<?php 

require 'functions_user.php';

$id = $_GET["id_user"];

if( hapus($id) > 0 ){
	echo	"<script>
				alert('Terhapus');
				document.location.href = 'index_user.php';
			</script>";
}else{
	echo "<script>
				alert('gagal');
				document.location.href = 'index_user.php';
			</script>";
}

 ?>