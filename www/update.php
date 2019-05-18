<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_mhs=$_POST['id_mhs'];
 $nama=$_POST['nama'];
$nim=$_POST['nim'];
 $progdi=$_POST['progdi'];
 $no_telp=$_POST['no_telp'];
  $email=$_POST['email'];
 $q=mysqli_query($con,"UPDATE `dt_mhs` SET `id_mhs`='$id_mhs',`nama`='$nama',`nim`='$nim',`progdi`='$progdi',`no_telp`='$no_telp',`email`='$email' where `id_mhs`='$id_mhs'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
