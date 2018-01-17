<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class Subscribe extends CI_Controller {

		public function view() {
			if ( !file_exists(APPPATH.'views/subscribe.php') ) {
				show_404();
			}			

			$data['services'] = $this->service_model->get_services();
			// print_r($data['services']);
			$data['pets'] = $this->subscribe_model->get_pets();
			// print_r($data['pets']);
			

			$this->load->view('templates/header');
			$this->load->view('subscribe',$data);
			$this->load->view('templates/footer');

		}

		public function add_client() {

			$this->form_validation->set_rules('full_name','Name','trim|required|min_length[3]|max_length[250]|callback_name_validate');
			$this->form_validation->set_rules('address','Address','trim|required|min_length[3]|max_length[250]|callback_address_validate');
			$this->form_validation->set_rules('email','E-mail','trim|required|max_length[40]|valid_email');

			$this->form_validation->set_rules('password','Password','trim|required|min_length[8]|max_length[16]|callback_password_validate');

			$this->form_validation->set_rules('phone','Phone','trim|required|callback_phone_validate');
						
			// $arr_ser = array (
			// 			array(
			// 				"field"=>"service_requested",
			// 				"label"=>"Type of Service",
			// 				"rules"=>"required|greater_than[0]",
			// 				"errors"=>array("greater_than[0]"=>"Please select one of the services.")
			// 			),
			// 		);
			// $this->form_validation->set_rules('service_requested','Type of Service','required|greater_than[0]');
			// $this->form_validation->set_message("greater_than[0]","Please select one of the option.");
			// $this->form_validation->set_rules('pet_name','Pet Name','required|greater_than[0]');

			$this->form_validation->set_rules('service_requested','Type of Service','required|callback_validate_service');
			$this->form_validation->set_rules('pet_name','Pet Name','required|callback_validate_pet');

			if ( $this->form_validation->run() ) {
				$this->subscribe_model->subscribe();
				redirect('/');
			} else {
				$this->view();
			}
		}

		public function validate_service($value) {
			if ( $value == "0") {
				$this->form_validation->set_message("validate_service","Please select one of the services.");
				return FALSE;
			} else {
				return TRUE;
			}
		}
		
		public function validate_pet($value) {
			if ( $value == "0") {
				$this->form_validation->set_message("validate_pet","Please select one of the pets.");
				return FALSE;
			} else {
				return TRUE;
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

		public function address_validate($address) {
			if ( !preg_match("/^[-\s\w\,\?\.]{10,250}$/", $address) ) {
				$this->form_validation->set_message('name_validate', 'The field Comments must have alphanumeric character plus [.,?-] only and must be more than 10 letters and less than 250 letters.');
				return FALSE;
			} else {
				return TRUE;
			}
		}

		public function password_validate($password) {

			if ( !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/", $password) ) {
                $this->form_validation->set_message("password_validate","The password should contain 8 to 16 characters, at least one uppercase, one lowercase and it should be alphanumeric.");
                return FALSE;
            } else {
            	return TRUE;
            }
		}

		public function phone_validate($phone) {
			if( !preg_match("/^[2-9]\d{9}$/", $phone) ) {
			  	$this->form_validation->set_message("phone_validate","Invalid phone number.Phone number should be in format of 0000000000 and 10 digit long.");
			  	return FALSE;
			} else {
				return TRUE;
			}
		}
	}

?>