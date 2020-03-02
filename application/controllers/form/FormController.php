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
		$query =
        $this->db->query('SELECT sum.id, cont.id, cont.nama_pt, cont.nomor_kontrak, cont.vendor FROM abm_summary AS sum, t_kontrak AS cont WHERE sum.id = '.$id_summary.' AND cont.id = sum.id_kontrak');
        $row = $query->row();
        $data['nama_pt'] = $row->nama_pt;
        $data['nomor_kontrak'] = $row->nomor_kontrak;
        $data['vendor'] = $row->vendor;
		$data['view'] = 'form/calculation';
		$this->load->view('templates/header', $data);
	}

	function do_add_calculation() {
		$data=$this->FormModel->calculation_add();
		echo json_encode($data);
	}	
}