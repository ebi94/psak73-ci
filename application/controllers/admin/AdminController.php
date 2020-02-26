<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('');
	        redirect($url);
		}

		$this->load->model('AuthModel');
	}

	function index() {
		$data['title'] = 'Summary';
		$data['data_summary'] = $this->db->query('SELECT * FROM abm_summary')->result();
		$data['view'] = 'admin/Admin';
		$this->load->view('templates/Header', $data);
	}

	function edit_summary() {
		$data_edit = array(
			'nama_pt' => $this->input->post('nama_pt'),
		);

		$this->db->where('id', $this->input->post('id'));
		if (! $this->db->update('abm_summary', $data_edit)) {
			return false;
		} else {
			return true;
		}
		
	}
}