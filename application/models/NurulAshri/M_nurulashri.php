<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nurulashri extends CI_Model{

	public function __construct()
    {
      $this->load->database();
      $this->load->library('encrypt');

    }

  public function main_menu()
  {
      $sql = "SELECT * FROM info_kajian ORDER BY tanggal_kajian DESC LIMIT 4";
      $run =  $this->db->query($sql);
      return $run->result_array();
  }

}

