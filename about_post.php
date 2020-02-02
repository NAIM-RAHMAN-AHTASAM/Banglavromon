<?php
session_start();
require 'db.php';


 ?>


<?php
$about_description=$_POST['about_description'];
$about_choose=$_POST['about_choose'];



    $uploaded_img = $_FILES['about_img'];
    $after_explode = explode('.', $uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg','png', 'jpeg', 'gif', 'JPG');

if(in_array($extension, $allowed_formet)){
    if($uploaded_img['size'] <= 85000000){
  $insert ="INSERT INTO tb_about(about_description,about_choose) VALUES('$about_description','$about_choose')";
  $insert_resullt= mysqli_query($db_connection,$insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/abouts/".$file_name;
    move_uploaded_file($uploaded_img['temp_name'],$new_location);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/abouts/".$file_name;
    move_uploaded_file($uploaded_img['tmp_name'],$new_location);

    $update = "UPDATE tb_about SET about_img='$file_name' WHERE id=$last_id";
    $update_result = mysqli_query($db_connection,$update);

    $_SESSION['about'] = 'Add Successfully Done!!';
    header('location:add_about.php');



    }
    else{
        echo "size a somossha";
    }
}
else{
    echo "thik nai";
}



 ?>
