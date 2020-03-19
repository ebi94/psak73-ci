<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfigurationController extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('');
	        redirect($url);
		}

		$this->load->model('AuthModel');
		$this->load->model('SummaryModel');
	}

	function index() {
		$data['title'] = 'Configuration';
		$data['view'] = 'admin/configuration';
		$this->load->view('templates/header', $data);
	}

}
