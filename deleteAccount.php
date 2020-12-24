<?php
session_start();
//connect to database
include("connection.php");
$user_name=$_SESSION['username'];
$sql="SELECT name,email,pass FROM info WHERE name='$user_name'";
//make query and get result
$result=mysqli_query($con,$sql);
//fetch resulting rows as an Associative Array
$infos=mysqli_fetch_all($result,MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);
//close connection
mysqli_close($con);

//print_r($info);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<style type="text/css">
	

	.glow {
  background-color: green;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: grey; box-shadow: 0 0 3px red; }
  50% { background-color: grey; box-shadow: 0 0 40px red; }
  100% { background-color: grey; box-shadow: 0 0 3px red; }
}
</style>


<?php include('templates/header.php')?>
<body>
	
<br>
<br>
<br>
<br>
<br>

<header>
<h1 class="text-center p-2 ">Personal Information</h1>
<hr>
<div class="container centre-div bg-transparent " style="background:transparent;background-image: url('w.png');background-repeat: no-repeat;background-size: 70% 110%;background-position: 40% 30%;margin-top: 60px">
<div class="" style="background:transparent; opacity: 80%">
				
<?php foreach ($infos as $info){ ?>
<div class=' container shadow border border-white bg-dark' style="border-radius: 30px">

<h1 class=" p-3  text-white text-center" style="">Name : <small class="" style="color: grey "><?php echo htmlspecialchars($info['name']); ?></small></h1>

</div>

<div class='container shadow border border-white bg-dark' style="border-radius: 30px" >
	<h1 class=" p-3 text-white text-center" style="">Email : <small class=""style="color: grey "><?php echo htmlspecialchars($info['email']); ?></small></h1>
</div>

<div class='container shadow border border-white  bg-dark' style="border-radius: 30px">
	<h1 class=" p-3 text-white text-center"style="">Password : <small class="" style="color: grey "><?php echo htmlspecialchars($info['pass']); ?></small></h1>


</div>

<form  action="deleteCheck.php" method="POST" class=" form-control text-center mt-4 border-0" style="">

 <button type="submit" name="delete" value="Delete" style="border-radius: 40px" class="text-center glow mb-2 btn btn-light shadow border border-dark p-3" >Delete</button>

</form>


 <?php } ?>


				</div>
	</div>



</header>
<br>
<?php include('templates/footer.php')?>


</html>