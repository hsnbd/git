<?php 

$con = mysqli_connect("localhost","root","","note");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


date_default_timezone_set("Asia/Dhaka");
//$curent_time = NOW();



function getFeed($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
    echo "<ul>";
     
    foreach($x->channel->item as $entry) {
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
    }
    echo "</ul>";
}




