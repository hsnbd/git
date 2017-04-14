<?php require('controller/function.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" type="image/png" href="image/book-icon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--all stylesheet file -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div id="header"  class="col-md-12">
                <h4 class="logo float-left d-inline">:::: Library Management System | LMS ::::</h4>


                <div class="logId float-right d-inline">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle"
                              type="button" id="dropdownMenu1" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                        hasanbd666@gmail.com
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="#">Hasan</a>
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="#">Setting</a>
                        <a class="dropdown-item" href="#">Log out</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row header-plate">
                <div class="col-md-2 bg-success">
                    <p>Total Student:  &nbsp;&nbsp;<span class="font-weight-bold">100</span></p>
                </div>

                <div class="col-md-2 bg-primary">
                    <p>Total Book:  &nbsp;&nbsp;<span class="font-weight-bold">100</span></p>
                </div>

                <div class="col-md-2 bg-warning">
                    <p>Available Book:  &nbsp;&nbsp;<span class="font-weight-bold">100</span></p>
                </div>
                <div class="col-md-2 bg-danger">
                    <p>Total Author:  &nbsp;&nbsp;<span class="font-weight-bold">100</span></p>
                </div>

                <div class="col-md-2 bg-info">
                    <p>Total Issue Book:  &nbsp;&nbsp;<span class="font-weight-bold">100</span></p>
                </div>

                <div class="col-md-2 bg-success">
                    <p>Total Price of Book:  &nbsp;&nbsp;<span class="font-weight-bold">100</span></p>
                </div>
        </div>





    	<div class="row">
	    		<div id="left-side" class="col-md-2">
                    <div class="left-menu">
                        
                            <a class="left-link nav-link <?php if($menu=="home"){ echo "active"; }?>" href="index.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            <a class="left-link nav-link <?php if($menu=="dashboard"){ echo "active"; }?>" href="index.php?a=dashboard"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a>
                            <a class="left-link nav-link <?php if($menu=="allBook"){ echo "active"; }?>" href="index.php?a=allBook"><i class="fa fa-book"></i>&nbsp;&nbsp;All Book</a>
                            <a class="left-link nav-link <?php if($menu=="addBook"){ echo "active"; }?>" href="index.php?a=addBook"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Book</a>
                            <a class="left-link nav-link <?php if($menu=="issueBook"){ echo "active"; }?>" href="index.php?a=issueBook"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Issue Book</a><!--Issue Book and Issue book history page-->
                            <a class="left-link nav-link <?php if($menu=="returnBook"){ echo "active"; }?>" href="index.php?a=returnBook"><i class="fa fa-rotate-left"></i>&nbsp;&nbsp;Return Book</a><!--Return Book and Return book history page-->
                            <a class="left-link nav-link <?php if($menu=="allStudent"){ echo "active"; }?>" href="index.php?a=allStudent"><i class="fa fa-users"></i>&nbsp;&nbsp;All Student</a>
                            <a class="left-link nav-link <?php if($menu=="addStudent"){ echo "active"; }?>" href="index.php?a=addStudent"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Student</a>
                        
                    </div>
	    		</div>


	    		<div id="middle-body" class="col-md-10">


<?php 

if(isset($_GET['v'])){  
    if(file_exists("view/".$_GET['v'].".php")) {
        require("view/".$_GET['v'].".php");
    }
    else{
        require("view/404.php");
    }
}
else if(isset($_GET['a'])){ 
    if(file_exists("view/admin/".$_GET['a'].".php")) {
        require("view/admin/".$_GET['a'].".php");
    }
    else{
        require("view/404.php"); 
    }
}
else if(isset($_GET['c'])){ 
    if(file_exists("view/".$_GET['c'].".php")) {
        require("view/".$_GET['c'].".php");
    }
    else{
        require("view/404.php"); 
    }
}
else{
    require("view/login.php");
}
?>

	    		</div>

    	</div>


        <div class="row">
            <div class="footer fixed-bottom text-center col-md-12">
                <p>Copyright by &copy; Baker Hasan - 2016 - <?php echo date('Y');?></p>
            </div>
        </div>
        
<!--container end-->
    </div>

    
<!--all script file -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
