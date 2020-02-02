<?php
require 'db.php';
$id=$_GET['id'];
$update = "UPDATE tb_registration SET status=1 WHERE id=$id";
$update_result=mysqli_query($db_connection,$update);
header('location:users_info.php');
 ?>
