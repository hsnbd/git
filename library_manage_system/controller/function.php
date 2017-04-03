<?php  require('model/database.php');
//basic config
$title = "Library Management System";
$menu = "home";

	if(isset($_GET['a'])){
		$menu = $_GET['a'];	
		
		if($menu == "dashboard"){
			$title = "Dashboard | LMS";	
		}
		else if($menu == "addBook"){
			$title = "Add Book | LMS";	
		}
		else if($menu == "allBook"){
			$title = "All Book | LMS";	
		}
		else if($menu == "issueBook"){
			$title = "Issue Book | LMS";	
		}
		else if($menu == "returnBook"){
			$title = "Return Book | LMS";	
		}
		else if($menu == "student"){
			$title = "Student | LMS";	
		}
	// }
	// else if(isset($_GET['c'])){
	// 	$menu = $_GET['c'];
		
	// 	if($_GET['c'] == "mofiz"){
	// 		$title = "Profile | Pet Shop";	
	// 	}
	// 	else if($_GET['v'] == "about"){
	// 		$title = "About Us | Pet Shop";	
	// 	}	
	// }
	// else if(isset($_GET['e'])){
	// 	$menu = $_GET['e'];	
	}


?>