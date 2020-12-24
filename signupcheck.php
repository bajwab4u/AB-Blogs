<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<?php
session_start();
include("connection.php");
if(isset($_POST['submit'])) {
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$email=$_POST['email'];

$sql = "INSERT INTO info (name, pass, email)VALUES ('$username','$password','$email')";


if (mysqli_query($con,$sql)) {

		$_SESSION['username']=$username;

		echo '<script type="text/javascript">
swal({
	title: "REGISTERED",
	text :"Successfully",
	button: "LOGIN",
	icon: "success"
})
.then(function(){
	window.location = "index.php";
});
</script>';
}
else
{echo "login NOT Success";
header('location:test.php');
}

}

?>
</html>