<?php 

class Address
{
	private $holding;
	protected $lane;
	public $post;
	public $thana;
	public $district;

	public function __construct()
	{
		echo $this->holding = "40/3 <br />";
		echo $this->lane = "Jorpul lane<br />";
	}

	public function getaddr()
	{
		echo $this->post . "<br />";
		echo $this->thana . "<br />";
		echo $this->district . "<br />";

	}

//class er shese dite hoy
	public function __destruct()
	{
		echo "class is over";
	}


}


$addr = new Address();
$addr->post = "Lutfur Rahman Road";
$addr->thana = "Bangshal";
$addr->district = "Dhaka";
$addr->getaddr();

/**
* 
*/
class Dhaka extends Address
{
	
	public function __construct()
	{
		parent::__construct();
		parent::getaddr();
	}
}
$dk = new Dhaka();
$dk->post = "Lutfur Rahman Road";
$dk->thana = "Bangshal";
$dk->district = "Dhaka";
$dk->getaddr();


class Comilla extends Address
{
	static $dist = "Comilla <br />";
	static function scoperes()
	{	
		echo self::$dist;

	}
}
Comilla::scoperes();

?>