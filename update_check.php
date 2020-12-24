

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php
session_start();
include("connection.php");
if(isset($_POST['update'])) {
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$email=$_POST['email'];
	$name=$_SESSION['username'];


 $sql=" UPDATE info SET name = '$username',pass='$password',email='$email' WHERE name = '$name'";
	

if (mysqli_query($con,$sql) )
{
   		$_SESSION['username']=$username;

echo '<script type="text/javascript">
swal({
	title: "Updated",
	text :"Successfully",
	icon: "success"
})
.then(function(){
	window.location = "mainpage.php";
});
</script>';
		

}
else
{echo "login NOT Success";
}

}

?>
<body>

</body>
</html>

