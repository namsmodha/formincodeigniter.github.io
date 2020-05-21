<?php

	class Studentmodel extends CI_Model{

		public function insertData($data){
		
			return $this->db->insert('tbl_student', $data);
			
		}
	}
?>