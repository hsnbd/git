<?php 

// $con = mysqli_connect("localhost","root","","note");
// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }


// date_default_timezone_set("Asia/Dhaka");
// //$curent_time = NOW();





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







// //show all notes
// $query = "SELECT * FROM mynote";
// $catchNote = mysqli_query($con, $query);



// $info_message = false;
// //createNote
// if(isset($_POST['createNote']))
// {
// 	$title = trim($_POST['title']);
// 	$title = strip_tags($title);
// 	$title = htmlspecialchars($title);

// 	$note = trim($_POST['note']);
// 	$note = strip_tags($note);
// 	$note = htmlspecialchars($note);

// 	$query = "INSERT INTO mynote (title, note, created_on) VALUES ('$title', '$note', NOW())";

// 	$createNote = mysqli_query($con, $query);



// 	if($createNote)
// 	{
// 		$info_message = true;
// 		$message = "Note Successfully Created";
// 	}
// 	else
// 	{
// 		$info_message = true;
// 		$message = "Something wrong";
// 	}
// }





// //delete Note
// if(isset($_GET['delete_id']))
// {
// 	$delete_id = $_GET['delete_id'];

// 	$query = "DELETE FROM mynote WHERE id='$delete_id'";
// 	$delete =  mysqli_query($con, $query);


// 	if($delete)
// 	{
// 		$info_message = true;
// 		$message = "Note Successfully Deleted";
// 	}
// 	else
// 	{
// 		$info_message = true;
// 		$message = "Something wrong";
// 	}

// } 

// //eader('Location: http://localhost/mynote/note.php');


?>