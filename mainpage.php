<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>

  <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="mainpage.css">
</head>
<?php include('templates/header.php')?>
<style type="text/css">
  
body{


background-color:black;
color: white
;


}



</style>
<br>
<br>
<br>
<br>


<nav class="navbar navbar-dark  shadow bg-dark mt-2 "> 
  <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNav1"
    aria-controls="navbarNav"  aria-expanded="false" aria-label="Toggle navigation"><span class="dark-text">
      <i class="navbar-toggler-icon"></i></span><span></span></button>

  <div class="collapse navbar-collapse" id="navbarNav1">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item ">
        <a class="nav-link" href="addBlog.php">Write a Blog</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="userProfile.php">User Profile</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="deleteAccount.php">Delete Account</a>
      </li>





    </ul>
    </div>
</nav>


<div>
<nav class="navbar navbar-expand-xl bg-light navbar-light  shadow  justify-content-start ">
  <span class="dark-text" style="color: black">Sort By </span>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  </button>
<form action="mainpage.php" method="POST">
  <div class="collapse navbar-collapse" id="navbarNav">


<ul class="navbar-nav">
  <li class="nav-item ml-2">
    <input type="submit" name="latest" value="Latest" style="border-radius: 30px" class="btn btn-sm btn-outline-secondary" >
  </li>
</ul> 

<ul class="navbar-nav">
  <li class="nav-item ml-2">
    <input type="submit" name="oldest" value="Oldest" style="border-radius: 30px" class="btn btn-sm btn-outline-secondary" >
  </li>
</ul> 

<ul class="navbar-nav">
  <li class="nav-item ml-2">
    <input type="submit" name="popular" value="Popular" style="border-radius: 30px" class="btn btn-sm btn-outline-secondary" >
  </li>
</ul> 
<ul class="navbar-nav ">
<li class="nav-item ">

</li>
</ul>
</form>
</div>
</nav>
</div>



      <div class="alert alert-secondary alert-dismissible fade show" role="alert">
  <strong>Welcome! <?php echo $_SESSION['username']; ?></strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>





  <?php
//connect to database
include("connection.php");
$user_name=$_SESSION['username'];


if (isset($_POST['like'])) {

$id=$_POST['like'];
$sql=" UPDATE userblog SET likes=likes+1 WHERE id= '$id'";
$query=mysqli_query($con,$sql);


}


if (isset($_POST['remove'])) {

$id=$_POST['remove'];
$sql="DELETE FROM userblog where id = '$id' ";
$query=mysqli_query($con,$sql);


}


if(isset($_POST['oldest'])){

$sql="SELECT id,name,title,body,category,likes,time FROM userblog  WHERE name='$user_name' ORDER BY time ASC";

}


elseif(isset($_POST['popular'])){

$sql="SELECT id,name,title,body,category,likes,time FROM userblog  WHERE name='$user_name' ORDER BY likes DESC ";

}



else{

$sql="SELECT id,name,title,body,category,likes,time FROM userblog  WHERE name='$user_name' ORDER BY time DESC";

}

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
</head>

<body>
<br>


<header>


   
<?php foreach ($infos as $info){ ?>

  <div class="container centre-div shadow p-4 shadow-lg " style=" background-color:black;opacity: 95% ;border:1px solid white;border-radius: 30px" >  
<div class=" p-4 mt-4 bg-transparent" style="background:transparent;background-image: url('ee.png');background-repeat: no-repeat;background-size: 80% 100%;background-position: 40% 30%;margin-top: 60px" >




<form action="mainpage.php" method="POST">

  <button type="submit" name="remove" value="<?php echo ($info['id']);?>" style="border-radius: 30px" class="btn btn-lg btn-outline-secondary" ><i class="glyphicon glyphicon-remove"></i></button>
</form>

  <div class="container mt-4 border border-white " style="border-radius:50px;background-color:black;opacity: 65%">
<h1 class=" p-3  text-white text-center" style="">Title : <small class="" style="color: grey "><?php echo htmlspecialchars($info['title']); ?></small></h1>
</div>
<hr>
<div class='container shadow border border-white' style="border-radius:50px;background-color:black;opacity: 65%">
  <h1 class=" p-3 text-white text-center" style="">Category : <small class=""style="color: grey "><?php echo htmlspecialchars($info['category']); ?></small></h1>
</div>
<hr>
<div   class='container shadow border border-white 'style="background-color: black;border-radius:20px;opacity: 65%">

<button class="bg-transparent btn-lg text-white border-0 " onclick="copyToClipboard('#<?php echo ($info['id']); ?>')"><i class="glyphicon glyphicon-share"></i></button>
  
  <h1 class="p-3 text-white text-center" id="<?php echo ($info['id']); ?>" class="" style="color: grey "><?php echo htmlspecialchars($info['body']); ?></h1>
  
    <script type="text/javascript">
    function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

  </script>
</div>

  <h6 class=" p-3 text-white text-center"style=""  >Published On : <small  class="" style="color: grey "><?php echo htmlspecialchars($info['time']); ?></small></h6>

</div>

<form action="mainpage.php" method="POST">

  <button type="submit" name="like" value="<?php echo ($info['id']);?>" style="border-radius: 30px" class=" btn btn-lg btn-outline-secondary" ><i class="glyphicon glyphicon-thumbs-up"></i></button>
  <span class=" p-3 text-white text-center"style=""  > Likes : <small  class="badge" style="color: grey "><?php echo htmlspecialchars($info['likes']); ?></small></span>
</form>
  
</div>
<br>
<br>
<br>
 <?php 

}
  ?>


        </div>
  </div>



</header>
<br>


</html>

<?php include('templates/footer.php')?>
</html>