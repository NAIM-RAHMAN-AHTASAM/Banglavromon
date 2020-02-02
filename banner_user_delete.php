<?php
require 'db.php';

 ?>
 <?php
$id=$_GET['id'];

$select="SELECT banner_img FROM tb_banners WHERE id=$id";
$select_result= mysqli_query($db_connection,$select);
$after_assoc= mysqli_fetch_assoc($select_result);
$delete_photo= "uploads/banners/".$after_assoc['banner_img'];
unlink($delete_photo);


$delete="DELETE FROM tb_banners WHERE id=$id";
$delete_result= mysqli_query($db_connection,$delete);
header('location:view_banner.php');
  ?>
