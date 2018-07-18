<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kode_buku=$_POST['kode_buku'];
 $nama_buku=$_POST['nama_buku'];
 $q=mysqli_query($con,"UPDATE `buku` SET `kode_buku`='$kode_buku',`nama_buku`='$nama_buku' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>