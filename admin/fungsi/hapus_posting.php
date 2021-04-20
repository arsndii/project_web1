<?php
//panggil file koneksi.php yang sudah anda buat
include "../../koneksi/koneksi.php";

$id=$_GET['id'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($con, "DELETE FROM posting where id='$id'");
if($hapus){ //jika berhasil
    echo "<script>alert('Berhasil Di Hapus');document.location='../beranda.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Gagal Di Hapus, Coba ulangi lagi');document.location='../beranda.php'</script>";
}
?>