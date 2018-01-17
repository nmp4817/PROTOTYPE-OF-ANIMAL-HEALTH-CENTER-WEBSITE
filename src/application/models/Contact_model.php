<?php
	/**
	* 
	*/
	class Contact_model extends CI_Model {
		
		function __construct()
		{
			$this->load->database();
		}

		public function contact_vet() {

			$data = array(
				'name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'comments' => $this->input->post('comments')
			);

			$data = $this->security->xss_clean($data);

			return $this->db->insert('contact',$data);
		}
	}
?>