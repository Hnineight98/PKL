<?php 

include '../core/koneksi.php';
$conn=mysqli_connect("localhost", "root", "", "myne");
$kode = $_POST["kode_barang"];
$data=mysqli_query($conn, "SELECT * FROM tbl_barang WHERE kode = '".$kode."'");

$size = mysqli_num_rows($data);
$dbdata = array();


  if($size === 0){
  	$dbdata['status'] = false;
  }else{
	//Fetch into associative array
	  $dbdata['status'] = true;
	  while ( $row = mysqli_fetch_array($data))  {
		$dbdata['data']=$row;
	  }
  }
  
  header('Content-Type: application/json');
  echo json_encode($dbdata);

?>