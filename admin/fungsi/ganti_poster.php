<?php
 
require_once "../../koneksi/koneksi.php";

date_default_timezone_set("Asia/Singapore");
$tanggal = date("Y-m-d");

$id = $_POST['id'];
$foto = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$ex = explode('.',$foto);
$nama_baru = 'foto_'.time().'.'.strtolower($ex[1]);
 
$daftar_extensi = ['jpg','png','jpeg'];
$extensi = strtolower(end($ex));
 
if (in_array($extensi,$daftar_extensi) === true) {
  $pindah = move_uploaded_file($tmp,'../../img/poster/'.$nama_baru);
  $query = $con->query("UPDATE posting SET poster = '$nama_baru' WHERE id = '$id'");
  header('location:../beranda.php');
}else{
  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='../form_ganti_poster.php';</script>";
}