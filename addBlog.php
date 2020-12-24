<?php
session_start();
include("connection.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php include('templates/header.php')?>
<br>
<br>
<br>
<br>
<br>

<header>


		
			<h1 class="justify-content-center">Write Your Own Blog!</h1>
		

	<div class="container centre-div shadow">

	
			<div class=" p-4 mt-4 " style="background:transparent; opacity: 80%">
				<form action="addBlogCheck.php" method="POST">
					
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" value="" class="form-control">
					</div>

					<div class="form-group">
						<label for="category">Select Category</label>
      					<select class="form-control shadow" name="category" >
        				<option value="Sports">Sports</option>
        				<option value="Politics">Politics</option>
        				<option value="Education">Education</option>
        				<option value="Technology">Technology</option>
      					</select>
					</div>
					

					<div class="form-group">
						<label>Body</label>
						<textarea class="form-control" rows="5" name="body" id="comment" value=""></textarea>
					</div>

					<input type="submit" name="add" value="ADD" style="border-radius: 30px" class="btn btn-secondary form-control mb-2" >	
				</form>
				</div>
	</div>


</header>
<br>
<?php include('templates/footer.php')?>


</html>