<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

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
		$uw = $this->M_Index->logged_in();
		if ($this->M_Index->logged_in()) {

			$this->load->view('V_Header.php');
			$this->load->view('V_SideMenu.php');
			$this->load->view('V_Dashboard.php');
			$this->load->view('V_Footer.php');
		} else {
			redirect('login');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
