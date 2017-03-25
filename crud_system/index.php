<?php require('inc/functions.php'); ?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--all stylesheet file -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="header col-md-12 ">
                <h1 class="logo text-center">PHP CRUD DATA</h1>

                <div class="menu">
                    <ul class="nav nav-justified nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="create") echo 'active'; ?>" href="index.php?v=create">Create</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="home") echo 'active'; ?>" href="index.php?v=home">Home / Read</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="update") echo 'active'; ?>" href="index.php?v=update">Update</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="delete") echo 'active'; ?>" href="index.php?v=delete">Delete</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="login") echo 'active'; ?>" href="index.php?v=login">Login</a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>

<?php 
if(isset($info_message)){ ?>
        <div class="row">
            <div class="message col-md-12">
                <p class=<?php if($info_message[0]==false){echo "alert-danger";}else { echo "alert-success";} ?>><?php if($info_message[0]==false){echo $error;}else { echo $success;} ?></p>
            </div>
        </div>

<?php } ?>


<?php 
if (isset($_GET['v'])){

  if(file_exists("inc/".$_GET['v'].".php"))
  {
    require('inc/'.$_GET['v'].'.php');
  }
  else
  {
    require('inc/404.php');
  }
}
else
{
  require('inc/home.php');
}
 ?>


        <div class="row">
            <div class="footer fixed-bottom text-center col-md-12">
                <p>Copyright by &copy; Baker Hasan - 2016-2017</p>
            </div>
        </div>
    </div>
<!--container end-->

    
<!--all script file -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

