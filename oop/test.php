<?php 
// $url[0] = 'home';
// echo $nurl = $url[0];
// unset($url[0]);
// echo '<br />';
// echo $nurl;
function increment($var)
{
    echo "hello world";
}
/**--------------------------------------------------------------
|	function er argument e value pass korar jonoo
|	call_user_func
|	call_user_func_array
-----------------------------------------------------------------*/
$var = 4;
// call_user_func('increment', $var);
// echo $var."\n";

// You can use this instead
call_user_func_array('increment', array($var));
echo $var."\n"
?>