<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class Service extends CI_Controller {

		public function view() {
			if ( !file_exists(APPPATH.'views/services.php') ) {
				show_404();
			}
			
			$data['services'] = $this->service_model->get_services();
			// print_r($data['services']);

			$this->load->view('templates/header');
			$this->load->view('services',$data);
			$this->load->view('templates/footer');

		}
		
		
	}

?>