<?php

//default time zone
date_default_timezone_set("Asia/Dhaka");
//$curent_time = NOW();


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

//Function For DATABASE CONNECTION
    public function __construct()
    {
      $this->dbhost = "localhost";
      $this->dbuser = "root";
      $this->dbpass = "";
      $this->dbname = "dhaka_college";

      $this->DB = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    }

/**------------------------------------------------------
*                        Function For INSERT DATA
*------------------------------------------------------*/
    public function Insert($table, $data)
    {
      $sql = "";
      foreach ($data as $key => $value)
      {
        if($sql)
        {
          $sql = $sql . ", ";
        }
        $sql = $sql . "{$key} = '$value'";
      }

      $sql = "INSERT INTO $table SET " . $sql;
      if($this->DB->query($sql))
      {
        return true;
      }
      return false;
    }

/**------------------------------------------------------
*                        Function For Read DATA
*------------------------------------------------------*/
    public function Read($table, $order)
    {
      $sql = "SELECT * FROM {$table} ORDER BY  {$order[0]} {$order[1]}";
      return $this->DB->query($sql);
    }

/**------------------------------------------------------
*                        Function For View DATA
*------------------------------------------------------*/
    public function View($table, $where)
    {
      $sql = "SELECT * FROM {$table} WHERE  {$where[0]}={$where[1]}";
      return $this->DB->query($sql);
    }

/**------------------------------------------------------
*                        Function For INSERT DATA
*------------------------------------------------------*/
    public function Edit($table, $where)
    {
      $sql = "SELECT * FROM {$table} WHERE  {$where[0]} = {$where[1]}";
      return $this->DB->query($sql);
    }

/**------------------------------------------------------
*                        Function For UPDATE DATA
*------------------------------------------------------*/
    public function update($table, $data, $where)
    {
      $sql = "";
      foreach ($data as $key => $value)
      {
        if($sql)
        {
          $sql = $sql . ", ";
        }
        $sql = $sql . "{$key} = '$value'";
      }

      $sql = "UPDATE $table SET " . $sql;
      $sql .= " WHERE {$where[0]} = {$where[1]}";
      if($this->DB->query($sql))
      {
        return true;
      }
      return false;
    }

/**------------------------------------------------------
*                        FUNCTION FOR DELETE DATA
*------------------------------------------------------*/
  public function Delete($table, $where){
    $sql = "delete from $table where {$where[0]} = {$where[1]}"; 
    $this->DB->query($sql);
    if(mysqli_affected_rows($this->DB)){
      return true;
    }
    return false;
  }

}//Class is over here
























































$title = "PHP CRUD DATA";
$menu = "home";

if(isset($_GET['v']))
{
  $menu = $_GET['v'];
  if($menu == "home")
  {
    $title = "PHP CRUD DATA | Read Data From Database";
  }
  elseif($menu == "create")
  {
    $title = "PHP CRUD DATA | Create Data To Database";
  }
  elseif($menu == "update")
  {
    $title = "PHP CRUD DATA | Update Data From Database";
  }
  elseif($menu == "registration")
  {
    $title = "PHP CRUD DATA | registration Data to Database";
  }
  elseif($menu == "login")
  {
    $title = "PHP CRUD DATA | Login To Admin";
  }
}


//problems here.....
//please note this




?>