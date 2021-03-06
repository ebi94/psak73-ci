<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SummaryController extends CI_Controller{
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
		$data['title'] = 'Add Summary';
		// $data['data_summary'] = $this->db->query('SELECT * FROM abm_summary')->result();
		$data['view'] = 'admin/summary';
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
					data-idsummary="'.$key_summary->id_summary.'"
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
	               class="export_schedule btn btn-block btn-outline-success btn-xs"
	               data-id="'.$key_summary->id_summary.'"
	               >
	               Export Schedule
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

	function add_summary($id_summary) {
        $data['title'] = 'Add Summary New';
        $data['id_summary'] = $id_summary;
        $query =
        // $this->db->query('SELECT sum.id, cont.id, cont.nama_pt, cont.nomor_kontrak, cont.vendor FROM abm_summary AS sum, t_kontrak AS cont WHERE sum.id = '.$id_summary.' AND cont.id = sum.id_kontrak');
        $this->db->query(
        	'SELECT
	        	sum.id AS sum_id,
				sum.id_kontrak AS id_kontrak,
	        	kon.id AS kon_id,
	        	kon.nama_pt AS kon_nama_pt,
	        	kon.nomor_kontrak AS kon_nomor_kontrak,
	        	kon.vendor AS kon_vendor
	        FROM
	        	abm_summary sum
		        LEFT JOIN t_kontrak kon ON sum.id_kontrak = kon.id WHERE sum.id_kontrak = '.$id_summary);
        $row = $query->row();
        $data['nama_pt'] = $row->kon_nama_pt;
		$data['nomor_kontrak'] = $row->kon_nomor_kontrak;
        $data['vendor'] = $row->kon_vendor;
        $data['id_kontrak'] = $row->id_kontrak;
		$data['view'] = 'admin/summary';
		$this->load->view('templates/header', $data);
	}

	function do_add_summary() {
		$data=$this->SummaryModel->summary_add();
		echo json_encode($data);
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