<?php
require 'session.php';
require 'header.php';
require 'db.php';

 ?>
 <?php
$id=$_GET['id'];
$select="SELECT * FROM tb_services WHERE id=$id";
$select_result=mysqli_query($db_connection,$select);
$after_assoc = mysqli_fetch_assoc($select_result);



  ?>


<section>
  <div class="container">

    <div class="row">
      <div class="col-lg-6 text-center m-auto py-3 bg-dark">
        <form action="update_service.php"  method="post" enctype="multipart/form-data">
        <div class="form-group text-white">
          <h1>Edit Service</h1>
          <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc['id']?>">
          <input type="text" class="form-control" name="service_title"
          value="<?php echo $after_assoc['service_title']?>">
        </div>

        <div class="form-group text-white">

          <input type="text" class="form-control" name="service_description"
          value="<?php echo $after_assoc['service_description']?>">

          <!-- <textarea class="form-control" name="service_title"   value=""></textarea> -->
        </div>

        <div class="form-group">
    <input type="file" name="service_img" class="form-control" onchange="document.getElementById('imgs').src = window.URL.createObjectURL(files[0])">
    <div class="">
      <img src="uploads/services/<?php echo $after_assoc['service_img']?>" alt="" id="imgs"width="100">
    </div>
      <div class="err text-danger py-2">

        </div>
        </div>

        <button type="submit" class="btn btn-success mb-3">UPDATE</button>

        <?php if(isset($_SESSION['service'])) {?>
        <div class="alert alert-success alert-dismissible fade show mt-8" role="alert">
  <strong><?php echo $_SESSION['service']; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>




          </div>
        </div>
      </form>

      </div>

    </div>

  </div>
</section>
<?php
require 'footer.php';

 ?>
