<?php
	/**
	* 
	*/
	class Service_model extends CI_Model {
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_services() {
			$query = $this->db->get('service');
			return $query->result_array();
		}
	}
?>