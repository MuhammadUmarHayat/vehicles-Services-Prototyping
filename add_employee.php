<?php include 'header.php'; ?>

 <div id="content">
          <header>
            <h2 class="page_title">Add New Employee Record</h2>
          </header>
          <div class="content-inner">
            <div class="form-wrapper">


				<form action="" method="post" enctype="multipart/form-data" align="center">
					<table align="center" width="450" height="500" style="padding-top:20px; padding:10px 10px;">
					
						
						<tr>
							<td > Employee No:</td>
							<td><input class="form-control"  type="text" name="employee_no" required></td>
						</tr>

						<tr>
							<td > Name:</td>
							<td><input class="form-control"  type="text" name="name" required></td>
						</tr>
						
						
						<tr>
							<td  > Email</td>
							<td> <input class="form-control" type="email" name="email" required></td>
						</tr>
						
															
						<tr>
							<td  > Contact No </td>
							<td> <input class="form-control" type="text" name="contact" required></td>
						</tr>

						<tr>
							<td  > Speciality </td>
							<td> <input class="form-control" type="text" name="speciality" required></td>
						</tr>
						<tr>
							<td > Cost:</td>
							<td> <input class="form-control" type="number" name="fee" required></td>
						</tr>
						
					 <tr> 
						<td colspan="4"> <input class="btn btn-success btn-lg" type="submit" name="register" value="Save"> </td>
					 </tr>
					
					</table>
						
					</form>
	
		</div>
	</div>
</div>

		
	
	
	</body>

</html>				
					
					
					
<?php 
		if(isset($_POST['register']))
		{
			
			$employee_no = $_POST['employee_no'];
			$emp_name = $_POST['name'];
			$emp_email = $_POST['email'];
			$emp_fee = $_POST['fee'];
			$emp_contact = $_POST['contact'];
			$emp_speciality = $_POST['speciality'];
			
				
							
					$insert_emp = "INSERT INTO employees(employee_no, name, email, fee, contact_no, speciality) 
												VALUES('$employee_no', '$emp_name','$emp_email','$emp_fee','$emp_contact','$emp_speciality' )";
					
					$run_emp = mysqli_query($con, $insert_emp);
					
					
					
					if($run_emp)
					{
						
						echo "<script>window.alert('Employee Added successfully') </script>)";
						echo "<script>window.open('index.php','_self')</script>";
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						echo"<script>window.open('index.php', '_self')</script>";
					}
				
		}
?>
		