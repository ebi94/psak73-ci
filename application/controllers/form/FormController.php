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

    function add_calculation($id_summary) {
		$data['title'] = 'Add Calculation';
		$data['id_summary'] = $id_summary;
		$data['id_kontrak'] = json_encode($this->FormModel->calculation_get_contract($id_summary));
		$data['view'] = 'form/calculation';
		$this->load->view('templates/header', $data);
	}

	function do_add_calculation() {
		$data=$this->FormModel->calculation_add();
		echo json_encode($data);
	}	
}