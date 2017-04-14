<?php require('model/database.config');

//default time zone
date_default_timezone_set("Asia/Dhaka");
//$curent_time = NOW();











$title = "PHP CRUD DATA";
$menu = "home";

if(isset($_GET['v']))
{
  $menu = $_GET['v'];
  if($menu == "home")
  {
    $title = "PHP CRUD DATA | Read Data From Database";
  }
  elseif($menu == "create")
  {
    $title = "PHP CRUD DATA | Create Data To Database";
  }
  elseif($menu == "update")
  {
    $title = "PHP CRUD DATA | Update Data From Database";
  }
  elseif($menu == "registration")
  {
    $title = "PHP CRUD DATA | registration Data to Database";
  }
  elseif($menu == "login")
  {
    $title = "PHP CRUD DATA | Login To Admin";
  }
}


//problems here.....
//please note this




?>