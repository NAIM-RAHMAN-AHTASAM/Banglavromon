<?php
require 'db.php';
$id=$_GET['id'];
$update_banner="UPDATE tb_banners SET status=0";
$update_banner_result=mysqli_query($db_connection,$update_banner);

$update_banner2="UPDATE tb_banners SET status=1 WHERE id=$id";
$update_banner_result2=mysqli_query($db_connection,$update_banner2);



header('location:view_banner.php');
 ?>
