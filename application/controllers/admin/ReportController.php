<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('');
	        redirect($url);
		}

		$this->load->model('AuthModel');
		$this->load->model('SummaryModel');
	}

	function index() {
		$data['title'] = 'Report';
		$data['view'] = 'admin/report';
		$this->load->view('templates/header', $data);
	}

	function list_summary() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$query = $this->SummaryModel->summary_get_all();

		$data = [];
		$i = 1;

		foreach ($query->result() as $key_summary) {
			$data[] = array(
				$i++,
				$key_summary->nama_pt,
				$key_summary->nomor_kontrak,
				$key_summary->vendor,
				$key_summary->jenis_sewa,
				$key_summary->lokasi,
				$key_summary->start_date,
				$key_summary->end_date,
				$key_summary->nilai_kontrak,
				'<button 
	                type="button" 
	                class="modalihat btn btn-block btn-outline-primary btn-xs"  
	                data-toggle="modal" 
	                data-target="#modal-lihat"
	                data-idsummary="'.$key_summary->id_summary.'"
	                data-title="'.$key_summary->nama_pt.'" 
	                data-nomorkontrak="'.$key_summary->nomor_kontrak.'"
	                data-vendor="'.$key_summary->vendor.'"
	      			data-jenissewa="'.$key_summary->jenis_sewa.'"
	                data-nsa="'.$key_summary->ns_a.'"
	                data-nsb="'.$key_summary->ns_b.'"
	                data-nsc="'.$key_summary->ns_c1.'"
	                data-nsc2="'.$key_summary->ns_c2.'"
	                data-nsd1="'.$key_summary->ns_d1.'"
	                data-nsd2="'.$key_summary->ns_d2.'"
	                data-is1="'.$key_summary->is_1.'"
	                data-is2="'.$key_summary->is_2.'"
	                data-is3="'.$key_summary->is_3.'"
	                data-is4="'.$key_summary->is_4.'"
	                data-is5="'.$key_summary->is_5.'"
	                data-is6="'.$key_summary->is_6.'"
	                data-is7="'.$key_summary->is_7.'"
	                data-komponen="'.$key_summary->komponen.'"
	                data-lokasi="'.$key_summary->lokasi.'"
	                data-startdate="'.$key_summary->start_date.'"
	                data-enddate="'.$key_summary->end_date.'"
	                data-nilaikontrak="'.$key_summary->nilai_kontrak.'">
	                Lihat
	              </button>
                  <button 
                    type="button" 
                    class="modaedit btn btn-block btn-outline-info btn-xs"  
                    data-toggle="modal" 
                    data-target="#modal-edit" 
                    data-id="'.$key_summary->id_summary.'"
					data-namapt="'.$key_summary->nama_pt.'" 
					data-nomorkontrak="'.$key_summary->nomor_kontrak.'"
					data-vendor="'.$key_summary->vendor.'"
					data-jenissewa="'.$key_summary->jenis_sewa.'"
					data-nsa="'.$key_summary->ns_a.'"
					data-nsb="'.$key_summary->ns_b.'"
					data-nsc="'.$key_summary->ns_c1.'"
					data-nsc2="'.$key_summary->ns_c2.'"
					data-nsd1="'.$key_summary->ns_d1.'"
					data-nsd2="'.$key_summary->ns_d2.'"
					data-is1="'.$key_summary->is_1.'"
					data-is2="'.$key_summary->is_2.'"
					data-is3="'.$key_summary->is_3.'"
					data-is4="'.$key_summary->is_4.'"
					data-is5="'.$key_summary->is_5.'"
					data-is6="'.$key_summary->is_6.'"
					data-is7="'.$key_summary->is_7.'"
					data-komponen="'.$key_summary->komponen.'"
					data-lokasi="'.$key_summary->lokasi.'"
					data-startdate="'.$key_summary->start_date.'"
					data-enddate="'.$key_summary->end_date.'"
					data-nilaikontrak="'.$key_summary->nilai_kontrak.'">
                    Ubah
	               </button>
	               <button 
					type="button" 
					class="modahapus btn btn-block btn-outline-danger btn-xs" 
					data-toggle="modal" 
					data-id="'.$key_summary->id_summary.'" 
					data-target="#modal-hapus">
					Hapus
	               </button>'
			);
		}

		$result = array(
		    "draw" => $draw,
		    "recordsTotal" => $query->num_rows(),
		    "recordsFiltered" => $query->num_rows(),
		    "data" => $data
		);

		echo json_encode($result);
		exit();
	}

}