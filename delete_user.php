<?php
require 'db.php';

 ?>
 <?php
$id=$_GET['id'];

$select="SELECT photo FROM tb_registration WHERE id=$id";
$select_result= mysqli_query($db_connection,$select);
$after_assoc= mysqli_fetch_assoc($select_result);
$delete_photo= "uploads/imgs/".$after_assoc['photo'];
unlink($delete_photo);


$delete="DELETE FROM tb_registration WHERE id=$id";
$delete_result= mysqli_query($db_connection,$delete);
header('location:users_info.php');
  ?>
