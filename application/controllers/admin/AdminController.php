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
		$this->load->model('SummaryModel');
	}

	function index() {
		$data['title'] = 'List Kontrak';
		// $data['data_summary'] = $this->db->query('SELECT * FROM abm_summary')->result();
		$data['view'] = 'admin/Admin';
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
				auth_name($key_summary->dibuat_kontrak),
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
					data-nilaikontrak="'.$key_summary->nilai_kontrak.'"
					data-pdfurl="'.$key_summary->pdf_url.'">
	                Lihat
	              </button>
                  <button 
                    type="button" 
                    class="modaedit btn btn-block btn-outline-info btn-xs"  
                    data-toggle="modal" 
					data-target="#modal-edit" 
					data-idkontrak="'.$key_summary->id_id_kontrak.'"
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
					data-nilaikontrak="'.$key_summary->nilai_kontrak.'"
					data-dr="'.$key_summary->dr.'"
                    data-pat="'.$key_summary->pat.'"
                    data-top="'.$key_summary->top.'"
                    data-awak="'.$key_summary->awak.'"
                    data-frekuensi_pembayaran="'.$key_summary->frekuensi_pembayaran.'"
                    data-pd="'.$key_summary->pd.'"
                    data-prepaid="'.$key_summary->prepaid.'"
                    data-status_ppn="'.$key_summary->status_ppn.'"
                    data-ppn="'.$key_summary->ppn.'"
                    data-jumlah_unit="'.$key_summary->jumlah_unit.'"
                    data-satuan="'.$key_summary->satuan.'"
                    data-nilai_asumsi_perpanjangan="'.$key_summary->nilai_asumsi_perpanjangan.'"
                    data-tgl_perpanjangan="'.$key_summary->tgl_perpanjangan.'">
                    Ubah Data
	               </button>
	               <button
	               type="button"
	               class="export_schedule btn btn-block btn-outline-success btn-xs"
	               data-id="'.$key_summary->id_summary.'"
	               >
	               Export Schedule
	               </button>
	               <a title="Delete Data" href="javascript:void(0);" class="modahapus btn btn-block btn-outline-danger btn-xs" data-id="'.$key_summary->id_summary.'"">Hapus</a>
	               '
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

	function add_summary() {
		$data['title'] = 'Add Summary';
		$data['view'] = 'admin/add';
		$this->load->view('templates/header', $data);
	}

	function do_add_summary() {
		$data=$this->SummaryModel->summary_add();
		echo json_encode($data);
	}

	function delete_summary(){
		$data=$this->SummaryModel->summary_delete();
		echo json_encode($data);
	}

	function do_edit_summary() {
		$data=$this->SummaryModel->summary_edit();
		echo json_encode($data);
	}

	function do_upload_summary(){
		$config['upload_path']="./assets/images";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $data = array('upload_data' => $this->upload->data());
 
            $judul= $this->input->post('judul');
            $image= $data['upload_data']['file_name']; 
             
            $result= $this->SummaryModel->summary_upload($judul,$image);
            echo json_decode($result);
        }
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