<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SummaryModel extends CI_Model{

  function summary_get_all($param = array()) {
        // $query = $this->db->query("SELECT * FROM abm_summary");
        $where = "WHERE k.created_by = ".$this->session->userdata('ses_id')."";
        $where_pt = '';
        if (isset($param['nama_pt']) && ($param['nama_pt'] != '' || $param['nama_pt'] != null)) {
          $where_pt = 'AND k.nama_pt LIKE "%'.$param["nama_pt"].'%"';
        }
        $query = $this->db->query("
              SELECT
                    k.id AS id_id_kontrak,
                    k.nama_pt AS nama_pt,
                    k.nomor_kontrak AS nomor_kontrak,
                    k.vendor AS vendor,
                    k.pdf_url AS pdf_url,
                    sum.id AS id_summary,
                    sum.jenis_sewa AS jenis_sewa,
                    sum.serialnumber AS serialnumber,
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
                    sum.periode_kontrak AS periode_kontrak,
                    sum.page_in_pdf AS page_in_pdf,
                    k.created_by AS dibuat_kontrak,
                    c.dr AS dr,
                    c.pat AS pat,
                    c.top AS top,
                    c.awak AS awak,
                    c.frekuensi_pembayaran AS frekuensi_pembayaran,
                    c.pd AS pd,
                    c.prepaid AS prepaid,
                    c.status_ppn AS status_ppn,
                    c.ppn AS ppn,
                    c.jumlah_unit AS jumlah_unit,
                    c.satuan AS satuan,
                    c.nilai_asumsi_perpanjangan AS nilai_asumsi_perpanjangan,
                    c.tgl_perpanjangan AS tgl_perpanjangan
              FROM
                    abm_summary sum
                    LEFT JOIN t_kontrak k ON sum.id_kontrak = k.id
                    LEFT JOIN t_calculation c ON c.id_summary = sum.id
                    $where
                    $where_pt
                    ORDER BY k.created_at ASC
        ");
        return $query;
  }

      function check_calculation($id_summary){
            $where = "WHERE sum.id = '$id_summary'";
            $queryCheckCalculation = $this->db->query("
            SELECT
                  k.id AS id_kontrak,
                  u.name AS user_name,
                  sum.id AS id_summary,
                  c.id AS id_calculation
            FROM
                  abm_summary sum
                  LEFT JOIN t_kontrak k ON sum.id_kontrak = k.id
                  LEFT JOIN t_calculation c ON c.id_summary = sum.id
                  LEFT JOIN users u ON u.id = k.created_by
            $where
            ");

            return $queryCheckCalculation;
      }

	function summary_add($title,$id_kontrak,$diff,$nama_pt,$nomor_kontrak,$vendor,$created_by,$pageinpdf,$jenis_sewa,$serialnumber,$ns_a,$ns_a1,$ns_b,$ns_c1,$ns_c2,$ns_d1,$ns_d2,$is_1,$is_2,$is_3,$is_4,$is_5,$is_6,$is_7,$k_1,$k_2,$k_3,$k_4,$k_5,$lokasi,$start_date,$end_date,$kontrak_int,$pdf_up) {

            if ($title == 'Add Summary New') {
                  $id_kontrak_ = $id_kontrak;
                  $summary_add_data = array(
                          'id_kontrak' => $id_kontrak_,
                          'page_in_pdf' => $pageinpdf,
                          'jenis_sewa' => $jenis_sewa,
                          'serialnumber' => $serialnumber,
                          'ns_a' => $ns_a,
                          'ns_a1' => $ns_a1,
                          'ns_b' => $ns_b,
                          'ns_c1' => $ns_c1,
                          'ns_c2' => $ns_c2,
                          'ns_d1' => $ns_d1,
                          'ns_d2' => $ns_d2,
                          'is_1' => $is_1,
                          'is_2' => $is_2,
                          'is_3' => $is_3,
                          'is_4' => $is_4,
                          'is_5' => $is_5,
                          'is_6' => $is_6,
                          'is_7' => $is_7,
                          'k_1' => $k_1,
                          'k_2' => $k_2,
                          'k_3' => $k_3,
                          'k_4' => $k_4,
                          'k_5' => $k_5,
                          'lokasi' => $lokasi,
                          'start_date' => $start_date,
                          'end_date' => $end_date,
                          'nilai_kontrak' => $kontrak_int,
                          'periode_kontrak' => $diff
                  );

                  $result = $this->db->insert('abm_summary',$summary_add_data);
                  $id_summary = $this->db->insert_id();
            } else {
                  $kontrak_add_data = array(
                    'nama_pt' => $nama_pt,
                    'nomor_kontrak' => $nomor_kontrak,
                    'vendor' => $vendor,
                    'created_by' => $this->session->userdata('ses_id'),
                    'pdf_url' => $pdf_up
                  );
                  $result_kontrak = $this->db->insert('t_kontrak',$kontrak_add_data);
                  $id_kontrak_new = $this->db->insert_id();

                  $summary_add_data = array(
                          'id_kontrak' => $id_kontrak_new,
                          'page_in_pdf' => $pageinpdf,
                          'jenis_sewa' => $jenis_sewa,
                          'serialnumber' => $serialnumber,
                          'ns_a' => $ns_a,
                          'ns_a1' => $ns_a1,
                          'ns_b' => $ns_b,
                          'ns_c1' => $ns_c1,
                          'ns_c2' => $ns_c2,
                          'ns_d1' => $ns_d1,
                          'ns_d2' => $ns_d2,
                          'is_1' => $is_1,
                          'is_2' => $is_2,
                          'is_3' => $is_3,
                          'is_4' => $is_4,
                          'is_5' => $is_5,
                          'is_6' => $is_6,
                          'is_7' => $is_7,
                          'k_1' => $k_1,
                          'k_2' => $k_2,
                          'k_3' => $k_3,
                          'k_4' => $k_4,
                          'k_5' => $k_5,
                          'lokasi' => $lokasi,
                          'start_date' => $start_date,
                          'end_date' => $end_date,
                          'nilai_kontrak' => $kontrak_int,
                          'periode_kontrak' => $diff
                  );

                  $result = $this->db->insert('abm_summary',$summary_add_data);
                  $id_summary = $this->db->insert_id();
            }
            return $id_summary;
      }
      
      function summary_edit() {
            $id_kontrak = $this->input->post('summary_idkontrak');
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
            $this->db->where('id', $id_kontrak);
            $result_kontrak = $this->db->update('t_kontrak',$kontrak_edit_data);
            
            // Check have calculation
            $checkCalculation = $this->SummaryModel->check_calculation($id_summary);
            $resCalculation = $checkCalculation->row();
            $idCalculation = $resCalculation->id_calculation;
            if($idCalculation !== null){
                  $prepaid_int = str_replace(".", "", $this->input->post('summary_prepaid'));
                  $nap_int = str_replace(".", "", $this->input->post('summary_nilai_asumsi_perpanjangan'));
                  $pat_int = str_replace(".", "", $this->input->post('summary_pat'));
                  $calculation_edit_data = array(
                        'dr' => $this->input->post('summary_dr'),
                        'pat' => $pat_int,
                        'top' => $this->input->post('summary_top'),
                        'awak' => $this->input->post('summary_awak'),
                        'frekuensi_pembayaran' => $this->input->post('summary_frekuensi'),
                        'pd' => $this->input->post('summary_pd'),
                        'prepaid' => $prepaid_int,
                        'status_ppn' => $this->input->post('summary_status_ppn'),
                        'ppn' => $this->input->post('summary_ppn'),
                        'jumlah_unit' => $this->input->post('summary_jumlah_unit'),
                        'satuan' => $this->input->post('summary_satuan'),
                        'nilai_asumsi_perpanjangan' => $nap_int,
                        'tgl_perpanjangan' => $this->input->post('summary_tgl_perpanjangan')
                  );
                  $this->db->where('id_summary', $id_summary);
                  $result_calculation = $this->db->update('t_calculation',$calculation_edit_data);
            } else {
                  $prepaid_int = str_replace(".", "", $this->input->post('summary_prepaid'));
                  $nap_int = str_replace(".", "", $this->input->post('summary_nilai_asumsi_perpanjangan'));
                  $pat_int = str_replace(".", "", $this->input->post('summary_pat'));
                  $data_add_calculation = array(
                  'dr' => $this->input->post('summary_dr'),
                  'pat' => $pat_int,
                  'top' => $this->input->post('summary_top'),
                  'awak' => $this->input->post('summary_awak'),
                  'pd' => $this->input->post('summary_pd'),
                  'id_summary' => $id_summary,
                  'prepaid' => $prepaid_int,
                  'status_ppn' => $this->input->post('summary_status_ppn'),
                  'ppn' => $this->input->post('summary_ppn'),
                  'jumlah_unit' => $this->input->post('summary_jumlah_unit'),
                  'satuan' => $this->input->post('summary_satuan'),
                  'nilai_asumsi_perpanjangan' => $nap_int,
                  'tgl_perpanjangan' => $this->input->post('summary_tgl_perpanjangan'),
                  'frekuensi_pembayaran' => $this->input->post('summary_frekuensi')
                  );
                  $result_calculation = $this->db->insert('t_calculation',$data_add_calculation);
            }
            // End Check have calculation

            $kontrak_int = str_replace(".", "", $this->input->post('summary_nilaikontrak'));
		$summary_edit_data = array(
                  'id_kontrak' => $id_kontrak,
                  'jenis_sewa' => $this->input->post('summary_jenissewa'),
                  'page_in_pdf' => $this->input->post('summary_pageinpdf'),
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
    $id_summary = $this->input->post('idSummary');
    $this->db->where('id', $id_summary);
    if (! $this->db->delete('abm_summary')) {
      return false;
    }
    $this->db->where('id_summary', $id_summary);
    if (! $this->db->delete('t_calculation')) {
          return false;
    }
    return true;
  }

}