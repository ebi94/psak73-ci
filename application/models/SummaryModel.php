<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SummaryModel extends CI_Model{

      function summary_get_all() {
            // $query = $this->db->query("SELECT * FROM abm_summary");
            $query = $this->db->query("
                  SELECT
                        k.id AS id_id_kontrak,
                        k.nama_pt AS nama_pt,
                        k.nomor_kontrak AS nomor_kontrak,
                        k.vendor AS vendor,
                        sum.id AS id_summary,
                        sum.jenis_sewa AS jenis_sewa,
                        sum.ns_a AS ns_a,
                        sum.ns_b AS ns_b,
                        sum.ns_c1 AS ns_c1,
                        sum.ns_c2 AS ns_c2,
                        sum.ns_d1 AS ns_d1,
                        sum.ns_d2 AS ns_d2,
                        sum.is_1 AS is_1,
                        sum.is_2 AS is_2,
                        sum.is_3 AS is_3,
                        sum.is_4 AS is_4,
                        sum.is_5 As is_5,
                        sum.is_6 AS is_6,
                        sum.is_7 AS is_7,
                        sum.k_1 AS komponen,
                        sum.k_2 AS komponen_dalam_kontrak,
                        sum.k_3 AS komponen_sewa,
                        sum.k_4 AS penyewa_dapat_manfaat,
                        sum.k_5 AS ketergantungan_tinggi_asset,
                        sum.lokasi AS lokasi,
                        sum.start_date AS start_date,
                        sum.end_date AS end_date,
                        sum.nilai_kontrak AS nilai_kontrak,
                        sum.periode_kontrak AS periode_kontrak
                  FROM
                        `t_kontrak` k
                        LEFT JOIN abm_summary sum ON sum.id_kontrak = k.id
                        ORDER BY k.created_at ASC
            ");
            return $query;
      }

	function summary_add() {
            $y1 = date('Y',strtotime($this->input->post('summary_startdate')));
            $y2 = date('Y',strtotime($this->input->post('summary_enddate')));

            $m1 = date('m',strtotime($this->input->post('summary_startdate')));
            $m2 = date('m',strtotime($this->input->post('summary_enddate')));

            $diff = (($y2 - $y1) * 12) + ($m2 - $m1);

            if ($this->input->post('title') == 'Add Summary New') {
                  $id_kontrak = $this->input->post('id_kontrak');
                  $kontrak_int = str_replace(".", "", $this->input->post('summary_nilaikontrak'));
                  $summary_add_data = array(
                          'id_kontrak' => $id_kontrak,
                          'jenis_sewa' => $this->input->post('summary_jenissewa'),
                          'serialnumber' => $this->input->post('summary_serialnumber'),
                          'ns_a' => $this->input->post('summary_nsa'),
                          'ns_a1' => $this->input->post('summary_nsa1'),
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
                          'nilai_kontrak' => $kontrak_int,
                          'periode_kontrak' => $diff
                  );

                  $result = $this->db->insert('abm_summary',$summary_add_data);
                  $id_summary = $this->db->insert_id();
            } else {
                  $kontrak_add_data = array(
                    'nama_pt' => $this->input->post('summary_namapt'),
                    'nomor_kontrak' => $this->input->post('summary_nomorkontrak'),
                    'vendor' => $this->input->post('summary_vendor'),
                    'created_by' => $this->session->userdata('ses_id')
                  );
                  $result_kontrak = $this->db->insert('t_kontrak',$kontrak_add_data);
                  $id_kontrak = $this->db->insert_id();

                  $kontrak_int = str_replace(".", "", $this->input->post('summary_nilaikontrak'));
                  $summary_add_data = array(
                          'id_kontrak' => $id_kontrak,
                          'jenis_sewa' => $this->input->post('summary_jenissewa'),
                          'serialnumber' => $this->input->post('summary_serialnumber'),
                          'ns_a' => $this->input->post('summary_nsa'),
                          'ns_a1' => $this->input->post('summary_nsa1'),
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
                          'nilai_kontrak' => $kontrak_int,
                          'periode_kontrak' => $diff
                  );

                  $result = $this->db->insert('abm_summary',$summary_add_data);
                  $id_summary = $this->db->insert_id();
            }
            return $id_summary;
      }
      
      function summary_edit() {
            $id_summary = $this->input->post('summary_idsummary');
            $y1 = date('Y',strtotime($this->input->post('summary_startdate')));
            $y2 = date('Y',strtotime($this->input->post('summary_enddate')));

            $m1 = date('m',strtotime($this->input->post('summary_startdate')));
            $m2 = date('m',strtotime($this->input->post('summary_enddate')));

            $diff = (($y2 - $y1) * 12) + ($m2 - $m1);

            $kontrak_edit_data = array(
                  'nama_pt' => $this->input->post('summary_namapt'),
                  'nomor_kontrak' => $this->input->post('summary_nomorkontrak'),
                  'vendor' => $this->input->post('summary_vendor'),
                  'created_by' => $this->session->userdata('ses_id')
            );
            $result_kontrak = $this->db->insert('t_kontrak',$kontrak_edit_data);
            $id_kontrak = $this->db->insert_id();

            $kontrak_int = str_replace(".", "", $this->input->post('summary_nilaikontrak'));
		$summary_edit_data = array(
                  'id_kontrak' => $id_kontrak,
                  'jenis_sewa' => $this->input->post('summary_jenissewa'),
                  'serialnumber' => $this->input->post('summary_serialnumber'),
                  'ns_a' => $this->input->post('summary_nsa'),
                  'ns_a1' => $this->input->post('summary_nsa1'),
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
                  'nilai_kontrak' => $kontrak_int,
                  'periode_kontrak' => $diff
		);

            $this->db->where('id', $id_summary);
		$result = $this->db->update('abm_summary',$summary_edit_data);
            return true;
      }
      
      function summary_delete(){
            $id_summary = $this->input->post('summary_idsummary');
		$this->db->where('id', $id_summary);
		$result = $this->db->delete('abm_summary');
            return true;
	}

}