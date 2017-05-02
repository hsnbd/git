<?php 
/**--------------------------------------------------------------
|		Type Hinting
-----------------------------------------------------------------*/
class College
{
	public $college;
	public $stub;
	function name($college)
	{
		echo "My College Name is ". $this->college = $college;
	}
	function stub($stub)
	{
		echo "<br /> Established ". $this->stub = $stub;
	}
}

class Student
{
	public $studentname;
	public function __construct($sName) {
		$this->studentname = $sName;
	}
	function getStudent(College $cl)
	{
		echo "I'm " . $this->studentname . " From " . $cl->college;
	}
}
$cl = new College();
$cl->name('Dhaka College');
$cl->stub(1789);

echo "<br />";

$st = new Student("hasan");
$st->getStudent($cl);



// class DepartmentInfo
// {
// 	public $departmentName;
// 	public $chairman;
// 	public $classRoom;
// 	public $numberOfStudents;


// 	public function __construct($dept, $chair, $room, $stdNumber)
// 	{
// 		$this->departmentName = $dept;
// 		$this->chairman = $chair;
// 		$this->classRoom = $room;
// 		$this->numberOfStudents = $stdNumber;
// 	}


// 	public function departmentActivity()
// 	{
// 		echo "Deartment of " . $this->departmentName . " arrange a tour in every year" . "<br/>";
// 	}

// }

// class TeacherInfo{
// 	public $teacherName;

// 	public function __construct($tName) {
// 		$this->teacherName = $tName;
// 	}
// /**--------------------------------------------------------------
// |	Type Hinting	function getTeacher(DepartmentInfo $dept)
// |	Type Hinting	if($dept instanceof DepartmentInfo)
// -----------------------------------------------------------------*/
// 	public function getTeacher(DepartmentInfo $dept)
// 	{
// 		echo $this->teacherName . " is a teacher of " . $dept->departmentName . " Department";
// 	}
// }

// $dept = new DepartmentInfo("CSE", "Dr.Monirul Islam", 10, 250);
// $tinfo = new TeacherInfo("Dr. M. Kaykobad");
// $tinfo->getTeacher($dept);

 ?>