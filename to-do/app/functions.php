<?php 
session_start();
$_SESSION['user_id'] = 1;

$title = "PHP CRUD DATA";

$db = new PDO('mysql:dbname=todo;host=localhost', 'root', '');

//Handle this in some other way
if(!isset($_SESSION['user_id']))
{
  die("You are not signed in.");
}
?>