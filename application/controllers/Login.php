<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
	
		public function index()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules("username","Username","required|callback_cekDb");
			$this->form_validation->set_rules('password','Password','required');
			if ($this->form_validation->run() == false) {
				$this->load->view('login');
			}else{
				redirect("");
			}
		}
		public function cekDb($username)
		{
			$password = $this->input->post('password');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('admin');
			if ($query->num_rows() == 1) {
				$data = $query->result()[0];
				$ses_data = array(
					'id' => $data->id,
					'username' => $data->username,
				);
				$this->session->userdata('logged_in',$ses_data);
				return true;
			}else{
				$this->form_validation->set_message('cekDb',"Username and Password tidak valid");
				return false;
			}
		}
	
	}
	
	/* End of file Login.php */
	/* Location: ./application/controllers/Login.php */