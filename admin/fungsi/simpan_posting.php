<?php
 
require_once "../../koneksi/koneksi.php";

date_default_timezone_set("Asia/Singapore");
$tanggal = date("Y-m-d");

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];

$foto = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$ex = explode('.',$foto);
$nama_baru = 'foto_'.time().'.'.strtolower($ex[1]);
 
$daftar_extensi = ['jpg','png','jpeg'];
$extensi = strtolower(end($ex));
 
if (in_array($extensi,$daftar_extensi) === true) {
  $pindah = move_uploaded_file($tmp,'../../img/poster/'.$nama_baru);
  $query = $con->query("INSERT INTO `$db_name`.`posting` (`tanggal`,`judul`,`penulis`,`isi`,`kategori`,`poster`) VALUES ('$tanggal', '$judul' , '$penulis' , '$isi' , '$kategori' ,'$nama_baru')");
  header('location:../beranda.php');
}else{
  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='../form_posting.php';</script>";
}