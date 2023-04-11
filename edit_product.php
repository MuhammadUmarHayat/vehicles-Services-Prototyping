  
<?php 

include("config/db.php");

if(isset($_GET['edit_pro'])){

  $get_id = $_GET['edit_pro']; 
  
  $get_pro = "select * from services where id='$get_id'";
  
  $run_pro = mysqli_query($con, $get_pro); 
  
  $i = 0;
  
  $row_pro=mysqli_fetch_array($run_pro);
    
    $pro_id = $row_pro['id'];
    $pro_title = $row_pro['title'];
 
    $pro_price = $row_pro['price'];
  
    $pro_cat = $row_pro['type'];
    //$pro_brand = $row_pro['product_brand'];
    
    $get_cat = "select * from categories where id='$pro_cat'";
    
    $run_cat=mysqli_query($con, $get_cat); 
    
    $row_cat=mysqli_fetch_array($run_cat); 
    
    $category_title = $row_cat['title'];
    
   
}
?>

  <div id="content">
          <header>
            <h2 class="page_title">Update New Service</h2>
          </header>
          <div class="content-inner">
            <div class="form-wrapper">
              <form action="edit_product.php" method="post" enctype="multipart/form-data">
                    
<div class="form-group">
<label>Service ID</label>
<input type="text" class="form-control" name="pro_id" value="<?php echo $pro_id;?>">
</div>

                <div class="form-group">
                  <label>Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $pro_title;?>">
                </div>


                  <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" value="<?php echo $pro_price;?>">
                </div>



                <div class="form-group">
                  <label>Category</label>
                  <select  class="form-control"  name="category">
                    <option><?php echo $category_title;?></option>
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
          
                
                <div class="clearfix">
   <input type="submit" name="update_product" value="Update" class="btn btn-lg btn-primary pull-right" />  </div>
              </form>
            </div>
          </div>
        </div>


        <?php 

  if(isset($_POST['update_product'])){
  
    //getting the text data from the fields
    
    $update_id = $_POST['pro_id'];
    
    $title = $_POST['title'];
    $cat= $_POST['category'];
   
    $price = $_POST['price'];
    
  
$update = "update services set type='$cat', title='$title', price='$price' where id='$update_id'";
     
     $run = mysqli_query($con, $update);
     
     if($run){
     
     echo "<script>alert('Service has been updated!')</script>";
     
     echo "<script>window.open('products.php','_self')</script>";
     
     }
  }








?>

