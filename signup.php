<?php 
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title >SIGNUP PAGE</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link rel="stylesheet" type="text/css" href="wave.css">-->
	<link rel="stylesheet" type="text/css" href="shades.css">
	<?php include 'links.php' ?>


</head>
<body >



<header style=" background:transparent;background-image: url('yuu.png');background-repeat: no-repeat;background-size: 70% 110%;background-position: 40% 30%;">

	<div class="container centre-div ">
		

		<div class="heading text-center text-uppercase text-white mt-4 mb-2 ">
			SIGNUP PAGE
		</div>
 
 		<div class=" container row d-flex flex-row justify-content-center" >


			<div class=" admin-form mb-5 p-4 " style="border-radius:10px;background-color:#DCDCDC;opacity: 75%">
				

				<form action="signupcheck.php" method="POST">
				

					
					<div class="input-group form-group mt-4">
						     <label class="input-group">Full Name</label>
							<input type="text" name="user" value="" class="form-control border border-left-0 bg-white" style="border-radius: 5px"required>
						</div>
					
					<div class="form-group input-group">
						<label class="input-group">Valid Email</label>
						<input type="Email" name="email" value="" class="form-control border border-left-0" style="border-radius: 5px" required>

					</div>
						<div class="form-group input-group">
						<label class="input-group">Enter Password</label>
						<input type="Password" name="pass" value="" class="form-control border border-left-0" style="border-radius: 5px" required>

					</div>
					<input type="submit" value="SUBMIT" name="submit" style="border-radius: 30px" class="btn btn-outline-secondary form-control mb-2 ">
	
					<p  class="message mt-2">Already Registered?<a href="index.php">Sign In</a></p>

				</form>
			</div>
		</div>	
	</div>





</header>
</body>
<!--<?php include('templates/footer.php')?>-->
	
	<!--<div  class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>

-->
</html>