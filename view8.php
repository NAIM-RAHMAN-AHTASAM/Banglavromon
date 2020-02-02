<?php
session_start();
require 'db.php';


 ?>


<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$hobbies=$_POST['hobbies'];
$subject=$_POST['subject'];
$after_implode_hobbies= implode(',',$hobbies);
$after_implode_subject= implode(',',$subject);
$message=$_POST['message'];
$role=$_POST['role'];
$date=$_POST['date'];

$uper=preg_match('@[A-Z]@',$password);
$lower=preg_match('@[a-z]@',$password);
$number=preg_match('@[0-9]@',$password);
$special=preg_match('@[#,$,&]@',$password);

date_default_timezone_set('Asia/Dhaka');
 	$created_at=date('Y-M-D h:i:s');

  $SELECT="SELECT COUNT(*) as exist_email FROM tb_registration WHERE email='$email'";
  $SELECT_result=mysqli_query($db_connection,$SELECT);
  $after_assoc=mysqli_fetch_assoc($SELECT_result);









if (empty($name)) {
  $err_msg="Enter valid Name";
  header('location:class8.php?err_name='.$err_msg);

}
elseif (empty($email)) {
  $err_msg='Enter valid mail';
  header('location:class8.php?err_email='.$err_msg);
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $err_msg='Enter valid email please!!';
  header('location:class8.php?err_email='.$err_msg);
}
elseif (empty($password)) {
  $err_msg='Enter valid Password';
  header('location:class8.php?err_password='.$err_msg);
}
elseif (!$uper|| !$lower|| !$number|| !$special || strlen($password)<8){
  $err_msg='Enter valid 8 Digit';
  header('location:class8.php?err_password='.$err_msg);
}
elseif ($password != $rpassword) {
  $err_msg='Enter valid Re-password';
  header('location:class8.php?err_rpassword='.$err_msg);
}
elseif (empty($country)) {
  $err_msg='Chose Any Country';
  header('location:class8.php?err_country='.$err_msg);
}
elseif (empty($hobbies)) {
  $err_msg='Select Hobbies';
  header('location:class8.php?err_hobbies='.$err_msg);
}
elseif (empty($subject)) {
  $err_msg='Select Hobbies';
  header('location:class8.php?err_subject='.$err_msg);
}
elseif (empty($message)) {
  $err_msg='Write something';
  header('location:class8.php?err_message='.$err_msg);
}

elseif (str_word_count($message)>50) {
  $err_msg='Not More Then 10 Word';
  header('location:class8.php?err_message='.$err_msg);
}
elseif (empty($date)) {
  $err_msg='Enter Your Date Of Birth';
  header('location:class8.php?err_date='.$err_msg);
}
else{
    $uploaded_img = $_FILES['photo'];
    $after_explode = explode('.', $uploaded_img['name']);
    $extension = end($after_explode);
    $allowed_formet = array('jpg','png', 'jpeg', 'gif');

if(in_array($extension, $allowed_formet)){
    if($uploaded_img['size'] <= 8500000){



if ($after_assoc['exist_email']==1) {
$_SESSION['exist_email']='email already exist';
header('location:class8.php');

}
else {
  $insert ="INSERT INTO tb_registration(name,email,password,rpassword,country,gender,hobbies,subject,message,role,bdate,created_at) VALUES('$name','$email','$password','$rpassword','$country','$gender','$after_implode_hobbies','$after_implode_subject','$message','$role','$date','$created_at')";
  $insert_resullt= mysqli_query($db_connection,$insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/imgs/".$file_name;
    move_uploaded_file($uploaded_img['temp_name'],$new_location);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extension;
    $new_location = "uploads/imgs/".$file_name;
    move_uploaded_file($uploaded_img['tmp_name'],$new_location);

    $update = "UPDATE tb_registration SET photo='$file_name' WHERE id=$last_id";
    $update_result = mysqli_query($db_connection,$update);


    $success = "Your Registration is Successfully Done!!";
    header('location:class8.php?success='.$success);
}


    }
    else{
        echo "size a somossha";
    }
}
else{
    echo "thik nai";
}


}

 ?>
