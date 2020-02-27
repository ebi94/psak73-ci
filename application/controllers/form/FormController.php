<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller{

    function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('');
	        redirect($url);
		}

		$this->load->model('FormModel');
	}

    function add_calculation() {
		$data['title'] = 'Add Calculation';
		$data['view'] = 'form/calculation';
		$this->load->view('templates/header', $data);
	}

	function do_add_calculation() {
		$data=$this->FormModel->calculation_add();
		echo json_encode($data);
	}	
}