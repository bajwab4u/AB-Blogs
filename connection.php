
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="connection.css">
</head>
<body>
<!--
<div class='box'>
          <div class='wave -one'></div>
          <div class='wave -two'></div>
          <div class='wave -three'></div>
      </div>

-->
<?php

$con =mysqli_connect('localhost','bajwa','pakistan11','blogs');
$db=mysqli_select_db($con,'blogs');
if($con){
	echo "";
}
else{
	echo "no connection";
}

?>
</body>
</html>
