<?php 
	 include('config/db.php');

	if (isset($_GET['delete_emp']))
	{
		$delete_id = $_GET['delete_emp'];
		
		$delete_emp = "DELETE FROM employees WHERE employee_no = '$delete_id'";
		$run_delete = mysqli_query($con, $delete_emp);
		
		if($run_delete){
			echo "<script>alert('Employee Information has Successfully been Deleted ') </script>";
			echo "<script>window.open('view_employees.php','_self') </script>";
		}
		else
		{
			echo "<script>alert('Ooops! Something went wrong') </script>";
			echo "<script>window.open('dashboard.php?view_emp','_self') </script>";
		}
	
	}


?>