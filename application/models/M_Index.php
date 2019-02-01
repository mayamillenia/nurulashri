<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Index extends CI_Model{

	public function __construct()
    {
            $this->load->database();
            $this->load->library('encrypt');

    }

    public function logged_in(){
        return $this->session->userdata('id');      
    }

    public function login($username,$password){
        $query = "SELECT * FROM login_admin WHERE username = '$username' AND password = '$password' limit 1";
        $run = $this->db->query($query);

        $row = $run->num_rows();
          if($row == 1){
              return true;
          }else{
              return false;
          }
    }

    public function loginwuwuuw($username,$password){
        $query = "SELECT * FROM login_admin WHERE username = '$username' AND password = '$password'";
        $run = $this->db->query($query);
        return $run->result_array();
    }
}

