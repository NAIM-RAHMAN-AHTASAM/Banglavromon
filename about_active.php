
        <?php
        require 'db.php';
        $id=$_GET['id'];

        $select_about="SELECT * FROM tb_about WHERE id=$id";
        $select_about_result=mysqli_query($db_connection,$select_about);
        $after_assoc = mysqli_fetch_assoc($select_about_result);
        if ($after_assoc['status']==1) {
          $select_about2="UPDATE tb_about SET status = 0 WHERE id=$id";
          $select_about_result2=mysqli_query($db_connection,$select_about2);
          header('location:view_about.php');
        }
        else {
          $select_about3 ="UPDATE tb_about SET status = 1 WHERE id=$id";
          $select_about_result3 = mysqli_query($db_connection,$select_about3);
          header('location:view_about.php');
        }


          ?>
