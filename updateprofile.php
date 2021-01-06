
<?php
	$conn=mysqli_connect("localhost", "root", "", "myne");
	// if (isset($_POST['submit'])){
		
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$password=$_POST['password'];

		echo $nama;
		echo $username;
		echo $password;

		$query=mysqli_query($conn, "UPDATE admin SET nama='$nama', username='$username', password='$password' WHERE username='$username'");
		var_dump($query);
		header('location:profile.php');
	// }
	
?>
