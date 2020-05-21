<?php

	class Adminmodel extends CI_Model{

		public function getStudentData(){
			$this->load->database();
			$q=$this->db->query("select * from tbl_student");
			return $q->result();
		}
		public function findStudentProfile($id){
			$q = $this->db->select()
					 ->where('id', $id)
					 ->get("tbl_student");

					 return $q->row();
		}
		public function updateStudentProfile($data, $id){
			return $this->db->where('id', $id)
					 ->update("tbl_student", $data);
		}
		public function deleteStudentProfile($id){
			return $this->db->where('id', $id)
					 ->delete("tbl_student");
		}
	}
?>