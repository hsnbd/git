<?php 

$title = "";
$menu = "Home";

if(isset($_GET['v']))
{
	$menu = $_GET['v'];
	
	if($menu == "home")
	{
		$title = "Pet Shop";
	}
	elseif($menu == "about")
	{
		$title = "About Us | Pet Shop";
	}
	elseif($menu == "petmart")
	{
		$title = "Petmart | Pet Shop";
	}
}
elseif(isset($_GET['c']))
{
	$menu = $_GET['c'];
	
	if($menu == "buy")
	{
		$title = "Buy | Pet Shop";
	}
}
elseif(isset($_GET['e']))
{
	$menu = $_GET['e'];
	
	if($menu == "entry")
	{
		$title = "Data Entry | Pet Shop";
	}
}
elseif(isset($_GET['a']))
{
	$menu = $_GET['a'];
	
	if($menu == "report")
	{
		$title = "Report | Pet Shop";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>


<div id="header"> <a href="#" id="logo"><img src="images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
    <li <?php if($menu=="home") echo ' class="active"'; ?>><a href="index.php?v=home">Home</a></li>
    <li <?php if($menu=="petmart") echo ' class="active"'; ?>><a href="index.php?v=petmart">PetMart</a></li>
    <li <?php if($menu=="about") echo ' class="active"'; ?>><a href="index.php?v=about">About us</a></li>
    <li <?php if($menu=="report") echo ' class="active"'; ?>><a href="index.php?a=report">admin</a></li>
    <li <?php if($menu=="entry") echo ' class="active"'; ?>><a href="index.php?e=entry">employee</a></li>
    <li <?php if($menu=="buy") echo ' class="active"'; ?>><a href="index.php?c=buy">customer</a></li>
  </ul>
</div>

<?php 

if(isset($_GET['v']))
{
	if(file_exists("view/front-end/".$_GET['v'].".php"))
	{
	require('view/front-end/'.$_GET['v'].'.php');
	}
	else
	{
		require('view/front-end/404.php');
	}
}
if(isset($_GET['a']))
{
	if(file_exists("view/admin/".$_GET['a'].".php"))
	{
	require('view/admin/'.$_GET['a'].'.php');
	}
	else
	{
		require('view/front-end/404.php');
	}
}
if(isset($_GET['e']))
{
	if(file_exists("view/employee/".$_GET['e'].".php"))
	{
	require('view/employee/'.$_GET['e'].'.php');
	}
	else
	{
		require('view/front-end/404.php');
	}
}
if(isset($_GET['c']))
{
	if(file_exists("view/customer/".$_GET['c'].".php"))
	{
	require('view/customer/'.$_GET['c'].'.php');
	}
	else
	{
		require('view/front-end/404.php');
	}
}
else
{
	require('view/front-end/home.php');
}

?>

<div id="footer">
  <div class="section">
    <ul>
      <li> <img src="images/friendly-pets.jpg" width="240" height="186" alt="">
        <h2><a href="#">Friendly Pets</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonummy nib. <a class="more" href="#">Read More</a> </p>
      </li>
      <li> <img src="images/pet-lover2.jpg" width="240" height="186" alt="">
        <h2><a href="#">How dangerous are they</a></h2>
        <p> Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="#">Read More</a> </p>
      </li>
      <li> <img src="images/healthy-dog.jpg" width="240" height="186" alt="">
        <h2><a href="#">Keep them healthy</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonu mmy. <a class="more" href="#">Read More</a> </p>
      </li>
      <li>
        <h2><a href="#">Love...love...love...pets</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diameusim. <a class="more" href="#">Read More</a> </p>
        <img src="images/pet-lover.jpg" width="240" height="186" alt=""> </li>
    </ul>
  </div>
  <div id="footnote">
    <div class="section">Copyright &copy; 2012 <a href="#">Company Name</a> All rights reserved | Website Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">freewebsitetemplates.com</a></div>
  </div>
</div>


</body>
</html>
