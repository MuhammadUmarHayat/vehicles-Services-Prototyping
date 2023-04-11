
<?php include 'header.php'; ?>

        <div id="content">
          <header>
            <h2 class="page_title">Add New Service</h2>
          </header>
          <div class="content-inner">
            <div class="form-wrapper">
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="sr-only"> Title</label>
                  <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                  <label class="sr-only"> Category</label>
                  <select  class="form-control"  name="category" required>
                    <option>Select a Category</option>
          <?php 
    $get_cats = "select * from categories";
  
    $run_cats = mysqli_query($con, $get_cats);
  
    while ($row_cats=mysqli_fetch_array($run_cats)){
  
    $cat_id = $row_cats['id']; 
    $cat_title = $row_cats['title'];
  
    echo "<option value='$cat_id'>$cat_title</option>";
  
  
  }
          
          ?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="sr-only"> Image</label>
                  <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="sr-only"> Price</label>
     <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
              
             
                
                <div class="clearfix">
                  <input type="submit" name="insert_post" value="Insert Service Now" class="btn btn-lg btn-primary pull-right" />  </div>
              </form>
            </div>
          </div>
        </div>

<?php 

  if(isset($_POST['insert_post'])){
  
    //getting the text data from the fields
    $title = $_POST['title'];
    $cat= $_POST['category'];
    $price = $_POST['price'];
   
    
  
    //getting the image from the field
    $product_image = $_FILES['image']['name'];
    $product_image_tmp = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($product_image_tmp,"product_images/$product_image");
  
  $insert="insert into services (title, type, price, image) values ('$title', '$cat', '$price', '$product_image')";
     
     $insert_pro = mysqli_query($con, $insert);
     
     if($insert_pro){
     
     echo "<script>alert('Service Has been inserted!')</script>";
     echo "<script>window.open('new-product.php','_self')</script>";
     
     }else{
      echo("Error description: " . mysqli_error($con));
     }
  }








?>


        <div class="row">
          <footer id="admin-footer" class="cle">
            <div class="pull-left">
              <b>Copyright </b>&copy; 2020
            </div>
            <div class="pull-right">
              <b>Admin System</b>
            </div>
          </footer>
        </div>

        
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>
    <script src="vendor/summernote-master/dist/summernote.min.js"></script>
  
    <script type="text/javascript">
      $('.summernote').summernote({
        height:300
      })
    </script>

  </body>
</html>
