<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_eventnurash extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
	}

	public function UploadEventNurash($event_name,$event_date,$description,$data_image,$create_date)
	{
		$sql = "INSERT INTO event_nurash (event_name, event_date, event_description, event_image, event_created)
				VALUES ('$event_name', '$event_date', '$description', '$data_image', '$create_date')";
		$run = $this->db->query($sql);
	}

	public function showEventNurash()
	{
		$sql = "SELECT * FROM event_nurash";
		$run = $this->db->query($sql);
		return $run->result_array();
	}

	public function showEventNurashById($id)
	{
		$sql = "SELECT * FROM event_nurash WHERE event_id = '$id'";
		$run = $this->db->query($sql);
		return $run->result_array();
	}

	public function EditEventNurash($event_name,$event_date,$event_description,$event_image,$id)
	{
		$sql = "UPDATE event_nurash 
				SET event_name = '$event_name', event_date = '$event_date', event_description = '$event_description', event_image = '$event_image'
				WHERE event_id = '$id'";
		$run = $this->db->query($sql);
	}

}