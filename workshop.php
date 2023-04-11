<?php include 'header.php'; ?>

            
            <div class="row">
            	<div class="col-md-4 dashboard-left-cell">
            		<div class="admin-content-con">
            			<header>
            				<h5>Add Workshop</h5>
            			</header>
            			<form action="" method="post">
            				<div class="form-group">
            					<label>Add New Record</label>
            					<p>
            						<input type="text" name="category" class="form-control">
            					</p>
            					<P>
            						<button type="submit" name="add_cat" class="btn btn-primary btn-block">button</button>
            					</P>
            					
            				</div>
            			</form>
            		</div>
            	</div>
            	<div class="col-md-8 dashboard-right-cell">
            		<div class="admin-content-con">
            			<header>
            				<h5>Manage Record</h5>
            			</header>
            			<table class="table table-bordered table-hover ">
            				<thead>
            					<tr>
                        <th>Sr. No</th>
            						<th>Name</th>
            					
            						<th>Action</th>
            					</tr>
            				</thead>
            				<tbody>
                      <?php 
  include("config/db.php");
  
  $get_cat = "select * from workshop";
  
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
    
    
    <td><a class="btn btn-xs btn-warning" href="editworkshop.php?id=<?php echo $cat_id; ?>">Edit</a>
    <a  class="btn btn-xs btn-danger " href="deleteworkshop.php?id=<?php echo $cat_id;?>">Delete</a></td>
  
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
;
	$insert_cat = "INSERT INTO `workshop`( `title`) VALUES ('$new_cat')";

	$run_cat = mysqli_query($con, $insert_cat); 
	
	if($run_cat){
	
	$msg="New Record has been inserted!";
	
	}else{
    $fmsg='Failled to Add Record';
  }
	}

?>

        <div class="row">
          <footer id="admin-footer" class="cle">
            <div class="pull-left">
              <b>Copyright </b>&copy; 2023
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