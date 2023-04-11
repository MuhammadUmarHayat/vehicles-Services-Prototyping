<?php include 'header.php'; ?>

 <div id="content">
          <header>
            <h2 class="page_title">Edit Employee Record</h2>
          </header>
          <div class="content-inner">
            <div class="form-wrapper">
		

<?php
	
	
		if(isset($_GET['edit_emp']))
		  {
				$edit_id = $_GET['edit_emp'];	
					
			$get_emp = "SELECT * FROM employees WHERE employee_no ='$edit_id' ";
			$run_emp = mysqli_query($con, $get_emp);
			if(!$run_emp)
			{
				echo "<script> alert('query not executed') </script>";
			}
			
			while($row_emp=mysqli_fetch_array($run_emp))
			{
				
				$emp_name = $row_emp['name'];
				$emp_email = $row_emp['email'];
				$emp_fee = $row_emp['fee'];
				$emp_spl = $row_emp['speciality'];
				$emp_contact = $row_emp['contact_no'];
				
			}
		  }
		?>
			
				<form action="" method="post" enctype="multipart/form-data" align="center">
					<table align="center" width="450" height="500" style="padding-top:20px; padding:10px 10px;">
					
						
						<tr>
							<td > Employee Name:</td>
							<td><input class="form-control"  type="text" name="e_name"value=<?php echo $emp_name; ?> required></td>
						</tr>
						<br>
						<tr>
							<td  > Email</td>
							<td> <input class="form-control" type="email" name="e_email" value=<?php echo $emp_email; ?> required></td>
						</tr>
						
						<tr>
							<td > Fee</td>
							<td> <input class="form-control" type="text" name="e_fee" value=<?php echo $emp_fee; ?> required></td>
						</tr>
						<tr>
							<td > Speciality </td>
							<td> <input class="form-control"  type="text" name="e_spl"value=<?php echo $emp_spl; ?> required>
								<!-- <select  class="form_item" name="e_spl" required>
									<option selected> <?php //echo $emp_spl; ?></option>									
									<option> Electrical</option>
									<option> Mechanical</option>
									<option> Avionics</option>
								</select> -->
							</td>
						</tr>
															
						<tr>
							<td  > Contact No </td>
							<td> <input class="form-control" type="text" name="e_contact" value=<?php echo $emp_contact; ?> required></td>
						</tr>
						
					 <tr> 
						<td colspan="2"> <input class="btn btn-success btn-lg" type="submit" name="update" value="Update"> </td>
					 </tr>
					
					</table>
						
					</form>
	
		</div>
	</div>
</div>

		
	
				
					
					
<?php 
		if(isset($_POST['update']))
		{
			
			
			$e_name = $_POST['e_name'];
			$e_email = $_POST['e_email'];
			$e_fee = $_POST['e_fee'];
			$e_spl = $_POST['e_spl'];
			$e_contact = $_POST['e_contact'];
			
				
			
					$insert_e = "UPDATE employees SET name = '$e_name', email='$e_email', 
					fee = '$e_fee', speciality = '$e_spl', 
					contact_no = '$e_contact' WHERE employee_no = '$edit_id'";					;
					
					$run_e = mysqli_query($con, $insert_e);
					
					
					
					if($run_e)
					{
						
						echo "<script>window.alert('Employee information has successfully been updated')</script>)";
						echo "<script>window.open('view_employees.php','_self')</script>";
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						echo"<script>window.open('index.php', '_self')</script>";
					}
				
		}
?>
		