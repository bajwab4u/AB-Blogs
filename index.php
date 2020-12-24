<?php 
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link rel="stylesheet" type="text/css" href="wave.css">-->
	<link rel="stylesheet" type="text/css" href="shades.css">

	<?php include 'links.php'  ?>


</head>
<body >



<header  style="background:transparent;background-image: url('yuu.png');background-repeat: no-repeat;background-size: 70% 120%;background-position: 40% 30%;margin-top: 60px">

	<div class="container centre-div " >
		

		<div class="heading text-center text-uppercase text-white mt-4 mb-2 ">
			LOGIN PAGE
		</div>
 
 		<div class=" container row d-flex flex-row justify-content-center" >


			<div class=" admin-form mb-5 p-4 " style="border-radius:10px;background-color:#DCDCDC;opacity: 75%">
				<form action="logincheck.php" method="POST">
					
					
					<div class="input-group form-group mt-4">
						     <label class="input-group">User Name</label>
							<span class="input-group-text border border-right-0 bg-white"><i class="glyphicon glyphicon-user"></i></span>
							<span class="input-group-append"></span>
							<input type="text" name="user" value="" class="form-control border border-left-0 bg-white" placeholder="Enter Your Name" style="border-radius: 5px"required>
						</div>
					
							
					<div class="form-group input-group">
						<label class="input-group">Password</label>
						<span class="input-group-text border border-right-0 bg-white"><i class="glyphicon glyphicon-lock"></i></span>
						<span class="input-group-prepend"></span>
						<input  type="Password" name="pass" value="" class="form-control border border-left-0" placeholder="Enter Your Password " style="border-radius: 5px" required>

					</div>
					
					
					<input type="submit" value="LOGIN" name="submit" style="border-radius: 30px" class="btn btn-outline-secondary form-control mb-2">

					<p  class="message mt-4">Not registered?<a href="signup.php">Create an account</a></p>

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