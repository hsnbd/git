<?php 
/**--------------------------------------------------------------
|		Static Method And Property
-----------------------------------------------------------------*/
class Teacher
{
	static $x;
	static $y;
	static $name = " <br />Hasan";
	public static function add($x,$y)
	{
		self::$x = $x;
		self::$y = $y;
		echo self::$x + self::$y;
	}

	public static function stri($x, $y)
	{
		self::$x = $x;
		self::$y = $y;
		echo "<br />My Name is ". self::$x . " and I'm ". self::$y . " Years Old";
	}
}

// $t = new Teacher('Hasan');
Teacher::add(10, 20);
Teacher::stri('Hasan', 20);
echo Teacher::$name;
echo "<br />";

/**--------------------------------------------------------------
|		Late Static E access pete hole static::method likte hobe
-----------------------------------------------------------------*/

?>