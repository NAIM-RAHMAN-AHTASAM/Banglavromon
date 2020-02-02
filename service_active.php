
        <?php
        require 'db.php';
        $id=$_GET['id'];

        $select_service="SELECT * FROM tb_services WHERE id=$id";
        $select_service_result=mysqli_query($db_connection,$select_service);
        $after_assoc = mysqli_fetch_assoc($select_service_result);
        if ($after_assoc['status']==1) {
          $update_service2="UPDATE tb_services SET status = 0 WHERE id=$id";
          $update_service_result2=mysqli_query($db_connection,$update_service2);
          header('location:view_service.php');
        }
        else {
          $update_service3 ="UPDATE tb_services SET status = 1 WHERE id=$id";
          $update_service_result3 = mysqli_query($db_connection,$update_service3);
          header('location:view_service.php');
        }


          ?>
