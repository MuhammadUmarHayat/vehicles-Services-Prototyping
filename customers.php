
<?php include 'header.php'; ?>

        <div id="content">
          <header class="clearfix">
            <h2 class="page_title">Users List</h2>
            
          </header>
          <div class="content-inner">
            
            <div class="row">
            	<table class="table table-hover table-bordered">
               <thead>
          <tr>
            <th>User ID</th>
            <th> Name</th>
            <th> Email</th>
            <th>Password</th>
            <th> Mobile</th>
            <th>City</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php   
          $sql = "SELECT * FROM users";
          $res = mysqli_query($con, $sql); 
          while ($r = mysqli_fetch_assoc($res)) {
        ?>
          <tr>
            <th scope="row"><?php echo $r['id']; ?></th>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['password']; ?></td>
            <td><?php echo $r['mobile']; ?></td>
          
            <td><?php echo $r['city']; ?></td>
            
  <td><a href="edit_users.php?edit=<?php echo $r['id']; ?>" class="btn btn-primary">Edit</a> 
          <a href="delete_users.php?delete=<?php echo $r['id']; ?>" class="btn btn-danger">Delete</a> </td>


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
<div class="container">
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
    </div>

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>