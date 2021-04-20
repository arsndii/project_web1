<?php
	require '../../koneksi/koneksi.php';
	
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	$isi = $_POST['isi'];
	mysqli_query($con,"UPDATE posting SET judul = '$judul', kategori = '$kategori', isi = '$isi' WHERE id = '$id'");
	
	header("location:../beranda.php");
?>

