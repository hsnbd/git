<?php require('controller/functions.php'); ?>

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
                <h2 class="logo text-center">PHP Student Create Read Update Delete DATA</h2>

                <div class="menu">
                    <ul class="nav nav-justified nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="create") echo 'active'; ?>" href="index.php?v=create">Create</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="home") echo 'active'; ?>" href="index.php?v=home">Home / Read</a>
                      </li>

<?php if(isset($_GET['eid'])){ ?>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="update") echo 'active'; ?>" href="index.php?v=update">Update</a>
                      </li>
<?php } ?>

<?php if(isset($_GET['vid'])){ ?>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="view") echo 'active'; ?>" href="index.php?v=view">View</a>
                      </li>
<?php } ?>                    
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="registration") echo 'active'; ?>" href="index.php?v=registration">Registration</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($menu=="login") echo 'active'; ?>" href="index.php?v=login">Login</a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>


<?php
//for dynamic menu navigation 
if (isset($_GET['v'])){

  if(file_exists("view/".$_GET['v'].".php"))
  {
    require('view/'.$_GET['v'].'.php');
  }
  else
  {
    require('view/404.php');
  }
}
else
{
  require('view/home.php');
}
 ?>


        <div class="row">
            <div class="footer fixed-bottom text-center col-md-12">
                <p>Copyright by &copy; Baker Hasan - 2016-2017</p>
            </div>
        </div>
        
<!--container end-->
    </div>

    
<!--all script file -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

