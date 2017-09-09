<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sms extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('students','students');
		$this->load->model('course','course');
	}

	public function index()
	{
		$header_data['title'] = "Student Management System";
		$list = $this->students->read();
		$data['students'] = $list;

		$this->load->view('include/header',$header_data);
		$this->load->view('students/list_students',$data);
		$this->load->view('include/footer');
	}//end of index function

	public function view($id){

		$header_data['title'] = "View - Student Management System";
		$condition = array('idno'=>$id);
		$info = $this->students->read($condition);
		$data['students'] = $info;
		echo $id;
		$this->load->view('include/header',$header_data);
		$this->load->view('students/view_student',$data);
		$this->load->view('include/footer');

	}//end of view function

	public function del($id){

		$data = array('idno'=>$id);
		$this->students->del($data);

		redirect('sms');


	}//end of del function

	public function save(){

		
		$id = $_POST['idno'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$course = $_POST['course'];
		$sex = $_POST['sex'];
		if($_GET['a']=='add'){
				$data = array('id'=>null,'idno'=>$id,'lname'=>$lname,'fname'=>$fname,'mname'=>$mname,'course'=>$course,'sex'=>$sex);
				$this->students->create($data);
		}
		if($_GET['a']=='edit'){
			
			$data = array('id'=>null,'idno'=>$id,'lname'=>$lname,'fname'=>$fname,'mname'=>$mname,'course'=>$course,'sex'=>$sex);
			$condition = array('idno'=>$id);
			$this->students->update($data,$condition);
		}


		redirect('sms');

	}//end of save function

	public function add(){

		$header_data['title'] = 'Add student';
		$list = $this->course->read();
		$data['course'] = $list;

		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student',$data);
		$this->load->view('include/footer');

	}//end of add function

	public function edit($id){

		$header_data['title'] = 'edit student';
		$listcourse = $this->course->read();
		$condition = array('idno'=>$id);
		$liststud = $this->students->read($condition);
		$data['course'] = $listcourse;
		$data['students'] = $liststud;

		$this->load->view('include/header',$header_data);
		$this->load->view('students/edit_student',$data);
		$this->load->view('include/footer');

	}//end of edit function

	public function course(){

		$header_data['title'] = "List of Courses";
		$list = $this->course->read();
		$data['course'] = $list;

		$this->load->view('include/header',$header_data);
		$this->load->view('course/list_courses',$data);
		$this->load->view('include/footer');

	}//end of course function 

	public function addcourse(){

		$header_data['title'] = 'Add course';
		$list = $this->course->read();
		$data['course'] = $list;

		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student',$data);
		$this->load->view('include/footer');

	}//end of add function

}
