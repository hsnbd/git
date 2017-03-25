<?php 

$con = mysqli_connect("localhost","root","","phpuniversity");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


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
  elseif($menu == "delete")
  {
    $title = "PHP CRUD DATA | Create Data From Database";
  }
  elseif($menu == "login")
  {
    $title = "PHP CRUD DATA | Login To Admin";
  }
}


//problems here.....
//please note this







//show all data
$query = "SELECT * FROM students";
$catchNote = mysqli_query($con, $query);



//createStudent
if(isset($_POST['createStudent']))
{
  if(!empty($_POST['name']))
  {
    $name = trim($_POST['name']);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);
  }
	else
  {
    $info_message[0] = false;
    $error = "Please Fill Name First";
  }

  if(!empty($_POST['roll']))
  {
    $roll = trim($_POST['roll']);
    $roll = strip_tags($roll);
    $roll = htmlspecialchars($roll);
  }
  else
  {
    $info_message[0] = false;
    $error = "Please Fill Roll";
  }

  if(!empty($_POST['faculty']))
  {
    $faculty = trim($_POST['faculty']);
    $faculty = strip_tags($faculty);
    $faculty = htmlspecialchars($faculty);
  }
  else
  {
    $info_message[0] = false;
    $error = "Please Select a Faculty";
  }

  if(!empty($_POST['subject']))
  {
    $subject = trim($_POST['subject']);
    $subject = strip_tags($subject);
    $subject = htmlspecialchars($subject);
  }
  else
  {
    $info_message[0] = false;
    $error = "Please Select a Subject";
  }

  if(!empty($_POST['semester']))
  {
    $semester = trim($_POST['semester']);
    $semester = strip_tags($semester);
    $semester = htmlspecialchars($semester);
  }
  else
  {
    $info_message[0] = false;
    $error = "Please Select a semester";
  }

  if(isset($info_message))
  {
    $info_message[0] = false;
  }
  else
  {
    $query = "INSERT INTO students (name, roll, faculty, subject, semester) VALUES ('$name', '$roll', '$faculty', '$subject', '$semester')";
    $createStudent = mysqli_query($con, $query);
  }



	if(isset($createStudent) && !empty($createStudent))
	{
		$info_message[0] = true;
		$success = "Student Entry Successfully Added To Database";
	}
	else
	{
		$info_message[0] = false;
		$error = "Something wrong";
	}
}



//delete Student
if(isset($_GET['delete_id']))
{
	$delete_id = $_GET['delete_id'];

	$query = "DELETE FROM students WHERE id='$delete_id'";
	$delete =  mysqli_query($con, $query);


	if($delete)
	{
		$info_message[0] = true;
		$success = "Note Successfully Deleted";
	}
	else
	{
		$info_message[0] = false;
		$error = "Something wrong";
	}

} 



?>