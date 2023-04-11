<?php

  require_once 'header.php';
  /*if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
    header('location: login.php');
  }*/

  if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];
  }else{
    header('location: category.php');
  }

  if(isset($_POST) & !empty($_POST)){
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['categoryname']);
    $sql = "UPDATE categories SET title = '$name' WHERE id=$id";
    $res = mysqli_query($con, $sql);
    if($res){
      $smsg = "Category Updated";
    }else{
      $fmsg = "Failed Update Category";
    }
  }
?>

            
            <div class="row">
            	<div class="col-md-4 dashboard-left-cell">
            		<div class="admin-content-con">
            			<header>
            				<h5>Create Category</h5>
            			</header>
                  <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
            			<form action="" method="post">
            				<div class="form-group">
            					<label>Add Category</label>
            					<?php  
          $sql = "SELECT * FROM categories WHERE id=$id";
          $res = mysqli_query($con, $sql); 
          $r = mysqli_fetch_assoc($res); 
        ?>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
          <input type="text" class="form-control" name="categoryname" id="Categoryname" placeholder="Category Name" value="<?php echo $r['title'];  ?>">
            					
            				</div>
                    <button type="submit" class="btn btn-info">Submit</button>
            			</form>
            		</div>
            	</div>
            	<div class="col-md-8 dashboard-right-cell">
            		<div class="admin-content-con">
            			<header>
            				<h5>Categories</h5>
            			</header>
            			<table class="table table-striped table-hover">
            				<thead>
            					<tr>
            						<th>Name</th>
            					
            						<th>Action</th>
            					</tr>
            				</thead>
            				<tbody>
                      <?php 
  include("config/db.php");
  
  $get_cat = "select * from categories";
  
  $run_cat = mysqli_query($con, $get_cat); 
  
  $i = 0;
  
  while ($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['id'];
    $cat_title = $row_cat['title'];
 
    $i++;
  
  ?>
  <tr align="center"> 
    <td><?php echo $i;?></td>
    <td><?php echo $cat_title;?></td>
   
  
    <td><a class="btn btn-xs btn-warning" href="index.php?edit_cat=<?php echo $cat_id; ?>">Edit</a>
    <a  class="btn btn-xs btn-danger disabled" href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">Delete</a></td>
  
  </tr>
  <?php } ?>
            				</tbody>
            			</table>
            		</div>
            		
            	</div>
            	
            </div>
           <?php 
include("config/db.php"); 

	if(isset($_POST['add_cat'])){
	
	$new_cat = $_POST['category'];
	$new_status="In_Use";
	$insert_cat = "INSERT INTO `categories`( `title`,) VALUES ('$new_cat'";

	$run_cat = mysqli_query($con, $insert_cat); 
	
	if($run_cat){
	
	$msg="New Category has been inserted!";
	
	}else{
    $fmsg='Failled to Add Category';
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

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>