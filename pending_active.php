<?php
require 'db.php';
$id=$_GET['user_id'];


$update_blog2="UPDATE tb_blog SET status=1 WHERE user_id=$id";
$update_result2=mysqli_query($db_connection,$update_blog2);

header('location:Pending_blog.php');
 ?>
