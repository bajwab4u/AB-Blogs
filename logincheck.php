
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<?php 
session_start();

include("connection.php");


if (isset($_POST['submit'])) {
	$username=$_POST['user'];
	$password=$_POST['pass'];

	$sql="SELECT * FROM info where name = '$username' AND pass = '$password' ";

	$query=mysqli_query($con,$sql);
	
		if(mysqli_num_rows($query)==1){ 

			$_SESSION['username']=$username;
		
			
			header('location:mainpage.php');


}
		
		else{

            echo "login  NOT Success";
			header('location:index.php');

	}
	
}


 ?>
 </html>