<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function get_usuario($email,$cve){
        $this->db->where('email',$email);
        $this->db->where('cve',$cve);
    	$query=$this->db->get('usuarios');

    	if ($query->row()) {
    		return $query->row();
    	}else{
    		return false;
    	}
    }

}