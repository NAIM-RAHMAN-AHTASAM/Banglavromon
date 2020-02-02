<?php
require 'dashboard_part/header.php';

require 'db.php';

 ?>




 <?php
$select="SELECT * FROM tb_registration WHERE status=0 ORDER by id DESC";
$select_result = mysqli_query($db_connection,$select);
?>


<?php if ($_SESSION['role']!=0) {?>
<section>
  <div class="container-floud">
    <div class="row">
      <div class="col-lg-12">
        <div class="position-absolute">
          <a href="logout.php" class="btn btn-danger" >logout</a>
        </div>
        <div class=" head text-center  text-white bg-dark py-2 ">
          <h3>All Users Information</h3>

        </div>
        <table class="table table-dark table-striped">
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>COUNTRY</th>
            <th>GENDER</th>
            <th>HOBBIES</th>
            <th>SUBJECT</th>
            <th>MESSAGE</th>
            <th>DATE</th>
            <th>PHOTO</th>
            <th>CREATEDAT</th>
            <th>ACTION</th>
          </tr>
          <?php
          foreach ($select_result as $users_info) {?>
          <tr>
            <td><?php echo $users_info['id']; ?></td>
            <td><?php echo $users_info['name']; ?></td>
            <td><?php echo $users_info['email']; ?></td>
            <td>********</td>
            <td><?php echo $users_info['country']; ?></td>
            <td><?php echo $users_info['gender']; ?></td>
            <td><?php echo $users_info['hobbies']; ?></td>
            <td><?php echo $users_info['subject']; ?></td>
            <td><?php echo $users_info['message']; ?></td>
            <td><?php echo $users_info['bdate']; ?></td>
            <td> <img src="uploads/imgs/<?php echo $users_info['photo']; ?>" alt="" width="50"=> </td>
            <td><?php echo $users_info['created_at']; ?></td>
            <td>
              <a href="single_view.php?id=<?php echo $users_info['id'];?>" class="btn btn-success">View</a>
              <?php if ($_SESSION['role']==1 || $_SESSION['role']==2 || $_SESSION['role']==3) { ?>
              <a href="Edit.php?id=<?php echo $users_info['id'];?>" class="btn btn-warning">Edit</a>
              <?php } ?>
              <?php if ($_SESSION['role']==1) { ?>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $users_info['id'];?>">
              DELETE
              </button>
            <?php } ?>

             </td>
          </tr>



          <!-- Modal -->
          <div class="modal fade" id="exampleModal<?php echo $users_info['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are u Sure??</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <a href="delete_user.php?id=<?php echo $users_info['id'];?> " class="btn btn-secondary" data-dismiss="modal">Not Yet</a>
                  <a href="delete_user.php?id=<?php echo $users_info['id'];?> " class="btn btn-primary">Parmanent Delete</a>
                  <a href="soft_delete.php?id=<?php echo $users_info['id'];?> " class="btn btn-primary">Soft Delete</a>
                </div>
              </div>
            </div>
          </div>



        <?php } ?>





        <?php if($select_result->num_rows==0) {?>
            <tr>
              <td class="text-center">No Data Available</td>
            </tr>
        <?php } ?>



        </table>
      </div>

    </div>
  </div>
</section>
<?php } ?>



 <?php
require 'dashboard_part/footer.php';
  ?>
