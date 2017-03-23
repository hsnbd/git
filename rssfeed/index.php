<?php require_once "includes/functions.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" href="css/style.css" />
 
</head>
<body>
    <div class="container">
        <div class="row">
            <section id="layout">
                <div class="header">
                    <h2>My RSS FEED</h2>
                </div>

                <div class="today">
                    <p><span style="color: red">Today is: </span><?php echo date("l jS \of F Y h:i:s A"); ?></p>
                </div>


                <div class="menu">
                    <nav id="tab1" onclick="show('tab1','mynotes');"><a href="<?php echo $_SERVER['PHP_SELF'];?>">My Notes</a></nav>
                    <nav id="tab2" onclick="show('tab2','createnote');">Create Note</nav>
                </div>

                <div id="mynotes">
                    <?php getFeed("http://news.google.com/news?ned=us&topic=h&output=rss"); ?>
                </div>

                <div id="createnote">
                    <?php getFeed("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml"); ?>
                </div>
            </section>
        </div>
    </div>



       <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
    <script src="js/myScript.js" type="text/javascript"></script>
</body>
</html>



