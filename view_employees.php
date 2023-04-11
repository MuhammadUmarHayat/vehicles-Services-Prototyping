<?php include 'header.php'; ?>

 <div id="content">
          <header>
            <h2 class="page_title">Employees List</h2>
          </header>
          <div class="content-inner">
            <div class="form-wrapper">



<table class="table table-bordered">

   <tr bgcolor="darkblue" style="color:white;">
	<th> Serial No </th>
	<th> Employee No</th>
	<th> Name</th>
	<th> Email</th>
	<th> Contact </th>
	<th> Speciality </th>
	<th> Fee </th>
	
	<th colspan = "2" > Manage Employees </th>
	

	
	
  </tr>
	<?php 
		
		$get_emp = "SELECT * FROM employees";
		
		$run_emp = mysqli_query($con, $get_emp);
		$i = 0;
		
		while($row_emp = mysqli_fetch_array($run_emp))
		{
			
			$emp_no = $row_emp ['employee_no'];
			$emp_name = $row_emp ['name'];
			$emp_email = $row_emp ['email'];
			$emp_contact = $row_emp ['contact_no'];
			$emp_spec = $row_emp ['speciality'];
			$emp_fee = $row_emp ['fee'];
						
			
			
			$i++	
	?>
  <tr align="center">
	<td><?php echo $i;?> </td>
	<td><?php echo $emp_no;?> </td>
	<td><?php echo $emp_name?></td>	
	<td><?php echo $emp_email ?></td>	
	<td><?php echo $emp_contact ?></td>	
	<td><?php echo $emp_spec ?></td>
	<td><?php echo $emp_fee ?></td>	
	<td><a href="edit_employee.php?edit_emp=<?php echo $emp_no; ?>" class="btn btn-warning"> Edit </a></td>	
	<td><a href="delete_employee.php?delete_emp=<?php echo $emp_no; ?>" onClick = "return confirm('Employee Record will permanently be deleted form database');" class="btn btn-danger"> Remove </a></td>	
	
	
	
  </tr>
  <?php } ?>
</table>

</div>
</div>
</div>
