<?php
require 'dashboard_part/header.php';
require 'db.php';

 ?>




     <?php
    $select="SELECT * FROM tb_blog where status=0";
    $select_result = mysqli_query($db_connection,$select);
    ?>



    <section>
      <div class="container-floud">
        <div class="row">
          <div class="col-lg-12">
            <div class=" head text-center  text-white bg-dark py-2 ">
              <h3>Pending Blog </h3>

            </div>
            <table class="table table-dark table-striped">
              <tr>
                <th>ID</th>
                <th>BLOG TITLE</th>
                <th>BLOG DESCRIPTION</th>
                <th>STATUS</th>
                <th>ACTION</th>
              </tr>
              <?php
              foreach ($select_result as $blog_info) { ?>
              <tr>
                <td><?php echo $blog_info['id']; ?></td>
                <td><?php echo $blog_info['blog_title']; ?></td>
                <td><?php echo substr($blog_info['blog_description'],0,20).'....so more' ?></td>

                <td>
                  <button type="button" class="btn <?php if ($blog_info['status']==1) {
                    echo "btn btn-success";
                  }
                  else {
                    echo "btn btn-danger";
                  } ?>">
                    <?php if($blog_info['status']==1){
                      echo "active";
                    }
                    else { ?>
                      <a href="pending_active.php?user_id=<?php echo $blog_info['user_id'] ?>">deactive</a>
                  <?php  }?>
                  </button>
                </td>





                <td>
                  <a href="single_view_banner.php?id=<?php echo $blog_info['id'];?>" class="btn btn-success">View</a>
                  <?php if ($_SESSION['role']==1) { ?>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $blog_info['id'];?>">
                  DELETE
                  </button>
                <?php } ?>

                 </td>
              </tr>



              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?php echo $blog_info['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <a href="banner_user_delete.php?id=<?php echo $blog_info['id'];?> " class="btn btn-secondary" data-dismiss="modal">Not Yet</a>
                      <a href="banner_user_delete.php?id=<?php echo $blog_info['id'];?> " class="btn btn-primary">Parmanent Delete</a>
                      <a href="soft_delete.php?id=<?php echo $blog_info['id'];?> " class="btn btn-primary">Soft Delete</a>
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



 <?php
require 'dashboard_part/footer.php';
  ?>
