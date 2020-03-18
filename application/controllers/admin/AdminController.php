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
		$data['title'] = 'List Assets';
		// $data['data_summary'] = $this->db->query('SELECT * FROM abm_summary')->result();
		$data['view'] = 'admin/Admin';
		$this->load->view('templates/header', $data);
	}

	function format_rupiah($angka){
	
		$result = "Rp " . number_format($angka,0,',','.');
		return $result;
	 
	}

	function list_summary() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$query = $this->SummaryModel->summary_get_all();

		$data = [];
		$i = 1;

		foreach ($query->result() as $key_summary) {
			$created_byId = $key_summary->dibuat_kontrak;
			$is_superadmin = $this->session->userdata('level');
			$log_sesId = $this->session->userdata('ses_id');
			
			$nilaikontrak = $key_summary->nilai_kontrak;
			if (is_numeric($nilaikontrak)){
				$setInt = (int)$nilaikontrak;
				$set_rupiah = number_format($setInt,0,',','.');
				$show_nilaikontrak = 'Rp '.$set_rupiah.' ,-';
			} else {
				$show_nilaikontrak = $nilaikontrak;
			}

			$prepaid = $key_summary->prepaid;
			if (is_numeric($prepaid)){
				$setInt = (int)$prepaid;
				$set_rupiah = number_format($setInt,0,',','.');
				$showprepaid = 'Rp '.$set_rupiah.' ,-';
			} else {
				$showprepaid = $prepaid;
			}

			$pat = $key_summary->pat;
			if (is_numeric($pat)){
				$setInt = (int)$pat;
				$set_rupiah = number_format($setInt,0,',','.');
				$showpat = 'Rp '.$set_rupiah.' ,-';
			} else {
				$showpat = $pat;
			}

			$nap = $key_summary->nilai_asumsi_perpanjangan;
			if (is_numeric($nap)){
				$setInt = (int)$nap;
				$set_rupiah = number_format($setInt,0,',','.');
				$shownap = 'Rp '.$set_rupiah.' ,-';
			} else {
				$shownap = $nap;
			}
			// 
			$lease_non_lease = "";
			$y1_l = date('Y',strtotime($key_summary->tgl_perpanjangan));
			$y2_l = date('Y',strtotime('2019-12-31'));

			$m1_l = date('m',strtotime($key_summary->tgl_perpanjangan));
			$m2_l = date('m',strtotime('2019-12-31'));

			$lease_non_lease_hasil = (($y1_l - $y2_l) * 12) + ($m1_l - $m2_l);
			if ($lease_non_lease_hasil <= 12) {
				$btnExportSchedule = '';
			} else {
				$btnExportSchedule = '<button
				type="button"
				class="export_schedule btn btn-block btn-outline-success btn-xs"
				data-id="'.$key_summary->id_summary.'"
				>
				Export Schedule
				</button>';
			}
			$btnLihat = '<button type="button" class="modalihat btn btn-block btn-outline-primary btn-xs" data-toggle="modal"
				data-target="#modal-lihat" data-idkontrak="'.$key_summary->id_id_kontrak.'"
				data-iduser="'.$key_summary->dibuat_kontrak.'" data-idsummary="'.$key_summary->id_summary.'"
				data-title="'.$key_summary->nama_pt.'" data-nomorkontrak="'.$key_summary->nomor_kontrak.'"
				data-vendor="'.$key_summary->vendor.'" data-jenissewa="'.$key_summary->jenis_sewa.'"
				data-nsa="'.$key_summary->ns_a.'" data-nsb="'.$key_summary->ns_b.'" data-nsc1="'.$key_summary->ns_c1.'"
				data-nsc2="'.$key_summary->ns_c2.'" data-nsd1="'.$key_summary->ns_d1.'" data-nsd2="'.$key_summary->ns_d2.'"
				data-is1="'.$key_summary->is_1.'" data-is2="'.$key_summary->is_2.'" data-is3="'.$key_summary->is_3.'"
				data-is4="'.$key_summary->is_4.'" data-is5="'.$key_summary->is_5.'" data-is6="'.$key_summary->is_6.'"
				data-is7="'.$key_summary->is_7.'" data-komponen="'.$key_summary->komponen.'"
				data-lokasi="'.$key_summary->lokasi.'" data-startdate="'.$key_summary->start_date.'"
				data-enddate="'.$key_summary->end_date.'" data-nilaikontrak="'.$show_nilaikontrak.'"
				data-pdfurl="'.$key_summary->pdf_url.'" data-pdfpage="'.$key_summary->page_in_pdf.'"
				data-dr="'.$key_summary->dr.'" data-pat="'.$showpat.'" data-top="'.$key_summary->top.'"
				data-awak="'.$key_summary->awak.'" data-frekuensipembayaran="'.$key_summary->frekuensi_pembayaran.'"
				data-pd="'.$key_summary->pd.'" data-prepaid="'.$showprepaid.'" data-ppn="'.$key_summary->ppn.'"
				data-statusppn="'.$key_summary->status_ppn.'" data-jumlahunit="'.$key_summary->jumlah_unit.'"
				data-satuan="'.$key_summary->satuan.'" data-nilaiasumsi="'.$shownap.'"
				data-tglperpanjangan="'.$key_summary->tgl_perpanjangan.'">
				Lihat
			</button>';

			$actionCan = ''.$btnLihat.'
		  <button 
			type="button" 
			class="modaedit btn btn-block btn-outline-info btn-xs"  
			data-toggle="modal" 
			data-target="#modal-edit" 
			data-backdrop="static"
			data-keyboard="false"
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
		   '.$btnExportSchedule.'
		   <a title="Delete Data" href="javascript:void(0);" class="modahapus btn btn-block btn-outline-danger btn-xs" data-id="'.$key_summary->id_summary.'"">Hapus</a>
		   ';
		   $actionCannot = ''.$btnLihat.'
		  '.$btnExportSchedule.'  
		  ';

		   if ($is_superadmin == 0) {
				$action = $actionCan;
		   } elseif ($log_sesId == $created_byId) {
				$action = $actionCan;
		   } else {
				$action = $actionCannot;
		   }
			$data[] = array(
				$i++,
				$key_summary->nama_pt,
				$key_summary->nomor_kontrak,
				$key_summary->vendor,
				$key_summary->jenis_sewa,
				$key_summary->lokasi,
				$key_summary->start_date,
				$key_summary->end_date,
				$show_nilaikontrak,
				auth_name($key_summary->dibuat_kontrak),
				$action
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
		$config['upload_path']="./assets/pdf";
        $config['allowed_types']='gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload',$config);
        $this->upload->do_upload('file');

        $data   = array('upload_data' => $this->upload->data());
        $pdf_up = $data['upload_data']['file_name'];

		$title = $this->input->post('title');
		$id_kontrak = $this->input->post('id_kontrak');

		$y1 = date('Y',strtotime($this->input->post('start_date')));
		$y2 = date('Y',strtotime($this->input->post('end_date')));

		$m1 = date('m',strtotime($this->input->post('start_date')));
		$m2 = date('m',strtotime($this->input->post('end_date')));

		$diff = (($y2 - $y1) * 12) + ($m2 - $m1);

		$nama_pt = $this->input->post('nama_pt');
		$nomor_kontrak = $this->input->post('nomor_kontrak');
		$vendor = $this->input->post('vendor');
		$created_by = $this->session->userdata('ses_id');

		$pageinpdf = $this->input->post('pageinpdf');
		$jenis_sewa = $this->input->post('jenis_sewa');
		$serialnumber = $this->input->post('serialnumber');
		$ns_a = $this->input->post('nsa');
		$ns_a1 = $this->input->post('nsa1');
		$ns_b = $this->input->post('nsb');
		$ns_c1 = $this->input->post('nsc1');
		$ns_c2 = $this->input->post('ns_c2');
		$ns_d1 = $this->input->post('nsd1');
		$ns_d2 = $this->input->post('ns_d2');
		$is_1 = $this->input->post('is_1');
		$is_2 = $this->input->post('is_2');
		$is_3 = $this->input->post('is_3');
		$is_4 = $this->input->post('is_4');
		$is_5 = $this->input->post('is_5');
		$is_6 = $this->input->post('is_6');
		$is_7 = $this->input->post('is_7');
		$k_1 = $this->input->post('kontrak_dari_beberapa_komponen');
		$k_2 = $this->input->post('komponen_dalam_kontrak');
		$k_3 = $this->input->post('komponen_merupakan_sewa');
		$k_4 = $this->input->post('penyewa_mendapat_manfaat');
		$k_5 = $this->input->post('aset_dasar');
		$lokasi = $this->input->post('lokasi');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');

		$kontrak_int = str_replace(".", "", $this->input->post('nilai_kontrak'));

		$data=$this->SummaryModel->summary_add($title,$id_kontrak,$diff,$nama_pt,$nomor_kontrak,$vendor,$created_by,$pageinpdf,$jenis_sewa,$serialnumber,$ns_a,$ns_a1,$ns_b,$ns_c1,$ns_c2,$ns_d1,$ns_d2,$is_1,$is_2,$is_3,$is_4,$is_5,$is_6,$is_7,$k_1,$k_2,$k_3,$k_4,$k_5,$lokasi,$start_date,$end_date,$kontrak_int,$pdf_up);
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
