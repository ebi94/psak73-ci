<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model{

	function calculation_add() {
		$data = array(
            'dr' => $this->input->post('calculation_dr'),
            'pat' => $this->input->post('calculation_pat'),
            'top' => $this->input->post('calculation_top'),
            'awak' => $this->input->post('calculation_awak'),
			'pd' => $this->input->post('calculation_pd'),
			'id_summary' => $this->input->post('calculation_id_summary'),
			'prepaid' => $this->input->post('calculation_prepaid'),
			'status_ppn' => $this->input->post('calculation_status_ppn'),
			'ppn' => $this->input->post('calculation_ppn'),
			'jumlah_unit' => $this->input->post('calculation_jumlah_unit'),
			'satuan' => $this->input->post('calculation_satuan'),
			'nilai_asumsi_perpanjangan' => $this->input->post('calculation_nilai_asumsi_perpanjangan'),
			'tgl_perpanjangan' => $this->input->post('calculation_tgl_perpanjangan')
		);

		$result = $this->db->insert('t_calculation',$data);
		return $result;
	}

}