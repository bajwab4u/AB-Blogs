

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <
</head>
<?php
session_start();
include("connection.php");

if(isset($_POST['like'])) {

 $sql=" UPDATE info SET name =  WHERE ";
  

if (mysqli_query($con,$sql) )
{
      $_SESSION['username']=$username;
    header('location:mainpage.php');
    
    

}
else
{echo "login NOT Success";
}

}

?>
<body>

</body>
</html>

