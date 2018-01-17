<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class AskVet extends CI_Controller {

		public function view() {
			if ( !file_exists(APPPATH.'views/askvet.php') ) {
				show_404();
			}
			
			$data['QandAs'] = $this->askvet_model->get_questions();
			// print_r($data['services']);

			$this->load->view('templates/header');
			$this->load->view('askvet',$data);
			$this->load->view('templates/footer');

		}
		
		
	}

?>