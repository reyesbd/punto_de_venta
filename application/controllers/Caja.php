<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caja extends CI_Controller {

	public function index()
	{
		$this->load->view('nombre_vista');
	}
}