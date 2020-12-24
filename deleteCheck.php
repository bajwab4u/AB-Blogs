
<?php
session_start();
include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php 
if (isset($_POST['delete'])) {
 
  $name=$_SESSION['username'];
 $sql="DELETE FROM info where name='$name' ";
if (mysqli_query($con,$sql)) {

		unset($_SESSION['username']);
		session_destroy();
		echo '<script type="text/javascript">
swal({
	title: "Account",
	text :"Deleted",
	icon: "warning"
})
.then(function(){
	window.location = "login.php";
});
</script>';
}
else
{echo "login NOT Success";
header('location:test.php');
}

}



 ?>


</body>
</html>