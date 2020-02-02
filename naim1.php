<?php
require 'db.php';
$id=$_GET['user_id'];

$update_blog="UPDATE tb_blog SET status=1 WHERE user_id=$id";
$update_result=mysqli_query($db_connection,$update_blog);

header('location:Pending_blog.php');
 ?>
