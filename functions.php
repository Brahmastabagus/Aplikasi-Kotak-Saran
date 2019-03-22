<?php 
	$brand = "Kotak Saran";
	$conn = mysqli_connect("localhost", "root", "", "kotaksaran");

	
	function query ($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data) {
		global $conn;
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$password = htmlspecialchars($data["password"]);
		$password1 = password_hash($password, PASSWORD_DEFAULT, $conn);
		$saran = htmlspecialchars($data["saran"]);

		$query = "INSERT INTO saran VALUES ('', '$nama', '$email', '$password1', '$saran')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function hapus($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM saran WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

	function ubah($data) {
		global $conn;

		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$password = htmlspecialchars($data["password"]);
		$saran = htmlspecialchars($data["saran"]);

		$query = "UPDATE saran SET id = $id, nama = '$nama',
				email = '$email', password = '$password', saran = '$saran'
				WHERE id = $id
				";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function cari($keyword) {
		$query = "SELECT * FROM saran
		 				WHERE
		  		id LIKE '%$keyword%' OR
		  		nama LIKE '%$keyword%' OR
		  		email LIKE '%$keyword%' OR
		  		saran LIKE '%$keyword%'
		  		";
		return query($query);
	}