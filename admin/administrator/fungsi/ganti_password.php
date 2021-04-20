<?php
	require '../../../koneksi/koneksi.php';
	
	$id = '1';
	$password = $_POST['password'];
	mysqli_query($con,"UPDATE user SET password = '$password' WHERE id = '$id'");
	
	header("location:../index.php");
?>

