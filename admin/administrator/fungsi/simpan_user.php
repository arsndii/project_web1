<?php
	require '../../../koneksi/koneksi.php';
	
	$sql = "INSERT INTO `$db_name`.`user` (`username`,`password`,`level`) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['level']."')";
		
	$result = mysqli_query($con, $sql);
	
	if($result){
		echo "<script>alert('User Berhasil Di Simpan');document.location='../index.php'</script>";
	}
	else
		echo "Simpan Data Gagal !";
?>

