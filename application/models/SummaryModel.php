<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SummaryModel extends CI_Model{

      function summary_get_all() {
            $query = $this->db->query("SELECT * FROM abm_summary");
            return $query;
      }

	function summary_add() {
		$summary_add_data = array(
            'nama_pt' => $this->input->post('summary_namapt'),
            'nomor_kontrak' => $this->input->post('summary_nomorkontrak'),
            'vendor' => $this->input->post('summary_vendor'),
            'jenis_sewa' => $this->input->post('summary_jenissewa'),
            'ns_a' => $this->input->post('summary_nsa'),
            'ns_b' => $this->input->post('summary_nsb'),
            'ns_c1' => $this->input->post('summary_nsc1'),
            'ns_c2' => $this->input->post('summary_nsc2'),
            'ns_d1' => $this->input->post('summary_nsd1'),
            'ns_d2' => $this->input->post('summary_nsd2'),
            'is_1' => $this->input->post('summary_is1'),
            'is_2' => $this->input->post('summary_is2'),
            'is_3' => $this->input->post('summary_is3'),
            'is_4' => $this->input->post('summary_is4'),
            'is_5' => $this->input->post('summary_is5'),
            'is_6' => $this->input->post('summary_is6'),
            'is_7' => $this->input->post('summary_is7'),
            'komponen' => $this->input->post('summary_komponen'),
            'lokasi' => $this->input->post('summary_lokasi'),
            'start_date' => $this->input->post('summary_startdate'),
            'end_date' => $this->input->post('summary_enddate'),
            'nilai_kontrak' => $this->input->post('summary_nilaikontrak')
		);

		$result = $this->db->insert('abm_summary',$summary_add_data);
		return $result;
	}

}