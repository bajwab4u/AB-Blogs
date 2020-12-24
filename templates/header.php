
<html>
<head>
	<title></title>
<?php include 'links.php'  ?>
</head>

<nav class="navbar navbar-expand-xl bg-light navbar-light  shadow fixed-top justify-content-start">
  <span class="nav-item navbar-brand "><img src="logo.png" width="80" height="80"></span>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">


<ul class="navbar-nav" style="margin-left:30px ">
  <li class="nav-item">
    <a class="nav-link" href="mainpage.php">Home</a>
  </li>

</ul>  
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="sports.php">Sports</a>
  </li>
</ul> 
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="politics.php">Politics</a>
  </li>
</ul> 
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="education.php">Education</a>
  </li>
</ul>
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="technology.php">Technology</a>
  </li>
</ul>

<ul class="navbar-nav" style="margin-right: 30px;margin-left:100px " >
  <li class="nav-item ">
  <div  id="google_translate_element" ></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en'
  }, 'google_translate_element');
}

</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</li>
</ul>

<ul class="navbar-nav" style="margin-right: 30px;margin-left:30px">
  
  <form class="input-group" action="search.php" method="POST">
    <input type="text" name="search" value="" class="form-control border border-right-0 bg-transparent"  placeholder="Search Blogger ..." aria-label="Search" maxlength="10" required>
    <span class="input-group-append">
   <button class="btn btn-light border border-left-0 bg-grey" type="submit" name="S_submit" value="S_search"><i class="glyphicon glyphicon-search"></i></button>
  


  </form>

</ul>

<ul class="navbar-nav">
  
    <li class="nav-item"><a  class=" btn btn-sm btn-outline-danger bg-grey"  href="signout.php">SignOut <i class="glyphicon glyphicon-log-out"></i></a></li>

</ul>




</div>
</nav>

<body>
</html>

