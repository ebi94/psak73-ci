<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExportController extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('');
	        redirect($url);
		}

		$this->load->model('AuthModel');
	}

	function summary(){
		
	}
}