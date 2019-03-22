<?php
	include 'functions.php';

	$id = $_GET["id"];

	if (hapus($id) > 0) {
		echo "<script>
				alert('Berhasil dihapus');
				document.location.href = 'kotak_saran.php';
			</script>";
	} else {
		echo "<script>
				alert('Gagal dihapus');
				document.location.href = 'kotak_saran.php';
			</script>";
	}
?>