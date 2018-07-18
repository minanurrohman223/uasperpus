<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kode_buku=$_POST['kode_buku'];
 $nama_buku=$_POST['nama_buku'];
 $q=mysqli_query($con,"INSERT INTO `buku` (`kode_buku`,`nama_buku`) VALUES ('$kode_buku','$nama_buku')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>