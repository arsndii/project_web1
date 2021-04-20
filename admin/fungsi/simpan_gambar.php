<?php
 
require_once "../../koneksi/koneksi.php";

date_default_timezone_set("Asia/Singapore");
$tanggal = date("Y-m-d");

$keterangan = $_POST['keterangan'];
$foto = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$ex = explode('.',$foto);
$nama_baru = 'foto_'.time().'.'.strtolower($ex[1]);
 
$daftar_extensi = ['jpg','png','jpeg'];
$extensi = strtolower(end($ex));
 
if (in_array($extensi,$daftar_extensi) === true) {
  $pindah = move_uploaded_file($tmp,'../../img/posting/'.$nama_baru);
  $query = $con->query("INSERT INTO `$db_name`.`gambar` (`tanggal` ,`keterangan`, `nama_file`) VALUES ('$tanggal', '$keterangan' ,'$nama_baru')");
  header('location:../gambar.php');
}else{
  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='../form_gambar.php';</script>";
}