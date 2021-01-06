
<?php
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$conn=mysqli_connect("localhost", "root", "", "myne");
	if($conn){
		$user_db=mysqli_query($conn, "SELECT username,password FROM admin WHERE username='$username'");
		$baris=mysqli_fetch_row($user_db);
		list($user,$pas)=$baris;
		if($user==$username and $pas==$pass){
			session_start();
			$_SESSION['pengguna']=$username;
			echo $_SESSION['pengguna'];
			header('location:home.php');
		}
		else if ($user==$username and $pas!=$pass){
			$message = "Password salah";
			echo "<script type='text/javascript'>alert('$message');history.go(-1);;</script>";
			// header('location:index.php');
		}
		else {
			$message = "Username salah";
			echo "<script type='text/javascript'>alert('$message');history.go(-1);;</script>";
			// header('location:index.php');
		}
		mysqli_close($conn);
	}
	else{
		echo"server gagal";
	}
?>