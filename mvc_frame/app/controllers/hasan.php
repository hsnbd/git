<?php 
class hasan extends Controller
{
	public function index($name='', $age='')
	{
		echo !empty($name) ? "My Name is ". $name : '';
		echo !empty($age) ? " And I'm ". $age . " Years Old" : '';
	}
}


 ?>