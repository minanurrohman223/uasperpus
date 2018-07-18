<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kode_pegawai=$_POST['kode_pegawai'];
 $nama_pegawai=$_POST['nama_pegawai'];
 $jabatan=$_POST['jabatan'];
 $q=mysqli_query($con,"INSERT INTO `pegawai` (`kode_pegawai`,`nama_pegawai`,`jabatan`) VALUES ('$kode_pegawai','$nama_pegawai','$jabatan')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>