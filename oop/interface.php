<?php 

interface name
{
	public function add($name);
}
/**--------------------------------------------------------------
|	interface class same as abstruct
|	but no CODE in interface class
-----------------------------------------------------------------*/
class hasan implements name
{
	public function add($name)
	{
		return "My name is " . $name;
	}
}
$h = new hasan();
echo $h->add('hasan');
?>