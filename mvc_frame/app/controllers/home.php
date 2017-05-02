<?php 

class home extends Controller
{
	public function index($name = '')
	{
		$User = $this->model('User');
		$User->name = $name;
		$this->view('home/index', ['name'=>$User->name]);
	}
	public function about()
	{
		// echo "home/index";
	}
}

 ?>