<?php
require 'dashboard_part/header.php';
require 'db.php';

 ?>




     <?php
    $select="SELECT * FROM tb_about";
    $select_result = mysqli_query($db_connection,$select);
    ?>


    <?php if ($_SESSION['role']!=0) { ?>
    <section>
      <div class="container-floud">
        <div class="row">
          <div class="col-lg-12">
            <div class=" head text-center  text-white bg-dark py-2 ">
              <h3>About Information</h3>

            </div>
            <table class="table table-dark table-striped">
              <tr>
                <th>ID</th>
                <th>ABOUT DESCRIPTION</th>
                <th>ABOUT CHOOSE</th>
                <th>ABOUT IMAGE</th>
                <th>STATUS</th>
                <th>ACTION</th>
              </tr>
              <?php
              foreach ($select_result as $about_info) { ?>
              <tr>
                <td><?php echo $about_info['id']; ?></td>
                <td><?php echo substr($about_info['about_description'],0,20).'....so more' ?></td>

                <td><?php echo $about_info['about_choose']; ?></td>

                <td> <img src="uploads/abouts/<?php echo $about_info['about_img']; ?>" alt="" width="150"></td>






                <td>

                        <a href="about_active.php?id=<?php echo $about_info['id'] ?>" class="<?=($about_info['status']==1)?'btn btn-success':'btn btn-danger'?>"><?=($about_info['status']==1)?'Active':'Deactive'  ?></a>



                </td>









                <td>
                  <a href="single_view_banner.php?id=<?php echo $about_info['id'];?>" class="btn btn-success">View</a>

                  <?php if ($_SESSION['role']==1 || $_SESSION['role']==2 || $_SESSION['role']==3) { ?>
                  <a href="banner_edit.php?id=<?php echo $about_info['id'];?>" class="btn btn-warning">Edit</a>
                  <?php } ?>
                  <?php if ($_SESSION['role']==1) { ?>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $about_info['id'];?>">
                  DELETE
                  </button>
                <?php } ?>

                 </td>
              </tr>



              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?php echo $about_info['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <a href="banner_user_delete.php?id=<?php echo $about_info['id'];?> " class="btn btn-secondary" data-dismiss="modal">Not Yet</a>
                      <a href="banner_user_delete.php?id=<?php echo $about_info['id'];?> " class="btn btn-primary">Parmanent Delete</a>
                      <a href="soft_delete_service.php?id=<?php echo $about_info['id'];?> " class="btn btn-primary">Soft Delete</a>
                    </div>
                  </div>
                </div>
              </div>



            <?php } ?>





            <?php if($select_result->num_rows==0) { ?>
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
