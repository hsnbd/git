<?php
/**--------------------------------------------------------------
|		abstract class e class o method e abstract likh te hobe
-----------------------------------------------------------------*/
abstract class College
{
/**----------------------------------------------------------------------------------
|		abstract class e generel method o use kora jay jeta interface class e jay na
-------------------------------------------------------------------------------------*/
	public $class;
	public function __construct($class)
	{
		echo $this->class = $class;
	}
/**------------------------------------------------------------------------------------
|		ei 3 ta method child class e na likh le error dekha be   /must be likh te hobe
---------------------------------------------------------------------------------------*/
	abstract public function name($name);
	abstract public function est($est);
	abstract public function location($location);

}

class Dhaka extends College
{
	public $name;
	public $est;
	public $location;
	public function name($name)
	{
		$this->name = $name;
		echo "College Name is " . $this->name . ". ";
	}
	public function est($est)
	{
		$this->est = $est;
		echo " College Est. " . $this->est . ". ";
	}
	public function location($location)
	{
		$this->location = $location;
		echo "College location " . $this->location . ". "	;
	}
}
$d = new Dhaka('This is an abstract class <br />');
$d->name('"Dhaka College"');
$d->est(1789);
$d->location('New Market, Dhanmondi');
?>
