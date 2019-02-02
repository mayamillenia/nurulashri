<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_eventnurash extends CI_Controller {

//function parent harus di paling atas
	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('file');

		//load login model
		$this->load->library('session');
		
		//load modal database
		$this->load->model('M_Index');
		$this->load->model('EventNurash/M_eventnurash');

	}

	public function index()
	{
		$uw = $this->M_Index->logged_in();
		if ($this->M_Index->logged_in()) {

			$this->load->view('V_Header.php');
			$this->load->view('V_SideMenu.php');
			$this->load->view('EventNurash/V_eventnurash.php');
			$this->load->view('V_Footer.php');
		} else {
			redirect('login');
		}
	}

	public function UploadEventNurash()
	{
		$event_name = str_replace("'", "", $this->input->post('event_name'));
		$date =  $this->input->post('event_date');
		$event_date = date('Y-m-d',strtotime($date));
		$description = str_replace("'", "", $this->input->post('event_description'));
		$create_date = date('Y-m-d');

		//upload foto
		$config['upload_path']          = './assets/images/event';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']      		= '3000';
		$config['remove_spaces']        =  TRUE;
		$config['overwrite']			=  TRUE;
 
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		$image = $this->upload->do_upload('event_image');
		$data_image = $this->upload->data('file_name');

		$upload_kajian=array(
			'event_name'=>$event_name,
			'event_date'=>$event_date,
			'event_description'=> $description,
			'event_image'=> $data_image,
			'create_date' => $create_date
			);

		$this->M_eventnurash->UploadEventNurash($event_name,$event_date,$description,$data_image,$create_date);

		redirect('EventNurash/Upload');
	}

	public function Update()
	{
		$uw = $this->M_Index->logged_in();
		if ($this->M_Index->logged_in()) {

			$data['event'] = $this->M_eventnurash->showEventNurash();

			$this->load->view('V_Header.php');
			$this->load->view('V_SideMenu.php');
			$this->load->view('EventNurash/V_updateEvent.php',$data);
			$this->load->view('V_Footer.php');
		} else {
			redirect('login');
		}
	}

	public function UpdateKajian($id)
	{
		$uw = $this->M_Index->logged_in();
		if ($this->M_Index->logged_in()) {

			$data['event'] = $this->M_eventnurash->showEventNurashById($id);
			// echo "<pre>";
			// print_r($data['event']);
			// exit();

			$this->load->view('V_Header.php');
			$this->load->view('V_SideMenu.php');
			$this->load->view('EventNurash/V_editEvent.php',$data);
			$this->load->view('V_Footer.php');
		} else {
			redirect('login');
		}
	}

	public function EditEventNurash($id){
		$event_name = $this->input->post('event_name');
		$date =  $this->input->post('event_date');
		$event_date = date('Y-m-d',strtotime($date));
		$description = $this->input->post('event_description');
		$create_date = date('Y-m-d');

		//upload foto
		$config['upload_path']          = './assets/images/event';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']      		= '3000';
		$config['remove_spaces']        =  TRUE;
		$config['overwrite']			=  TRUE;
 
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		$image = $this->upload->do_upload('event_image');
		$data_image = $this->upload->data('file_name');
		//mengecek jika 
		// if ( ! $this->upload->do_upload('event_image')){
		//     $error = array('error' => $this->upload->display_errors());                
		//     print_r($error);                    
		//     exit();               
		// }else{
		// 	$error = array('error' => $this->upload->display_errors());                
		//     print_r($error);
		//     print_r($data_image);               
		//     exit();
		// }

		$upload_kajian=array(
			'event_name'=>$event_name,
			'event_date'=>$event_date,
			'event_description'=> $description,
			'event_image'=> $data_image
			);

		$this->M_eventnurash->EditEventNurash($event_name,$event_date,$description,$data_image,$id);

		redirect('EventNurash/Update');
	}
}
