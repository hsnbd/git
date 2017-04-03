<?php 
/**------------------------------------------------------
*                         Main Database Class  
*------------------------------------------------------*/
class Database
{
	private $dbhost;
	private $dbuser;
	private $dbpass;
	private $dbname;

	protected $DB;

	//FUNCTION FOR DATABASE CONNECTION
	public function __construct()
	{
		$this->dbhost = "localhost";
		$this->dbuser = "root";
		$this->dbpass = "";
		$this->dbname = "library_ms";

		$this->DB = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
	}

/**------------------------------------------------------
*                         Main Database Class  
*------------------------------------------------------*/
	protected function Validation($data)
	{
		return strip_tags(trim(mysqli_real_escape_string($this->DB, $data)));
	}


/**------------------------------------------------------
*                         Main Database Class  
*------------------------------------------------------*/
	public function Insert($table, $data)
	{
		$sql = "";
		foreach ($data as $key => $value) {
			if($sql)
			{
				$sql = $sql . ", ";
			}
			$sql = $sql . "{$key} = '". $this->Validation($value)."'";
		}
		$sql = "INSERT INTO $table SET " . $sql;
		if($this->DB->query($sql))
		{
			return true;
		}
		return false;
	}

/**------------------------------------------------------
*                         Main Database Class  
*------------------------------------------------------*/
	public function Read($table, $order)
	{
		$sql = "SELECT * FROM {$table} ORDER BY {$order[0]} {$order[1]}";
		return $this->DB->query($sql);
	}

}
?>