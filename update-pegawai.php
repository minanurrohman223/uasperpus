<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kode_pegawai=$_POST['kode_pegawai'];
 $nama_pegawai=$_POST['nama_pegawai'];
 $jabatan=$_POST['jabatan'];
 $q=mysqli_query($con,"UPDATE `pegawai` SET `kode_pegawai`='$kode_pegawai',`nama_pegawai`='$nama_pegawai',`jabatan`='$jabatan' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>