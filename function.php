<?php
	include("config.php");

	// TAMBAH TODO
	if (isset($_POST['tambah'])) {
		$todo_judul = $_POST['judul'];
		$todo_tanggal = $_POST['tanggal'];
		$todo_status = $_POST['status'];

		mysqli_query($dbconnect, "INSERT INTO todos VALUES('', '$todo_judul', '$todo_tanggal', '$todo_status')");
		header("Location:index.php");
	}

	// HAPUS TODO
	if (isset($_GET['hapus'])) {
		$todo_id = $_GET['hapus'];

		mysqli_query($dbconnect,"DELETE FROM `todos` WHERE todo_id='$todo_id'");
		header("Location:index.php");
	}
?>