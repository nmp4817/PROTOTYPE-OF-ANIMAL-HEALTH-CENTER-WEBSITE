<?php
	/**
	* 
	*/
	class AskVet_model extends CI_Model {
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_questions() {
			$query = $this->db->get('questions');
			return $query->result_array();
		}
	}
?>