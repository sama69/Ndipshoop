<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['id_mhs'];
 $nama=$_POST['nama'];
 $sertifikasi=$_POST['sertifikasi'];
 $q=mysqli_query($con,"INSERT INTO `peserta` (`id_mhs`,`nama`,`sertifikasi`) VALUES ('$id_mhs','$nama','$sertifikasi')");
 if($q)   
  echo "success";
 else
  echo "error";
 }
 ?>
