<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($con,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// Login Admin
	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../administrator/index.php");

	// Login User
	}else if($data['level']=="user"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../beranda.php");

	}	
}else{
	echo "<script>alert('Login gagal, cek kembali username dan password anda !');document.location='../index.php'</script>";
}

?>