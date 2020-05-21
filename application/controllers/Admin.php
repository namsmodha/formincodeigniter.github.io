<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function manageStudentData(){
		//fetch the single user data to edit the information
			$this->load->model("Adminmodel");
			$data["list"]=$this->Adminmodel->getStudentData();
			$this->load->view("managestudent", $data);
	}
	public function fetchSingleStudentData($id){

		$this->load->model("Adminmodel");
		$rt["profile"]=$this->Adminmodel->findStudentProfile($id);

		$this->load->view("editstudentform", $rt);
	}
	public function updateSingleStudentData(){
	
			//edit the information and update in the database so update model function will be called
		$this->load->model("Adminmodel");
		$array=$this->input->post();
         $id=$this->input->post("id");
		
        if($this->Adminmodel->updateStudentProfile($array, $id)){
        	
        	return redirect("Admin/manageStudentData");
        }

	}
	public function deleteStudentProfile($id){

		$this->load->model("Adminmodel");
		if($this->Adminmodel->deleteStudentProfile($id)){
			
        	return redirect("Admin/manageStudentData");
		}
	}
}
?>