<?php include 'header.php'; ?>
        <div id="content">
          <header class="clearfix">
            <h2 class="page_title">All Services</h2>
            
          </header>
          <div class="content-inner">
         
            <div class="row">
            	<table class="table table-hover table-bordered">
                <thead>
                  <tr >
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Rate</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
  include("config/db.php");
  
  $get_pro = "select * from services";
  
  $run_pro = mysqli_query($con, $get_pro); 
  
  $i = 0;
  
  while ($row_pro=mysqli_fetch_array($run_pro)){
    
    $pro_id = $row_pro['id'];
    $pro_title = $row_pro['title'];
    $pro_image = $row_pro['image'];
    $pro_price = $row_pro['price'];
    $i++;
  
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $pro_title;?></td>
    <td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60"/></td>
    <td> Rs: <?php echo $pro_price;?> / Hour</td>
    <td><a class="btn btn-xs btn-warning"href="home.php?edit_pro=<?php echo $pro_id; ?>">Edit</a>
    <a  class="btn btn-xs btn-danger"href="delete_pro.php?delete_pro=<?php echo $pro_id;?>">Delete</a></td>
  
  </tr>
  <?php } ?>
                </tbody>
              </table>
            </div>
            <hr>
            <div class="row">
            	<div class="col-md-12">
            		<nav>
            			<ul class="pagination">
            				<li><a href="#">&laquo;</a></li>
            				<li><a href="#">1</a></li>
            				<li><a href="#">2</a></li>
            				<li><a href="#">3</a></li>
            				<li><a href="#">4</a></li>
            				<li><a href="#">5</a></li>
            				<li><a href="#">&raquo;</a></li>
            			</ul>
            		</nav>
            		
            	</div>
            </div>
          </div>
        </div>

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
    <script src="js/bootstrap.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>