<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function index(){
		$this->load->view("studentform");
	}
	public function getData()
	{
		$this->load->model("Studentmodel");
			$array=$this->input->post();
			$getData=$this->Studentmodel->insertData($array);

		if($getData){
			$this->load->view("studentform");

		}else{
			echo "Please try again.";
		}
		
	}

}
?>