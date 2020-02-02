<?php
session_start();
require 'db.php';


 ?>


<?php
$banner_title=$_POST['banner_title'];
$banner_description=$_POST['banner_description'];
$banner_btn=$_POST['banner_btn'];


    $uploaded_img = $_FILES['banner_img'];
    $after_explode = explode('.', $uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg','png', 'jpeg', 'gif', 'JPG');

if(in_array($extension, $allowed_formet)){
    if($uploaded_img['size'] <= 85000000){
  $insert ="INSERT INTO tb_banners(banner_title,banner_description,banner_btn) VALUES('$banner_title','$banner_description','$banner_btn')";
  $insert_resullt= mysqli_query($db_connection,$insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/banners/".$file_name;
    move_uploaded_file($uploaded_img['temp_name'],$new_location);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/banners/".$file_name;
    move_uploaded_file($uploaded_img['tmp_name'],$new_location);

    $update = "UPDATE tb_banners SET banner_img='$file_name' WHERE id=$last_id";
    $update_result = mysqli_query($db_connection,$update);

    $_SESSION['banner'] = 'Your Registration is Successfully Done!!';
    header('location:add_banner.php');



    }
    else{
        echo "size a somossha";
    }
}
else{
    echo "thik nai";
}



 ?>
