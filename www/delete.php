<?php
 include "db.php";
 if(isset($_GET['id']))
 {
 $id=$_GET['id'];
 $q=mysqli_query($con,"delete from `dt_mhs` where `id_mhs`='$id_mhs'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
