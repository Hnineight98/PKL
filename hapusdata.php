<?php
	
	$conn=mysqli_connect("localhost", "root", "", "aset1");

	if (isset($_POST['delete'])){
		$id=$_POST['id'];		
		mysqli_query($conn, "DELETE FROM tbl_aset WHERE id='$id'");
		header('location:tables-data.php');
		
		var_dump($id);
	}

?>