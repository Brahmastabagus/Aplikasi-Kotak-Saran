<?php 
	include 'functions.php';
	$saran = query("SELECT * FROM saran");
	if (isset($_POST["cari"])) {
		$saran = cari($_POST["keyword"]);
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
  body:before {
  content: "";
  position: fixed;
  z-index: -1;
  background-size:cover;
  background-position:center top;
  display: block;
  background-image: url(1_l3wujEgEKOecwVzf_dqVrQ.jpeg);
  width: 100%;
  height: 1000px;
  filter: blur(.9px) ;
  -webkit-filter: blur(.9px) ;
}
nav {
  background-color: #07e736;
  }
  .brand-logo {
   color: #505050 !important;
   line-height: 60px;
  }
  	button {
		margin-top: 25px;
		margin-left: -15px;
  	}
  	.tambah {
  		color: #717171;
  		transition: .3s;
  	}
  	.tambah1 {
  		width: 110px;
  		line-height: 30px;
  		padding-left: 8px;
  		height: 30px;
  		background-color: gold;
  		margin-top: 10px;
  		border-radius: 3px;
  		margin-bottom: -40px;
  		cursor: pointer;
  		display: inline-block;
  		transition: .3s;
  	}
  	.tambah1:hover {
  		box-shadow: 1px 1px 3px black;
  	}
  	label, input {
  		color: white !important;
  	}
  	#container {
  		position: relative;
  		top: -50px;
  	}
  </style>
  <body>
  	<nav>
      <div class="nav nav-wrapper">
        <a href="index.php" class="brand-logo center"><?= $brand ?></a>
      </div>
    </nav>
  	<div class="container">
	  	<h3>Kotak Saran</h3>
	  	<hr>
			<a class="tambah1" href="tambah.php">
	  			<div class="tambah">
					Tambah Saran
	  			</div>
			</a>
			<br><br>
			<div class="row">
				<form action="" method="post" class="col s6">
					<div class="row">
						<div class="col m8">
							<div class="input-field" style="display: inline-block;">
								<input type="text" name="keyword" size="40" class="validate col s12" autocomplete="off" style="border-radius: 3px;" id="keyword first_name">
								<label id="first_name">Cari</label>
							</div>
						</div>
						<div class="col m4">
							<button class="btn waves-effect waves-light" type="submit" name="cari" id="tombol-cari">Cari
			               	<i class="material-icons right">send</i>
			                </button>
						</div>
					</div>
				</form>
			</div>
			<div id="container">
				<table border="1" cellpadding="10" cellspacing="0" class="highlight centered responsive-table">
					<thead>
						<tr>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Saran</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($saran as $row) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td>
								<a href="hapus.php?id=<?= "$row[id]"; ?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
							</td>
							<td><?= $row["nama"]; ?></td>
							<td><?= $row["email"]; ?></td>
							<td><?= $row["saran"]; ?></td>
						</tr>
						<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
  	<script src="materialize/js/materialize.min.js"></script>
  </body>
 </html>