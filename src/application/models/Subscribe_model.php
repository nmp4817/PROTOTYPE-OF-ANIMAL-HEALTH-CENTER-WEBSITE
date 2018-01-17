<?php
	/**
	* 
	*/
	class Subscribe_model extends CI_Model {
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_pets() {
			$query = $this->db->get('pet');
			return $query->result_array();
		}

		public function subscribe() {

			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

			$email = $this->security->xss_clean($this->input->post('email'));

			$date = date("Y-m-d");

			$data_client = array(
						'name' => $this->input->post('full_name'),
						'email' => $this->input->post('email'),
						'password' => do_hash($this->input->post('password'),"md5"),
						'phone' => $this->input->post('phone'),
						'address' => $this->input->post('address')
					);

			$data_client = $this->security->xss_clean($data_client);

			try {

				$this->db->select("clientid");
				$this->db->from("client");
				$this->db->where("email",$email);

				$query = $this->db->get();
				
				$row = $query->row_array();
				$clientid = $row["clientid"];

			    if ( $query->num_rows() <= 0 ) {		
					$this->db->insert('client',$data_client);
					$clientid = $this->db->insert_id();
				}

				$data_subscribe = array(
						'clientid' => $clientid,
						'petid' => $this->input->post('pet_name'),
						'serviceid' => $this->input->post('service_requested'),
						'susbscribed_date' => $date
					);

				$data_subscribe = $this->security->xss_clean($data_subscribe);

				return $this->db->insert('subscription',$data_subscribe);

			}  catch ( mysqli_sql_exception $me ) {
				// $post_errors[] = $me->getMessage();
				$mysqli->rollback();
		        // header("Location: system-error.php");
		    } catch ( Exception $e ) {
		    	// $post_errors[] = $e->getMessage();
		    	$mysqli->rollback();
		        // header("Location: system-error.php");
		    }

			

			
		}
	}
?>