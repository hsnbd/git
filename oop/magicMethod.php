<?php


class WebcoachbdProduct
{
	public $title = "default value";
	private $_prod = array();

	public function __get($magic)
	{
	if (is_numeric($this->_prod[$magic]))
	{
	return FALSE;
	}
	else
	{
	return $this->_prod[$magic];
	}
}


public function __set($magic, $value) {


$this->_prod[$magic] = $value;
}


}


$productObject = new WebcoachbdProduct();
echo $productObject->title . '<br/>';
$productObject->testProperty = 'Bangladesh';
echo $productObject->testProperty;
?>
