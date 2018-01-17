<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class Contact extends CI_Controller {

		public function view() {
			if ( !file_exists(APPPATH.'views/contact.php') ) {
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('contact');
			$this->load->view('templates/footer');

		}

		public function add_contact() {
			$this->form_validation->set_rules('full_name','Name','trim|required|min_length[3]|max_length[250]|callback_name_validate');
			$this->form_validation->set_rules('email','E-mail','trim|required|max_length[40]|valid_email');
			$this->form_validation->set_rules('comments','Comments','trim|required|min_length[10]|max_length[1000]|callback_comments_validate');

			if ( $this->form_validation->run() ) {
				$this->contact_model->contact_vet();
				redirect('/');
			} else {
				$this->view();

			}
		}

		public function name_validate($name) {
			if ( !preg_match("/^[-\s\w]{3,250}$/", $name) ) {
				$this->form_validation->set_message('name_validate', 'The field Name must have alphanumeric character only and must be more than 3 letters and less than 250 letters.');
				return FALSE;
			} else {
				return TRUE;
			}
		}

		public function comments_validate($comments) {
			if (  !preg_match("/^[-\s\w\?\.\,<>]{10,1000}$/", $comments) ) {
				$this->form_validation->set_message('comments_validate', 'The field Comments must have alphanumeric character plus [.,?-] only and must be more than 10 letters and less than 250 letters.');
				return FALSE;
			} else {
				return TRUE;
			}
		}
		
		
	}

?>