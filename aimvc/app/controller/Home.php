<?php
class Home extends Controller{
	// Constructor
	public function __construct(){

	}

	// Default method
	public function index($name="Juan", $age="24"){
		// Associative Arrays (arrays with keys)
		$arr_data['name'] = $name;
		$arr_data['age'] = $age;
		$arr_data['title'] = "Home Page";
		$arr_data['lecturers'] = $this->logic("Lecturer_model")->getAllDataLecturer();
		// Display page and send data
		$this->display('template/header', $arr_data);
		$this->display("home/index", $arr_data);
		$this->display('template/footer');
	}

	public function page($current_page=2, $next_page=3, $prev_page=1){
		// Associative Arrays (arrays with keys)
		$arr_data['current'] = $current_page;
		$arr_data['next'] = $next_page;
		$arr_data['previous'] = $prev_page;
		$arr_data['title'] = "Personal Page";
		// Display page and send data
		$this->display('template/header', $arr_data);
		$this->display("home/page", $arr_data);
		$this->display('template/footer');
	}

	public function insert(){
		//var_dump($_POST);
		if($this->logic("Lecturer_model")->insertDataLecturer($_POST) == true){
			header('Location: '.APP_PATH.'/home'); // Redirect ke page yang sama/lain.
			exit;
		}
	}
	
	public function delete($id){
		if($this->logic("Lecturer_model")->deleteDataLecturer($id) == true){
			header('Location: '.APP_PATH.'/home'); // Redirect ke page yang sama/lain.
			exit;
		}
	}
	
	public function update(){
		//var_dump($_POST);
		if($this->logic("Lecturer_model")->updateDataLecturer($_POST) == true){
			header('Location: '.APP_PATH.'/home'); // Redirect ke page yang sama/lain.
			exit;
		}
	}
	
	// Get status
	private function _status(){
		echo "This is home/status.";
	}
}
?>