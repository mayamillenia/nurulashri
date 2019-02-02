<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kajianmuslim extends CI_Controller {

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
		$this->load->model('InfoKajian/M_infokajian');

	}

	public function index()
	{
		$uw = $this->M_Index->logged_in();
		if ($this->M_Index->logged_in()) {

			$this->load->view('V_Header.php');
			$this->load->view('V_SideMenu.php');
			$this->load->view('InfoKajian/V_UploadKajian.php');
			$this->load->view('V_Footer.php');
		} else {
			redirect('login');
		}
	}

	public function uploadkajian(){
		$judul_kajian = str_replace("'", "", $this->input->post('judul_kajian'));
		$pemateri_kajian = $this->input->post('pemateri_kajian');
		$tanggal = $this->input->post('tanggal_kajian');
		$tanggal_kajian = date('Y-m-d',strtotime($tanggal));
		$deskripsi_kajian = str_replace("'", "", $this->input->post('deskripsi_kajian'));
		$tanggal_upload = date('Y-m-d');

		//upload foto
		$config['upload_path']          = './assets/images/kajian';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['remove_spaces']        =  TRUE;
		$config['overwrite']			=  TRUE;
 
		$this->load->library('upload');
		$this->upload->initialize($config);

		$this->upload->do_upload('image_kajian');
		$data_image = $this->upload->data('file_name');

		$upload_kajian=array(
			'judul_kajian'=>$judul_kajian,
			'tanggal_kajian'=>$tanggal_kajian,
			'pemateri_kajian'=>$pemateri_kajian,
			'deskripsi_kajian'=> $deskripsi_kajian,
			'image_kajian'=> $data_image,
			'tanggal_upload' => $tanggal_upload
			);

		//simpan data 
		$this->M_infokajian->uploadkajian($judul_kajian,$tanggal_kajian,$pemateri_kajian,$deskripsi_kajian,$data_image,$tanggal_upload);

		redirect('KajianMuslim/Newest');
 
	}

	public function Kajian()
	{
		if ($this->M_Index->logged_in()) {

			$data['kajian']=$this->M_infokajian->ShowKajian();

			$this->load->view('V_Header.php');
			$this->load->view('V_SideMenu.php');
			$this->load->view('InfoKajian/V_Kajian.php',$data);
			$this->load->view('V_Footer.php');
		} else {
			redirect('login');
		}
	}

	public function EditKajian($id)
	{
		if ($this->M_Index->logged_in()) {

			$data['kajian']=$this->M_infokajian->EditKajian($id);

			$this->load->view('V_Header.php');
			$this->load->view('V_SideMenu.php');
			$this->load->view('InfoKajian/V_EditKajian.php',$data);
			$this->load->view('V_Footer.php');
		} else {
			redirect('login');
		}
	}

	public function UpdateKajian($id)
	{
		$judul_kajian = str_replace("'", "", $this->input->post('judul_kajian'));
		$pemateri_kajian = $this->input->post('pemateri_kajian');
		$tanggal = $this->input->post('tanggal_kajian');
		$tanggal_kajian = date('Y-m-d',strtotime($tanggal));
		$deskripsi_kajian = str_replace("'", "", $this->input->post('deskripsi_kajian'));

		//upload foto
		$config['upload_path']          = './assets/images/kajian';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']      		= '3000';
		$config['remove_spaces']        =  TRUE;
		$config['overwrite']			=  TRUE;
 
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		$image_kajian = $this->upload->do_upload('image_kajian');
		//mengecek jika 
		// if ( ! $this->upload->do_upload('image_kajian')){
		//     $error = array('error' => $this->upload->display_errors());                
		//     print_r($error);                    exit();               
		// }
		$data_image = $this->upload->data('file_name');

		$upload_kajian=array(
			'judul_kajian'=>$judul_kajian,
			'tanggal_kajian'=>$tanggal_kajian,
			'pemateri_kajian'=>$pemateri_kajian,
			'deskripsi_kajian'=> $deskripsi_kajian,
			'image_kajian'=> $data_image
			);

		$this->M_infokajian->UpdateKajian($judul_kajian,$tanggal,$pemateri_kajian,$deskripsi_kajian,$data_image,$id);

		redirect('KajianMuslim/Kajian');
	}

	public function hapusKajian(){
		$id = $this->input->post('id');
		$this->M_infokajian->hapusKajian($id);
	}

}
