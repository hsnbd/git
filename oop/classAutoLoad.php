<?php
function __autoload($class_name){
require_once 'class.' . $class_name . '.php';
}
/**--------------------------------------------------------------
|	function __autoload($class_name){
|	require_once 'folder/class.' . $class_name . '.php';
|	}
|	class.class_name.php
|	eta shudu class ke autoload kore... ar class file takte boe
-----------------------------------------------------------------*/
$addr = new Address();
$addr->post = "Lutfur Rahman Road";
$addr->thana = "Bangshal";
$addr->district = "Dhaka";
$addr->getaddr();
?>
