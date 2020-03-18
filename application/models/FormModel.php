<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model{

	function calculation_add() {
		$prepaid_int = str_replace(".", "", $this->input->post('calculation_prepaid'));
		$nap_int = str_replace(".", "", $this->input->post('calculation_nilai_asumsi_perpanjangan'));
		$pat_int = str_replace(".", "", $this->input->post('calculation_pat'));
		$data = array(
            'dr' => $this->input->post('calculation_dr'),
            'pat' => $pat_int,
            'top' => $this->input->post('calculation_top'),
            'awak' => $this->input->post('calculation_awak'),
			'pd' => $this->input->post('calculation_pd'),
			'id_summary' => $this->input->post('calculation_id_summary'),
			'prepaid' => $prepaid_int,
			'status_ppn' => $this->input->post('calculation_status_ppn'),
			'ppn' => $this->input->post('calculation_ppn'),
			'jumlah_unit' => $this->input->post('calculation_jumlah_unit'),
			'satuan' => $this->input->post('calculation_satuan'),
			'nilai_asumsi_perpanjangan' => $nap_int,
			'tgl_perpanjangan' => $this->input->post('calculation_tgl_perpanjangan'),
			'frekuensi_pembayaran' => $this->input->post('calculation_frekuensi_pembayaran')
		);

		$result = $this->db->insert('t_calculation',$data);
		return $result;
	}

	function calculation_get_contract($id_summary) {
		// $query = $this->db->query("SELECT * FROM abm_summary");
		$query = $this->db->query('select * from abm_summary, t_kontrak where abm_summary.id = ".$id_summary." and t_kontrak.id = abm_summary.id_kontrak');
		return $query->result();
  }

}