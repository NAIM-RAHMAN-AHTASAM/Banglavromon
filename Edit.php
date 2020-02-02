<?php
require 'session.php';
require'header.php';
require'db.php';

 ?>
 <?php
$id=$_GET['id'];
$select="SELECT * FROM tb_registration WHERE id=$id";
$select_result=mysqli_query($db_connection,$select);
$after_assoc = mysqli_fetch_assoc($select_result);
$before_edit_hobbies= $after_assoc['hobbies'];
$after_explode_hobbies = explode(',',$before_edit_hobbies);

$before_edit_subject=$after_assoc['subject'];
$after_explode_subject=explode(',',$before_edit_subject);



  ?>


<section>
  <div class="container">

    <div class="row">
      <div class="col-lg-6 text-center m-auto py-3 bg-dark">
        <form action="update.php"  method="post" enctype="multipart/form-data">
        <div class="form-group text-white">
          <h1>Edit Form </h1>
          <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc['id']?>">
          <input type="text" class="form-control" name="name" value="<?php echo $after_assoc['name']?>">
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_name'])) {
            echo $_GET['err_name'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="email" readonly
          value="<?php echo $after_assoc['email']?>">
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_email'])) {
            echo $_GET['err_email'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">

          <select class="form-control" name="country" >">
            <option value=""> Chose country</option>
            <option value="Bangladesh" <?php if($after_assoc['country']=='Bangladesh'){
              echo "selected";
            }
            else{
              echo "";
            }?>>Bangladesh</option>
            <option value="USA" <?php if($after_assoc['country']=='USA'){
              echo "selected";
            }
            else{
              echo "";
            }?>> USA</option>
            <option value="India"<?php if($after_assoc['country']=='India'){
              echo "selected";
            }
            else{
              echo "";
            }?>>India</option>
            <option value="Argentina"<?php if($after_assoc['country']=='Argentina'){
              echo "selected";
            }
            else{
              echo "";
            }?>>Argentina</option>
            <option value="Brazil" <?php if($after_assoc['country']=='Brazil'){
              echo "selected";
            }
            else{
              echo "";
            }?>>Brazil</option>
          </select>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_country'])) {
            echo $_GET['err_country'];
          }
           ?>
        </div>
        </div>




        <div class="form-group text-white">
          <input type="radio" id="gender" name="gender" value="Male" <?php if($after_assoc['gender']=='Male'){echo"checked";} ?>><label for="gender">male</label>
          <input type="radio" id="gender2" name="gender" value="Female" <?php if($after_assoc['gender']=='Female'){echo"checked";} ?>> <label for="gender2">female</label>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_gender'])) {
            echo $_GET['err_gender'];
          }
           ?>

        </div>
        </div>
        <div class="form-group text-white">
          <input type="checkbox" name="hobbies[]" value="cricket"<?php if(in_array('cricket',$after_explode_hobbies)){echo"checked";} else{echo "";} ?>> cricket

          <input type="checkbox" name="hobbies[]" value="football"<?php if(in_array('football',$after_explode_hobbies)){echo"checked";} else{echo "";} ?>> football

          <input type="checkbox" name="hobbies[]" value="hadudu"<?php if(in_array('hadudu',$after_explode_hobbies)){echo"checked";} else{echo "";} ?>> hadudu

          <input type="checkbox" name="hobbies[]" value="chese"<?php if(in_array('chese',$after_explode_hobbies)){echo"checked";} else{echo "";} ?>> chese
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_hobbies'])) {
            echo $_GET['err_hobbies'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">
      <select class="form-control" name="subject[]" multiple>
        <option value="">chose any Subject</option>
        <option value="Math"<?php if(in_array('Math',$after_explode_subject)){echo"selected";} else{echo "";} ?>>Math</option>
        <option value="ICT"<?php if(in_array('ICT',$after_explode_subject)){echo"selected";} else{echo "";} ?>>ICT</option>
        <option value="Physics"<?php if(in_array('Physics',$after_explode_subject)){echo"selected";} else{echo "";} ?>>Physics</option>
        <option value="Chemistry"<?php if(in_array('Chemistry',$after_explode_subject)){echo"selected";} else{echo "";} ?>>Chemistry</option>

      </select>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_subject'])) {
            echo $_GET['err_subject'];
          }
           ?>

        </div>
        </div>



        <div class="form-group">
    <textarea name="message" class="form-control"  ><?php echo $after_assoc['message'];?></textarea>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_message'])) {
            echo $_GET['err_message'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">
    <input type="date" name="date" class="form-control" value="<?php echo $after_assoc['bdate'];?>">
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_date'])) {
            echo $_GET['err_date'];
          }
           ?>

        </div>
        </div>

        <div class="form-group">
    <input type="file" name="photo" class="form-control ">
            <div class="text-white text-center ">
              <p>Present Photo</p>
              <img src="uploads/imgs/<?php echo $after_assoc['photo']?>" alt="" width="200" >
            </div>
        </div>





        <button type="submit" class="btn btn-success  form-control">Update</button>
        <div class=" <?=(!empty($_GET['success'])?'alert alert-success':' ')?> mt-3" role="alert">
          <?php
          if (!empty($_GET['success'])) {
            echo $_GET['success'];
          }


            ?>
</div>

        </div>
      </form>

      </div>

    </div>

  </div>
</section>
<?php
require'footer.php';

 ?>
