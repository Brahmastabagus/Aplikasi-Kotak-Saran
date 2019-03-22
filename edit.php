<?php
	include 'functions.php';
	// ambil data di url
	$id = $_GET["id"];
	// query data mahasiswa berdasarkan id
	$mhs = query("SELECT * FROM saran WHERE id = $id")[0];
	if (isset($_POST["submit"])) {
		
		if (ubah($_POST) > 0) {
echo "<script>
		alert('Berhasil diubah');
		document.location.href = 'kotak_saran.php';
</script>";
} else {
echo "<script>
		alert('Gagal diubah');
		document.location.href = 'kotak_saran.php';
</script>";
}
}
?>
<!-- Hello Brahmasta Bagus Aryandra -->
<!-- Selamat Mengoding -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="X RPL 2">
		<meta name="keywords" content="HTML,CSS,C++">
		<meta name="author" content="Brahmasta Bagus A">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="materialize/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<title>Login | <?= $brand ?></title>
	</head>
	<style>
	nav {
	background-color: #737373;
	}
	fieldset {
	width: 600px;
	margin-left: 130px;
	margin-top: 5px;
	}
	legend {
	margin-left: 230px;
	}
	h4 {
	font-size: 40px;
	}
	.fa-icon {
	margin-top: 120px;
	}
	.fab {
	display: block;
	margin-top: 20px;
	font-size: 25px;
	margin-left: 20px;
	}
	a {
	color: black;
	}
	</style>
	<body>
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<nav>
			<div class="nav nav-wrapper">
				<a href="#" class="brand-logo center"><?= $brand ?></a>
			</div>
		</nav>
		<div class="container">
			<fieldset>
				<legend>
					<h4 class="center">Saran</h4>
				</legend>
				<div class="row">
					<form class="col s12" action="" method="POST">
						<div class="row">
							<div class="col s2 fa-icon">
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-whatsapp"></i></a>
								<a href="#"><i class="fab fa-github"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
							</div>
							<div class="col s10">
								<div class="row">
									<div class="input-field col s12">
										<input id="first_name" type="text" class="validate" name="nama" value="<?= $mhs["nama"] ?>">
										<label for="first_name">Nama Anda</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" class="validate" name="email" value="<?= $mhs["email"] ?>">
										<label for="email">Email</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="validate" disabled="on" name="password" value="<?= $mhs["password"] ?>" >
										<label for="password">Password</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea2" class="materialize-textarea" data-length="120" name="saran"><?= $mhs["saran"] ?></textarea>
										<label for="textarea2">Masukkan Saran</label>
									</div>
								</div>
								<button class="btn waves-effect waves-light" type="submit" name="submit">Kirim
								<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</fieldset>
		</div>
		<script src="materialize/js/materialize.min.js"></script>
	</body>
</html>