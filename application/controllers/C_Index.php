<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Index extends CI_Controller {

//function parent harus di paling atas
	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');

		//load login model
		$this->load->library('session');
		
		//load modal database
		$this->load->model('M_Index');

	}

	public function index()
	{
		if ($this->M_Index->logged_in()) {
			redirect('dashboard');
			// $this->load->view('V_Dashboard.php');
		} else {
			//jika session belum terdaftar
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			$this->form_validation->set_message('required', '<div class="alert alert-danger"> success </div>');

			//check validation
			if ($this->form_validation->run() == TRUE) {
				//get data dari form
				$username = $this->input->post('username',TRUE);
				$password = $this->input->post('password',TRUE);

				$checking = $this->M_Index->login($username,$password);
				


				if ($checking == TRUE) {
						$get_id = $this->M_Index->loginwuwuuw($username,$password);

						foreach ($get_id as $g) {
							$id = $g['id'];
							$user = $g['username'];
							$pswd = $g['password'];
							$data = array(
								'id' => $id,
								'username' => $user,
								'password' => $pswd
							);
							
						}
						$this->session->set_userdata($data);

						redirect('dashboard');
				} else {
					$data['error'] = '<div class="alert alert-danger"> error </div>';
					$this->load->view('V_Login.php',$data);
				}
				
			} else {
				$this->load->view('V_Login.php');
			}
		}
	}

}
