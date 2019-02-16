<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_nurulashri extends CI_Controller {

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
		$this->load->model('NurulAshri/M_nurulashri');

	}

	public function index()
	{
		$data['nurash'] = $this->M_nurulashri->main_menu();
		$this->load->view('NurulAshri/main_menu.php',$data);
	}

}
