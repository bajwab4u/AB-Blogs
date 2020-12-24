<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>

  <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
<br>
<br>
<br>
<br>
<br>
<div>

<?php
//connect to database
include("connection.php");
$user_name=$_SESSION['username'];



if (isset($_POST['S_submit'])) {

$search=$_POST['search'];
$sql="SELECT id,name,title,body,category,likes,time FROM userblog  WHERE name='$search' ";
 




}


//make query and get result
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)!=0){ 
//fetch resulting rows as an Associative Array
$infos=mysqli_fetch_all($result,MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);
//close connection
mysqli_close($con);

}

else{

  
header('location:mainpage.php');
}

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

  <div class="container mt-4 border border-white " style="border-radius:50px;background-color:black;opacity: 65%">
<h1 class=" p-3  text-white text-center" style=""><small class="" style="color: grey "><?php echo htmlspecialchars($info['name']); ?></small></h1>


</div>
          
 <?php 
break;
}
  ?>

<?php $var=0 ?>
<?php foreach ($infos as $info){ ?>
<?php  $var=htmlspecialchars($info['likes']+$var); ?>

 <?php 

}
  ?>

<div >
  <h1>Total LIkes :<span class="badge"><?php echo "$var"; ?></span></h1>
  <h1>All Blogs</h1>
</div>
<?php foreach ($infos as $info){ ?>

  <div class="container centre-div shadow " style="background-color: black" >  
<div class=" p-4 mt-4 bg-transparent" style="background:transparent;background-image: url('ee.png');background-repeat: no-repeat;background-size: 80% 100%;background-position: 40% 30%;margin-top: 60px" >

 <
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

<form action="sports.php" method="POST">

  <button type="submit" name="like" value="<?php echo ($info['id']);?>" style="border-radius: 30px" class="btn btn-lg btn-outline-secondary" ><i class="glyphicon glyphicon-thumbs-up"></i></button>
  <span class=" p-3 text-white text-center"style=""  > Likes : <small  class="badge" style="color: grey "><?php echo htmlspecialchars($info['likes']); ?></small></span>
</form>





<hr>
<hr>
  
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
