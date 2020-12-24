
<html>
<head>
	<title>SIGNUP PAGE</title>

	<link rel="stylesheet" type="text/css" href="style.css">


	
	<?php include 'links.php'?>


</head>
<?php include('templates/header.php');
session_start();

?>
<br>
<br>
<br>
<br>
<header>
<h1 class="text-center p-4" >Update Information</h1>
<hr>
	<div class="container centre-div ">


		<div class="heading text-center text-uppercase text-white  mb-5 ">
			
		</div>
	

		<div class="container row d-flex flex-row justify-content-center " style="background:transparent;background-image: url('w.png');background-repeat: no-repeat;background-size: 70% 110%;background-position: 40% 30%;margin-top: 60px">
			<div class=" admin-form mb-5 p-4 " style="border-radius:10px;background-color:#DCDCDC;opacity: 75%">
				

				<form action="update_check.php" method="POST">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="user" value="" placeholder= "" class="form-control" required>

						
					</div>
					
					<div class="form-group">
						<label>Valid Email</label>
						<input type="email" name="email" value="" placeholder="" class="form-control" required>

					</div>
					

					<div class="form-group">
						<label>Enter Password</label>
						<input type="Password" name="pass" value=""  placeholder="" class="form-control" required>

					</div >
					<input type="submit" name="update" value="update" style="border-radius: 40px" class="mt-4  btn btn-secondary form-control heading mb-2" >	

				</form>
				
			</div>
		</div>
		
	</div>


</header>

<?php include('templates/footer.php')?>

</html>