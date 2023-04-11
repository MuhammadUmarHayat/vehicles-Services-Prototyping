<?php 
	include("config/db.php"); 
	
	if(isset($_GET['delete_pro'])){
	
	$delete_id = $_GET['delete_pro'];
	
	$delete_pro = "delete from services where id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_pro); 
	
	if($run_delete){
	
	echo "<script>window.alert('A Service has been deleted!')</script>";
	echo "<script>window.open('products.php','_self')</script>";
	}
	
	}





?>