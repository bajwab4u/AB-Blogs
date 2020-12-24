<?php
session_start();
include("connection.php");
if(isset($_POST['add'])) {
	$title=$_POST['title'];
	//echo "$title";
	$body=$_POST['body'];
	//echo $_SESSION['username'];
	$name=$_SESSION['username'];
	$category=$_POST['category'];

	
	$sql = "INSERT INTO userblog(name,title,body,category)  VALUES ('$name','$title','$body','$category')";
if (mysqli_query($con, $sql)) {
    header('location:mainpage.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
