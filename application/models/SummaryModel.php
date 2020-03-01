<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SummaryModel extends CI_Model{

      function summary_get_all() {
            $query = $this->db->query("SELECT * FROM abm_summary");
            return $query;
      }

	function summary_add() {
            $y1 = date('Y',strtotime($this->input->post('summary_startdate')));
            $y2 = date('Y',strtotime($this->input->post('summary_startdate')));

            $m1 = date('m',strtotime($this->input->post('summary_startdate')));
            $m2 = date('m',strtotime($this->input->post('summary_enddate')));

            $diff = (($y2 - $y1) * 12) + ($m2 - $m1);

            $kontrak_add_data = array(
                  'nama_pt' => $this->input->post('summary_namapt'),
                  'nomor_kontrak' => $this->input->post('summary_nomorkontrak'),
                  'vendor' => $this->input->post('summary_vendor'),
                  'created_by' => $this->session->userdata('ses_id')
            );
            $result_kontrak = $this->db->insert('t_kontrak',$kontrak_add_data);
            $id_kontrak = $this->db->insert_id();

		$summary_add_data = array(
                  'id_kontrak' => $id_kontrak,
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
                  'k_1' => $this->input->post('summary_k_1'),
                  'k_2' => $this->input->post('summary_k_2'),
                  'k_3' => $this->input->post('summary_k_3'),
                  'k_4' => $this->input->post('summary_k_4'),
                  'k_5' => $this->input->post('summary_k_5'),
                  'lokasi' => $this->input->post('summary_lokasi'),
                  'start_date' => $this->input->post('summary_startdate'),
                  'end_date' => $this->input->post('summary_enddate'),
                  'nilai_kontrak' => $this->input->post('summary_nilaikontrak'),
                  'periode_kontrak' => $diff
		);

		$result = $this->db->insert('abm_summary',$summary_add_data);
		return $result;
	}

}