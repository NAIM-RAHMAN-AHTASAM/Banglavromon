<?php
session_start();
require 'db.php';


 ?>


<?php
$service_title=$_POST['service_title'];
$service_description=htmlentities($_POST['service_description'],ENT_QUOTES);



    $uploaded_img = $_FILES['service_img'];
    $after_explode = explode('.', $uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg','png', 'jpeg', 'gif');

if(in_array($extension, $allowed_formet)){
    if($uploaded_img['size'] <= 8500000){
  $insert ="INSERT INTO tb_services(service_title,service_description) VALUES('$service_title','$service_description')";
  $insert_resullt= mysqli_query($db_connection,$insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/services/".$file_name;
    move_uploaded_file($uploaded_img['temp_name'],$new_location);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/services/".$file_name;
    move_uploaded_file($uploaded_img['tmp_name'],$new_location);

    $update = "UPDATE tb_services SET service_img='$file_name' WHERE id=$last_id";
    $update_result = mysqli_query($db_connection,$update);

    $_SESSION['service'] = 'Your Registration is Successfully Done!!';
    header('location:add_service.php');



    }
    else{
        echo "picture size not enouht";
    }
}
else{
    echo "thik nai";
}



 ?>
