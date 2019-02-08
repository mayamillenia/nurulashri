<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_infokajian extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
	}

	public function uploadkajian($judul_kajian,$tanggal_kajian,$pemateri_kajian,$deskripsi_kajian,$image_kajian,$tanggal_upload){
		$sql = "INSERT INTO info_kajian 
				(judul_kajian, tanggal_kajian, pemateri_kajian, deskripsi_kajian, image_kajian, tanggal_upload)
				VALUES('$judul_kajian','$tanggal_kajian','$pemateri_kajian','$deskripsi_kajian','$image_kajian','$tanggal_upload')";
		$this->db->query($sql);

	}

	public function ShowKajian()
	{
		$sql = "SELECT * FROM info_kajian";
		$run = $this->db->query($sql);
		return $run->result_array();
	}

	public function EditKajian($id)
	{
		$sql = "SELECT * FROM info_kajian WHERE id='$id'";
		$run = $this->db->query($sql);
		return $run->result_array();
	}

	public function UpdateKajian($judul_kajian, $tanggal_kajian, $pemateri_kajian, $deskripsi_kajian, $image_kajian,$id){
		$sql = "UPDATE info_kajian 
				SET judul_kajian = '$judul_kajian', tanggal_kajian = '$tanggal_kajian', pemateri_kajian = '$pemateri_kajian', deskripsi_kajian = '$deskripsi_kajian', image_kajian = '$image_kajian'
				WHERE id = '$id'";
		$run = $this->db->query($sql);
	}

	public function UpdateKajian2($judul_kajian, $tanggal_kajian, $pemateri_kajian, $deskripsi_kajian,$id){
		$sql = "UPDATE info_kajian 
				SET judul_kajian = '$judul_kajian', tanggal_kajian = '$tanggal_kajian', pemateri_kajian = '$pemateri_kajian', deskripsi_kajian = '$deskripsi_kajian'
				WHERE id = '$id'";
		$run = $this->db->query($sql);
	}

	public function hapusKajian($id)
	{
		$sql = "DELETE FROM info_kajian WHERE id = '$id'";
		$run = $this->db->query($sql);
	}

}