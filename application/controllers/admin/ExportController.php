<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExportController extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('');
	        redirect($url);
		}

		$this->load->model('AuthModel');
		$this->load->model('ExportModel');
	}

	function summary_export(){
		$data_summary = $this->ExportModel->summary();

		$creator = $this->session->userdata('ses_nama');
		$title_excel = "ABM Summary Contract Leasse";
		$date_export = date('d/m/Y');
		$row_data_summary = 

		require_once FCPATH."/assets/phpexcel/Classes/PHPExcel.php";
		$excel = new PHPExcel();

		$i = 0;
		foreach ($data_summary->result() as $key_summary) {
			$excel->createSheet($i);
			// settingan awal
			$excel->getProperties()->setCreator($creator)->setLastModifiedBy($creator)->setTitle($title_excel)->setSubject("Summary")->setDescription($key_summary->kon_nama_pt)->setKeywords($key_summary->kon_nama_pt);

			$excel->setActiveSheetindex($i)->setCellValue('A1', 'Leasse '.$key_summary->kon_nama_pt); //isian A1 (title)
			$excel->getActiveSheet()->mergeCells('A1:D1');
			$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20); //set FontSize

			$excel->setActiveSheetindex($i)->setCellValue('A2', 'No. Kontrak :'); //isian A2 (title)
			$excel->getActiveSheet()->mergeCells('A2:B2');
			$excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('A2')->getFont()->setSize(20); //set FontSize

			$excel->setActiveSheetindex($i)->setCellValue('C2', 'Nomor : '.$key_summary->kon_nomor_kontrak); //isian C2 (title)
			$excel->getActiveSheet()->mergeCells('C2:D2');
			$excel->getActiveSheet()->getStyle('C2')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('C2')->getFont()->setSize(20); //set FontSize

			$excel->setActiveSheetindex($i)->setCellValue('A3', 'Vendor : '); //isian A3 (title)
			$excel->getActiveSheet()->mergeCells('A3:B3');
			$excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('A3')->getFont()->setSize(20); //set FontSize

			$excel->setActiveSheetindex($i)->setCellValue('C3', $key_summary->kon_vendor); //isian C3 (title)
			$excel->getActiveSheet()->mergeCells('C3:D3');
			$excel->getActiveSheet()->getStyle('C3')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('C3')->getFont()->setSize(20); //set FontSize

			// HEAD
			$excel->setActiveSheetindex($i)->setCellValue('A4', 'No'); //isian A4 (title)
			$excel->getActiveSheet()->mergeCells('A4:A5');
			$excel->getActiveSheet()->getStyle('A4')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('A4')->getFont()->setSize(20); //set FontSize

			$excel->setActiveSheetindex($i)->setCellValue('B4', 'Kriteria'); //isian B4 (title)
			$excel->getActiveSheet()->mergeCells('B4:C4');
			$excel->getActiveSheet()->mergeCells('B4:B5');
			$excel->getActiveSheet()->mergeCells('C4:C5');
			$excel->getActiveSheet()->getStyle('B4')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('B4')->getFont()->setSize(20); //set FontSize

			$excel->setActiveSheetindex($i)->setCellValue('D4', 'Based on Contract'); //isian D4 (title)
			$excel->getActiveSheet()->mergeCells('D4:D5');
			$excel->getActiveSheet()->getStyle('D4')->getFont()->setBold(TRUE);
			$excel->getActiveSheet()->getStyle('D4')->getFont()->setSize(20); //set FontSize

			// ISIAN
			$excel->setActiveSheetindex($i)->setCellValue('A6', '1'); //isian A6 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('B6', 'Jenis Sewa'); //isian B6 (title)
			$excel->getActiveSheet()->mergeCells('B6:C6');

			$excel->setActiveSheetindex($i)->setCellValue('D6', $key_summary->sum_jenis_sewa); //isian D4 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A7', '2'); //isian D4 (title)

			$excel->setActiveSheetindex($i)->setCellValue('B7', 'Nature Sewa'); //isian B7 (title)
			$excel->getActiveSheet()->mergeCells('B7:C7');

			$excel->setActiveSheetindex($i)->setCellValue('D7', ''); //isian D7 (title)

			$excel->setActiveSheetindex($i)->setCellValue('A8', ''); //isian A8 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B8', 'a'); //isian B8 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C8', 'Apakah Terdapat Modifikasi ?'); //isian C8 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D8', $key_summary->sum_modifikasi); //isian D8 (title)

			$excel->setActiveSheetindex($i)->setCellValue('A9', ''); //isian A9 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B9', 'b'); //isian B9 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C9', 'Apakah Kontrak Dinegosiasikan Dengan Kontrak Lain ?'); //isian C9 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D9', $key_summary->sum_ns_b); //isian D9 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A10', ''); //isian A10 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B10', 'c.1'); //isian B10 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C10', 'Apakah Kontrak Mengandung Opsi Perpanjangan ?'); //isian C10 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D10', $key_summary->sum_ns_c_1); //isian D10 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A11', ''); //isian A11 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B11', 'c.2'); //isian B11 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C11', 'Penyewa Cukup Pasti Untuk Mengeksekusi Opsi Tersebut ?'); //isian C11 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D11', $key_summary->sum_ns_c_2); //isian D11 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A12', ''); //isian A12 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B12', 'd.1'); //isian B12 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C12', 'Apakah Kontrak Mengandung Opsi Terminasi ?'); //isian C12 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D12', $key_summary->sum_ns_d_1); //isian D12 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A13', ''); //isian A13 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B13', 'd.2'); //isian B13 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C13', 'Penyewa Cukup Pasti Untuk Tidak Mengeksekusi Opsi Tersebut ?'); //isian C13 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D13', $key_summary->sum_ns_d_2); //isian D13 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A14', ''); //isian A14 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B14', 'e'); //isian B14 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C14', 'Identifikasi Sewa'); //isian C14 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D14', ''); //isian D14 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A15', ''); //isian A15 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B15', 'e.2'); //isian B15 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C15', 'Certain Asset'); //isian C15 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D15', $key_summary->sum_is_1); //isian D15 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A16', ''); //isian A16 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B16', 'e.3'); //isian B16 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C16', 'Right to Operate'); //isian C16 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D16', $key_summary->sum_is_2); //isian D16 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A17', ''); //isian A17 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B17', 'e.4'); //isian B17 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C17', 'Control of The Output or Other Utility'); //isian C17 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D17', $key_summary->sum_is_3); //isian D17 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A18', ''); //isian A18 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B18', 'e.5'); //isian B18 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C18', 'Control Physical Asset'); //isian C18 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D18', $key_summary->sum_is_4); //isian D18 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A19', ''); //isian A19 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B19', 'e.6'); //isian B19 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C19', 'Contract Price (tergantung pada output yang dihasilkan atau tidak)'); //isian C19 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D19', $key_summary->sum_is_5); //isian D19 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A20', ''); //isian A20 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B20', 'e.7'); //isian B20 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C20', 'Output Used by Third Party'); //isian C20 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D20', $key_summary->sum_is_6); //isian D20 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A21', ''); //isian A21 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B21', 'e.8'); //isian B21 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C21', 'Right to Control The Use of The Asset'); //isian C21 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D21', $key_summary->sum_is_7); //isian D21 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A22', ''); //isian A22 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B22', 'f'); //isian B22 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C22', 'Apakah Kontrak Sewa Terdiri Dari Beberapa Komponen (lease dan nonlease)'); //isian C22 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D22', $key_summary->sum_k_1); //isian D22 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A23', ''); //isian A23 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B23', 'g'); //isian B23 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C23', 'Lokasi Sewa'); //isian C23 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D23', $key_summary->sum_lokasi); //isian D23 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A24', ''); //isian A24 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B24', 'h'); //isian B24 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C24', 'Panjang Kontrak'); //isian C24 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D24', $key_summary->periode); //isian D24 (title)
			
			$excel->setActiveSheetindex($i)->setCellValue('A25', ''); //isian A25 (title)
			$excel->setActiveSheetindex($i)->setCellValue('B25', 'i'); //isian B25 (title)
			$excel->setActiveSheetindex($i)->setCellValue('C25', 'Besar Nilai Kontrak'); //isian C25 (title)
			$excel->setActiveSheetindex($i)->setCellValue('D25', $key_summary->sum_nilai_kontrak); //isian D25 (title)

			// set judul excel
			$excel->getActiveSheet($i)->setTitle($i);
			$i++;
		}

		$excel->setActiveSheetindex(0);

		// proses file excel
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="'.$title_excel.'.xls"'); // set nama file excel nya
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
		$write->save('php://output');
	}

	function kkp_export(){
		$data_kkp = $this->ExportModel->kkp();

		$creator = $this->session->userdata('ses_nama');
		$title_excel = "KKP Assessment Leasing";
		$date_export = date('d/m/Y');

		require_once FCPATH."/assets/phpexcel/Classes/PHPExcel.php";
		$excel = new PHPExcel();

		// settingan awal
		$excel->getProperties()->setCreator($creator)->setLastModifiedBy($creator)->setTitle($title_excel)->setSubject("KKP Assessment Leasing")->setDescription("Identifikasi Sewa")->setKeywords($title_excel);

		// pengaturan style header tabel
		$style_col = array(
			'font' => array('bold' => true), //set font bold
			'alignment' => array(
				// 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, //set text center horizontal
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER //set text center vertical
			),
			'borders' => array(
				'top' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border top tipis
				'right' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border right tipis
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border bottom tipis
				'left' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border left tipis
			)
		);

		// pengaturan style isi tabel
		$style_row = array(
			'font' => array('bold' => true), //set font bold
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER //set text center vertical
			),
			'borders' => array(
				'top' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border top tipis
				'right' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border right tipis
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border bottom tipis
				'left' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border left tipis
			)
		);

		$excel->setActiveSheetindex(0)->setCellValue('A2', 'PT'); //isian A2 (title)
		$excel->getActiveSheet()->mergeCells('A2:AP2');
		$excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('A2')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('A3', 'IFRS 16 - Lesse'); //isian A3 (title)
		$excel->getActiveSheet()->mergeCells('A3:AP3');
		$excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('A3')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('A4', 'Per '.$date_export); //isian A4 (title)
		$excel->getActiveSheet()->mergeCells('A4:AP4');
		$excel->getActiveSheet()->getStyle('A4')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('A4')->getFont()->setSize(20); //set FontSize

		// header tabel dimulai dari baris ke 6
		$excel->setActiveSheetindex(0)->setCellValue('A6', "No.");
		$excel->getActiveSheet()->mergeCells('A6:A8');
		$excel->setActiveSheetindex(0)->setCellValue('B6', "No. Kontrak");
		$excel->getActiveSheet()->mergeCells('B6:B8');
		$excel->setActiveSheetindex(0)->setCellValue('C6', "Nama Vendor");
		$excel->getActiveSheet()->mergeCells('C6:C8');
		$excel->setActiveSheetindex(0)->setCellValue('D6', "Underlying Asset");
		$excel->getActiveSheet()->mergeCells('D6:D8');
		$excel->setActiveSheetindex(0)->setCellValue('E6', "Tanggal Mulai Kontrak(based on contract)");
		$excel->getActiveSheet()->mergeCells('E6:E8');
		$excel->setActiveSheetindex(0)->setCellValue('F6', "Tanggal Berakhir Kontrak(based on contract)");
		$excel->getActiveSheet()->mergeCells('F6:F8');
		$excel->setActiveSheetindex(0)->setCellValue('G6', "Periode Kontrak(dalam bulan) ((Tanggal berakhir - Tanggal Mulai) / 30)");
		$excel->getActiveSheet()->mergeCells('G6:G8');
		$excel->setActiveSheetindex(0)->setCellValue('H6', "Apakah Kontrak Merupakan Kontrak Modifikasi?");
		$excel->getActiveSheet()->mergeCells('H6:H8');
		$excel->setActiveSheetindex(0)->setCellValue('I6', "Jika Ya, Tuliskan Nomor Kontrak Originalnya");
		$excel->getActiveSheet()->mergeCells('I6:I8');
		$excel->setActiveSheetindex(0)->setCellValue('J6', "Apakah Kontrak Di Negosiasikan Dengan Kontrak Lain?");
		$excel->getActiveSheet()->mergeCells('J6:J8');
		$excel->setActiveSheetindex(0)->setCellValue('K6', "Apakah Kontrak Mengandung Opsi Perpanjangan?");
		$excel->getActiveSheet()->mergeCells('K6:K8');
		$excel->setActiveSheetindex(0)->setCellValue('L6', "Periode(dalam bulan) Yang Dicakup Oleh Opsi Untuk Memperpanjang Sewa Jika Penyewa Cukup Pasti Untuk Mengeksekusi Opsi Tersebut (Jika Kolom K Dijawab Yes)");
		$excel->getActiveSheet()->mergeCells('L6:L8');
		$excel->setActiveSheetindex(0)->setCellValue('M6', "Apakah Kontrak Mengandung Opsi Terminasi?");
		$excel->getActiveSheet()->mergeCells('M6:M8');
		$excel->setActiveSheetindex(0)->setCellValue('N6', "Periode(dalam bulan) Yang Dicakup Oleh Opsi Untuk Menghentikan Sewa Jika Penyewa Cukup Pasti Untuk Tidak Mengeksekusi Opsi Tersebut (Jika Kolom L Dijawab Yes)");
		$excel->getActiveSheet()->mergeCells('N6:N8');

		$excel->setActiveSheetindex(0)->setCellValue('O6', "");
		$excel->getActiveSheet()->mergeCells('O6:V6');
		$excel->setActiveSheetindex(0)->setCellValue('O7', "Certain Asset");
		$excel->getActiveSheet()->mergeCells('O7:O8');
		$excel->setActiveSheetindex(0)->setCellValue('P7', "Right to Operate");
		$excel->getActiveSheet()->mergeCells('P7:P8');
		$excel->setActiveSheetindex(0)->setCellValue('Q7', "Control of Te Output or Other Utility");
		$excel->getActiveSheet()->mergeCells('Q7:Q8');
		$excel->setActiveSheetindex(0)->setCellValue('R7', "Control Physical Asset");
		$excel->getActiveSheet()->mergeCells('R7:R8');
		$excel->setActiveSheetindex(0)->setCellValue('S7', "Contract Price(tergantung pada output yang dihasilkan atau tidak)");
		$excel->getActiveSheet()->mergeCells('S7:S8');
		$excel->setActiveSheetindex(0)->setCellValue('T7', "Output Used by Third Party");
		$excel->getActiveSheet()->mergeCells('T7:T8');
		$excel->setActiveSheetindex(0)->setCellValue('U7', "Right to Control The Use of The Asset");
		$excel->getActiveSheet()->mergeCells('U7:U8');
		$excel->setActiveSheetindex(0)->setCellValue('V7', "Lease / No Lease");
		$excel->getActiveSheet()->mergeCells('V7:V8');

		$excel->setActiveSheetindex(0)->setCellValue('W6', "Kontrak Terdiri Dari Beberapa Komponen(lease dan nonlease)");
		$excel->getActiveSheet()->mergeCells('W6:W8');
		$excel->setActiveSheetindex(0)->setCellValue('X6', "Tuliskan Komponen Dalam Kontrak");
		$excel->getActiveSheet()->mergeCells('X6:X8');
		$excel->setActiveSheetindex(0)->setCellValue('Y6', "Komponen Merupakan Sewa?");
		$excel->getActiveSheet()->mergeCells('Y6:Y8');
		$excel->setActiveSheetindex(0)->setCellValue('Z6', "Penyewa Mendapat Manfaat Dari Penggunaan Aset Pendasar Secara Terpisah Atau Bersamaan Dengan Sumber Daya Lain Yang Tersedia Untuk Penyewa");
		$excel->getActiveSheet()->mergeCells('Z6:Z8');
		$excel->setActiveSheetindex(0)->setCellValue('AA6', "Asset Pendasar Tersebut TIdak Memiliki Ketergantungan Yang Tinggi Dengan, Maupun Memiliki Interelasi Yang Tinggi Dengan, Aset Pendasar Lainnya Dalam Kontrak");
		$excel->getActiveSheet()->mergeCells('AA6:AA8');
		$excel->setActiveSheetindex(0)->setCellValue('AB6', "Komponen Sewa Terpisah?");
		$excel->getActiveSheet()->mergeCells('AB6:AB8');
		$excel->setActiveSheetindex(0)->setCellValue('AC6', "Nilai Kontrak(Exclude-PPN)");
		$excel->getActiveSheet()->mergeCells('AC6:AC8');

		$excel->setActiveSheetindex(0)->setCellValue('AD6', "Detail Kontrak");
		$excel->getActiveSheet()->mergeCells('AD6:AP6');
		$excel->setActiveSheetindex(0)->setCellValue('AD7', "Waktu Pembayaran");
		$excel->getActiveSheet()->mergeCells('AD7:AF7');
		$excel->setActiveSheetindex(0)->setCellValue('AD8', "Termin Pembayaran");
		$excel->setActiveSheetindex(0)->setCellValue('AE8', "Diakhir Bulan / Awal Bulan");
		$excel->setActiveSheetindex(0)->setCellValue('AF8', "Frekuensi Pembayaran");
		// Bisa Di hilangkan Satu Waktu Nanti
		$excel->setActiveSheetindex(0)->setCellValue('AG7', "One Time Charge");
		$excel->getActiveSheet()->mergeCells('AG7:AG8');
		$excel->setActiveSheetindex(0)->setCellValue('AH7', "Initial Direct Cost");
		$excel->getActiveSheet()->mergeCells('AH7:AH8');
		$excel->setActiveSheetindex(0)->setCellValue('AI7', "Lease Incentives");
		$excel->getActiveSheet()->mergeCells('AI7:AI8');
		$excel->setActiveSheetindex(0)->setCellValue('AJ7', "Estimasi Biaya Dismantling");
		$excel->getActiveSheet()->mergeCells('AJ7:AJ8');
		// END
		$excel->setActiveSheetindex(0)->setCellValue('AK7', "Nilai Sewa Per-Pembayaran");
		$excel->getActiveSheet()->mergeCells('AK7:AK8');
		$excel->setActiveSheetindex(0)->setCellValue('AL7', "Status(Sudah Termasuk PPN/Belum)");
		$excel->getActiveSheet()->mergeCells('AL7:AL8');
		$excel->setActiveSheetindex(0)->setCellValue('AM7', "PPN");
		$excel->getActiveSheet()->mergeCells('AM7:AM8');
		$excel->setActiveSheetindex(0)->setCellValue('AN7', "Nilai Sewa Per-Bulan(Belum Termasuk PPN)");
		$excel->getActiveSheet()->mergeCells('AN7:AN8');

		$excel->setActiveSheetindex(0)->setCellValue('AO7', "Jumlah Unit");
		$excel->getActiveSheet()->mergeCells('AO7:AP7');
		$excel->setActiveSheetindex(0)->setCellValue('AO8', "Jumlah");
		$excel->setActiveSheetindex(0)->setCellValue('AP8', "Satuan");

		// apply header style
		$excel->getActiveSheet()->getStyle('A6:A8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B6:B8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C6:C8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D6:D8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E6:E8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F6:F8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G6:G8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H6:H8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I6:I8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J6:J8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('K6:K8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('L6:L8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('M6:M8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('N6:N8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('O6:O8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('P6:P8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Q6:Q8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('R6:R8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('S6:S8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('T6:T8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('U6:U8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('V6:V8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('W6:W8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('X6:X8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Y6:Y8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('Z6:Z8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AA6:AA8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AB6:AB8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AC6:AC8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AD6:AD8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AE6:AE8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AF6:AF8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AG6:AG8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AH6:AH8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AI6:AI8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AJ6:AJ8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AK6:AK8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AL6:AL8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AM6:AM8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AN6:AN8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AO6:AO8')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('AP6:AP8')->applyFromArray($style_col);

		// isi tabel
		$start_row = 9; //set isian dimulai dari baris ke 9
		$i = 1;
		foreach ($data_kkp->result() as $key_kkp) {
			$y1 = date('Y',strtotime($key_kkp->tgl_mulai_kontrak));
			$y2 = date('Y',strtotime($key_kkp->tgl_berakhir_kontrak));

			$m1 = date('m',strtotime($key_kkp->tgl_mulai_kontrak));
			$m2 = date('m',strtotime($key_kkp->tgl_berakhir_kontrak));

			$diff = (($y2 - $y1) * 12) + ($m2 - $m1);
			
			$excel->setActiveSheetIndex(0)->setCellValue('A'.$start_row, $i);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$start_row, $key_kkp->no_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$start_row, $key_kkp->nama_vendor);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$start_row, $key_kkp->underlying_asset);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$start_row, $key_kkp->tgl_mulai_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$start_row, $key_kkp->tgl_berakhir_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$start_row, $diff);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$start_row, $key_kkp->modifikasi_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$start_row, $key_kkp->kontrak_original);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$start_row, $key_kkp->negosiasi_dengan_kontrak_lain);
			$excel->setActiveSheetIndex(0)->setCellValue('K'.$start_row, $key_kkp->opsi_perpanjangan);
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$start_row, $key_kkp->cukup_pasti_perpanjang);
			$excel->setActiveSheetIndex(0)->setCellValue('M'.$start_row, $key_kkp->terminasi);
			$excel->setActiveSheetIndex(0)->setCellValue('N'.$start_row, $key_kkp->cukup_pasti_menghentikan);
			$excel->setActiveSheetIndex(0)->setCellValue('O'.$start_row, $key_kkp->certain_asset);
			$excel->setActiveSheetIndex(0)->setCellValue('P'.$start_row, $key_kkp->rigth_to_operate);
			$excel->setActiveSheetIndex(0)->setCellValue('Q'.$start_row, $key_kkp->control_utility);
			$excel->setActiveSheetIndex(0)->setCellValue('R'.$start_row, $key_kkp->control_physical_asset);
			$excel->setActiveSheetIndex(0)->setCellValue('S'.$start_row, $key_kkp->contract_price);
			$excel->setActiveSheetIndex(0)->setCellValue('T'.$start_row, $key_kkp->output_used_by_third_party);
			$excel->setActiveSheetIndex(0)->setCellValue('U'.$start_row, $key_kkp->right_control);
			$excel->setActiveSheetIndex(0)->setCellValue('V'.$start_row, $key_kkp->lease);
			$excel->setActiveSheetIndex(0)->setCellValue('W'.$start_row, $key_kkp->multi_komponen);
			$excel->setActiveSheetIndex(0)->setCellValue('X'.$start_row, $key_kkp->komponen_dalam_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('Y'.$start_row, $key_kkp->komponen_sewa);
			$excel->setActiveSheetIndex(0)->setCellValue('Z'.$start_row, $key_kkp->penyewa_dapat_manfaat);
			$excel->setActiveSheetIndex(0)->setCellValue('AA'.$start_row, $key_kkp->ketergantungan_tinggi_asset);
			$excel->setActiveSheetIndex(0)->setCellValue('AB'.$start_row, $key_kkp->komponen_terpisah);
			$excel->setActiveSheetIndex(0)->setCellValue('AC'.$start_row, $key_kkp->nilai_kontrak_exclude_ppn);
			$excel->setActiveSheetIndex(0)->setCellValue('AD'.$start_row, $key_kkp->termin_bayar);
			$excel->setActiveSheetIndex(0)->setCellValue('AE'.$start_row, $key_kkp->akhir_awal_bulan_bayar);
			$excel->setActiveSheetIndex(0)->setCellValue('AF'.$start_row, $key_kkp->frekuensi_pembayaran);
			$excel->setActiveSheetIndex(0)->setCellValue('AG'.$start_row, 0);
			$excel->setActiveSheetIndex(0)->setCellValue('AH'.$start_row, 0);
			$excel->setActiveSheetIndex(0)->setCellValue('AI'.$start_row, 0);
			$excel->setActiveSheetIndex(0)->setCellValue('AJ'.$start_row, 0);
			$excel->setActiveSheetIndex(0)->setCellValue('AK'.$start_row, $key_kkp->nilai_sewa_per_pembayaran);
			$excel->setActiveSheetIndex(0)->setCellValue('AL'.$start_row, $key_kkp->status_ppn);
			$excel->setActiveSheetIndex(0)->setCellValue('AM'.$start_row, $key_kkp->ppn);
			$excel->setActiveSheetIndex(0)->setCellValue('AN'.$start_row, $key_kkp->nilai_sewa_per_bulan);
			$excel->setActiveSheetIndex(0)->setCellValue('AO'.$start_row, $key_kkp->jumlah_unit_jumlah);
			$excel->setActiveSheetIndex(0)->setCellValue('AP'.$start_row, $key_kkp->jumlah_unit_satuan);

			// apply isian style
			$excel->getActiveSheet()->getStyle('A'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('K'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('L'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('M'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('N'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('O'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('P'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Q'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('R'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('S'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('T'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('U'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('V'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('W'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('X'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Y'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Z'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AA'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AB'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AC'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AD'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AE'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AF'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AG'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AH'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AI'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AJ'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AK'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AL'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AM'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AN'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AO'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('AP'.$start_row)->applyFromArray($style_row);

			$i++;
			$start_row++;
		}

		// set column width to auto
		foreach (range('A','N') as $columnIndex) {
		  $excel->getActiveSheet()->getColumnDimension($columnIndex)->setAutoSize(true);
		}

		// set row height to auto
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

		// set orientation to landscape
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		// set judul excel
		$excel->getActiveSheet(0)->setTitle("Identifikasi Sewa");
		$excel->setActiveSheetindex(0);

		// proses file excel
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="'.$title_excel.'.xls"'); // set nama file excel nya
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
		$write->save('php://output');
	}

	function calculation_export(){
		$data_calculation = $this->ExportModel->calculation();

		$creator = $this->session->userdata('ses_nama');
		$title_excel = "Calculation IFRS16 - PSAK73";
		$date_export = date('d/m/Y');

		require_once FCPATH."/assets/phpexcel/Classes/PHPExcel.php";
		$excel = new PHPExcel();

		// settingan awal
		$excel->getProperties()->setCreator($creator)->setLastModifiedBy($creator)->setTitle($title_excel)->setSubject("Calculation IFRS16")->setDescription("Calculation")->setKeywords($title_excel);

		// pengaturan style header tabel
		$style_col = array(
			'font' => array('bold' => true), //set font bold
			'alignment' => array(
				// 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, //set text center horizontal
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER //set text center vertical
			),
			'borders' => array(
				'top' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border top tipis
				'right' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border right tipis
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border bottom tipis
				'left' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border left tipis
			)
		);

		// pengaturan style isi tabel
		$style_row = array(
			'font' => array('bold' => true), //set font bold
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER //set text center vertical
			),
			'borders' => array(
				'top' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border top tipis
				'right' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border right tipis
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border bottom tipis
				'left' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border left tipis
			)
		);

		// header tabel dimulai dari baris ke 6
			$excel->setActiveSheetindex(0)->setCellValue('A6', "No.");
			$excel->setActiveSheetindex(0)->setCellValue('B6', "Serial Number / Nomor Polisi");
			$excel->setActiveSheetindex(0)->setCellValue('C6', "Jenis Sewa");
			$excel->setActiveSheetindex(0)->setCellValue('D6', "Vendor");
			$excel->setActiveSheetindex(0)->setCellValue('E6', "Nomor Kontrak");
			$excel->setActiveSheetindex(0)->setCellValue('F6', "Nilai Kontrak");
			$excel->setActiveSheetindex(0)->setCellValue('G6', "Nilai Kontrak + Nilai Asumsi Perpanjangan");
			$excel->setActiveSheetindex(0)->setCellValue('H6', "Start Date");
			$excel->setActiveSheetindex(0)->setCellValue('I6', "End Date");
			$excel->setActiveSheetindex(0)->setCellValue('J6', "Periode");
			$excel->setActiveSheetindex(0)->setCellValue('K6', "Perpanjangan (asumsi)");
			$excel->setActiveSheetindex(0)->setCellValue('L6', "Periode Kontrak + Asumsi Perpanjangan");
			$excel->setActiveSheetindex(0)->setCellValue('M6', "");
			$excel->setActiveSheetindex(0)->setCellValue('N6', "Lease / Non Lease");
			$excel->setActiveSheetindex(0)->setCellValue('O6', "Sisa Periode Dari 31 Des 2019");
			$excel->setActiveSheetindex(0)->setCellValue('P6', "TOP");
			$excel->setActiveSheetindex(0)->setCellValue('Q6', "Di belakang (0), Di depan (1)");
			$excel->setActiveSheetindex(0)->setCellValue('R6', "Payment Amount/ Term");
			$excel->setActiveSheetindex(0)->setCellValue('S6', "Nilai Residu");
			$excel->setActiveSheetindex(0)->setCellValue('T6', "Discount Rate");
			$excel->setActiveSheetindex(0)->setCellValue('U6', "Effective Monthly Discount Rate");
			$excel->setActiveSheetindex(0)->setCellValue('V6', "Effective Discount Rate");
			$excel->setActiveSheetindex(0)->setCellValue('W6', "PV MLP");
			$excel->setActiveSheetindex(0)->setCellValue('X6', "Prepaid");
			$excel->setActiveSheetindex(0)->setCellValue('Y6', "Lease Liability as of 31 Dec 2019");
			$excel->setActiveSheetindex(0)->setCellValue('Z6', "Depreciation Exp./month");
			$excel->setActiveSheetindex(0)->setCellValue('AA6', "ROU as of 31 Dec 2019");
			$excel->setActiveSheetindex(0)->setCellValue('AB6', "");

		// apply header style
			$excel->getActiveSheet()->getStyle('A6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('B6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('C6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('D6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('E6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('F6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('G6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('H6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('I6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('J6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('K6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('L6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('M6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('N6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('O6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('P6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('Q6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('R6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('S6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('T6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('U6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('V6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('W6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('X6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('Y6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('Z6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('AA6')->applyFromArray($style_col);
			$excel->getActiveSheet()->getStyle('AB6')->applyFromArray($style_col);

		// isi tabel
		$start_row = 7; //set isian dimulai dari baris ke 7
		$i = 1;
		foreach ($data_calculation->result() as $key_calculation) {
			// $key_calculation->tgl_perpanjangan - $key_calculation->start_date;
				$y1 = date('Y',strtotime($key_calculation->tgl_perpanjangan));
				$y2 = date('Y',strtotime($key_calculation->start_date));

				$m1 = date('m',strtotime($key_calculation->tgl_perpanjangan));
				$m2 = date('m',strtotime($key_calculation->start_date));

				$periode_kontrak_plus_perpanjangan = (($y1 - $y2) * 12) + ($m1 - $m2);
			
			// $key_calculation->periode_kontrak - periode_kontrak_plus_perpanjangan
				$kosongan = $key_calculation->periode_kontrak - $periode_kontrak_plus_perpanjangan;

			// if ((cal.tgl_perpanjangan - 12/31/2019--bisa berubah hardcode) / 30) <= 12 ='Position Paper' ELSE 'Lease' 
				$lease_non_lease = "";
				$y1_l = date('Y',strtotime($key_calculation->tgl_perpanjangan));
				$y2_l = date('Y',strtotime('2019-12-31'));

				$m1_l = date('m',strtotime($key_calculation->tgl_perpanjangan));
				$m2_l = date('m',strtotime('2019-12-31'));

				$lease_non_lease_hasil = (($y2_l - $y1_l) * 12) + ($m2_l - $m1_l);
				if ($lease_non_lease_hasil <= 12) {
					$lease_non_lease = 'Position Paper';
				} else {
					$lease_non_lease = 'Lease';
				}

			// ((cal.tgl_perpanjangan - 12/31/2019--bisa berubah hardcode) / 30)
				$y1_sisa = date('Y',strtotime($key_calculation->tgl_perpanjangan));
				$y2_sisa = date('Y',strtotime('2019-12-31'));

				$m1_sisa = date('m',strtotime($key_calculation->tgl_perpanjangan));
				$m2_sisa = date('m',strtotime('2019-12-31'));

				$sisa_periode_31_des_2019 = (($y1_sisa - $y2_sisa) * 12) + ($m1_sisa - $m2_sisa);

			// (((1+cal.dr)^(1/12))-1)
				$effective_monthly_dr = "";

				$get_decimal = $key_calculation->discount_rate/100;

				$get_decimal_plus_1 = 1+$get_decimal;

				$effective_monthly_dr_pangkat = pow($get_decimal_plus_1, 1/12);

				$effective_monthly_dr = $effective_monthly_dr_pangkat - 1;

			// ((1+effective_monthly_dr)^1-1)
				$dr_dr = 1 + $effective_monthly_dr;

				$effective_dr = (pow((1 + $effective_monthly_dr), 1))-1;

			// PV MLP
				$pv_mlp = '=PV((V'.$start_row.'),O'.$start_row.',R'.$start_row.',S'.$start_row.',Q'.$start_row.')';

			// ( (pv_mlp - cal.prepaid) / sisa_periode_31_des_2019)
				$depresiasi_exp_per_month = '=(W'.$start_row.'-X'.$start_row.')/O'.$start_row.'';

			// ((pv_mlp-cal.prepaid)+rou_as_of_31_12_2019)
				$kosongan_dua = '=(W'.$start_row.'-X'.$start_row.')+AA'.$start_row.'';

			$excel->setActiveSheetIndex(0)->setCellValue('A'.$start_row, $i);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$start_row, $key_calculation->serial_number);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$start_row, $key_calculation->jenis_sewa);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$start_row, $key_calculation->vendor);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$start_row, $key_calculation->nomor_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$start_row, $key_calculation->nilai_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$start_row, $key_calculation->kontrak_plus_perpanjangan);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$start_row, $key_calculation->start_date);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$start_row, $key_calculation->end_date);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$start_row, $key_calculation->periode_kontrak);
			$excel->setActiveSheetIndex(0)->setCellValue('K'.$start_row, $key_calculation->tgl_perpanjangan);
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$start_row, $periode_kontrak_plus_perpanjangan);
			$excel->setActiveSheetIndex(0)->setCellValue('M'.$start_row, $kosongan);
			$excel->setActiveSheetIndex(0)->setCellValue('N'.$start_row, $lease_non_lease);
			$excel->setActiveSheetIndex(0)->setCellValue('O'.$start_row, $sisa_periode_31_des_2019);
			$excel->setActiveSheetIndex(0)->setCellValue('P'.$start_row, $key_calculation->top);
			$excel->setActiveSheetIndex(0)->setCellValue('Q'.$start_row, $key_calculation->awal_akhir_bulan);
			$excel->setActiveSheetIndex(0)->setCellValue('R'.$start_row, $key_calculation->payment_amount_per_term);
			$excel->setActiveSheetIndex(0)->setCellValue('S'.$start_row, $key_calculation->nilai_residu);
			$excel->setActiveSheetIndex(0)->setCellValue('T'.$start_row, $key_calculation->discount_rate.'%');
			$excel->setActiveSheetIndex(0)->setCellValue('U'.$start_row, $effective_monthly_dr);
			$excel->setActiveSheetIndex(0)->setCellValue('V'.$start_row, $effective_dr);
			// $excel->setActiveSheetIndex(0)->setCellValue('W'.$start_row, $pv_mlp);
			$excel->setActiveSheetIndex(0)->setCellValue('W'.$start_row, $pv_mlp);
			$excel->setActiveSheetIndex(0)->setCellValue('X'.$start_row, $key_calculation->prepaid);
			$excel->setActiveSheetIndex(0)->setCellValue('Y'.$start_row, '=W'.$start_row);
			$excel->setActiveSheetIndex(0)->setCellValue('Z'.$start_row, $depresiasi_exp_per_month);
			// $excel->setActiveSheetIndex(0)->setCellValue('AA'.$start_row, $rou_as_of_31_12_2019);
			$excel->setActiveSheetIndex(0)->setCellValue('AA'.$start_row, '=ABS(W'.$start_row.')');
			$excel->setActiveSheetIndex(0)->setCellValue('AB'.$start_row, $kosongan_dua);

			// apply isian style
			// $excel->getActiveSheet()->getProtection()->setSheet(true);
			$excel->getActiveSheet()->getStyle('A'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('G'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('J'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('K'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('L'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('M'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('N'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('O'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('P'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('Q'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('R'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('S'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('T'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('U'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('V'.$start_row)->applyFromArray($style_row);
			// $excel->getActiveSheet()->getStyle('W'.$start_row)->applyFromArray($style_row)->getProtection()->setHidden(PHPExcel_Style_Protection::PROTECTION_PROTECTED);
			$excel->getActiveSheet()->getStyle('W'.$start_row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('X'.$start_row)->applyFromArray($style_row);
			// $excel->getActiveSheet()->getStyle('Y'.$start_row)->applyFromArray($style_row)->getProtection()->setHidden(PHPExcel_Style_Protection::PROTECTION_PROTECTED);
			$excel->getActiveSheet()->getStyle('Y'.$start_row)->applyFromArray($style_row);
			// $excel->getActiveSheet()->getStyle('Z'.$start_row)->applyFromArray($style_row)->getProtection()->setHidden(PHPExcel_Style_Protection::PROTECTION_PROTECTED);
			$excel->getActiveSheet()->getStyle('Z'.$start_row)->applyFromArray($style_row);
			// $excel->getActiveSheet()->getStyle('AA'.$start_row)->applyFromArray($style_row)->getProtection()->setHidden(PHPExcel_Style_Protection::PROTECTION_PROTECTED);
			$excel->getActiveSheet()->getStyle('AA'.$start_row)->applyFromArray($style_row);
			// $excel->getActiveSheet()->getStyle('AB'.$start_row)->applyFromArray($style_row)->getProtection()->setHidden(PHPExcel_Style_Protection::PROTECTION_PROTECTED);
			$excel->getActiveSheet()->getStyle('AB'.$start_row)->applyFromArray($style_row);

			$i++;
			$start_row++;
		}

		// set column width to auto
		foreach (range('A','AB') as $columnIndex) {
		  $excel->getActiveSheet()->getColumnDimension($columnIndex)->setAutoSize(true);
		}

		// set row height to auto
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

		// set orientation to landscape
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

		// set judul excel
		$excel->getActiveSheet(0)->setTitle("Calculation");
		$excel->setActiveSheetindex(0);

		// proses file excel
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="'.$title_excel.'.xls"'); // set nama file excel nya
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
		$write->save('php://output');
	}

	function schedule_export(){
		$id_summary = $this->input->get('id_summary');
		// print_r($id_summary);
		// die();
		$param = array('id_summary'=>$id_summary);
		$data_calculation = $this->ExportModel->calculation($param);

		$data_data = $data_calculation->row();
		// print_r($data_data);
		// die();
		$creator = $this->session->userdata('ses_nama');
		$title_excel = "Schedule ".$data_data->nomor_kontrak."- PSAK73";
		$date_export = date('d/m/Y');

		require_once FCPATH."/assets/phpexcel/Classes/PHPExcel.php";
		$excel = new PHPExcel();
		// print_r($excel);
		// die();
		// settingan awal
		$excel->getProperties()->setCreator($creator)->setLastModifiedBy($creator)->setTitle($title_excel)->setSubject("Schedule")->setDescription("Schedule")->setKeywords($title_excel);

		// pengaturan style header tabel
		$style_col = array(
			'font' => array('bold' => true), //set font bold
			'alignment' => array(
				// 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, //set text center horizontal
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER //set text center vertical
			),
			'borders' => array(
				'top' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border top tipis
				'right' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border right tipis
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border bottom tipis
				'left' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border left tipis
			)
		);

		// pengaturan style isi tabel
		$style_row = array(
			'font' => array('bold' => true), //set font bold
			'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER //set text center vertical
			),
			'borders' => array(
				'top' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border top tipis
				'right' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border right tipis
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border bottom tipis
				'left' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				), //set border left tipis
			)
		);

		$excel->setActiveSheetindex(0)->setCellValue('B2', 'No'); //isian B2 (title)
		$excel->getActiveSheet()->getStyle('B2')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('B2')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('C2', $data_data->serial_number); //isian C2 (title)
		$excel->getActiveSheet()->getStyle('C2')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('C2')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('B3', 'Jenis Sewa'); //isian B3 (title)
		$excel->getActiveSheet()->getStyle('B3')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('B3')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('C3', $data_data->jenis_sewa); //isian C3 (title)
		$excel->getActiveSheet()->getStyle('C3')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('C3')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('B4', 'No Kontrak'); //isian B4 (title)
		$excel->getActiveSheet()->getStyle('B4')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('B4')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('C4', $data_data->nomor_kontrak); //isian C4 (title)
		$excel->getActiveSheet()->getStyle('C4')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('C4')->getFont()->setSize(20); //set FontSize

		// header tabel dimulai dari baris ke 7
		$excel->setActiveSheetindex(0)->setCellValue('B7', "Periode");
		$excel->getActiveSheet()->mergeCells('B7:B8');
		$excel->getActiveSheet()->getStyle('B7')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('B7')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('C7', "LEASE LIABILITY");
		$excel->getActiveSheet()->mergeCells('C7:F7');
		$excel->getActiveSheet()->getStyle('C7')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('C7')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('C8', "Beg.Balance");
		$excel->setActiveSheetindex(0)->setCellValue('D8', "Payment");
		$excel->setActiveSheetindex(0)->setCellValue('E8', "Interest");
		$excel->setActiveSheetindex(0)->setCellValue('F8', "End.Balance");

		$excel->setActiveSheetindex(0)->setCellValue('G7', "RIGHT OF USE ASSET");
		$excel->getActiveSheet()->mergeCells('G7:I7');
		$excel->getActiveSheet()->getStyle('G7')->getFont()->setBold(TRUE);
		$excel->getActiveSheet()->getStyle('G7')->getFont()->setSize(20); //set FontSize

		$excel->setActiveSheetindex(0)->setCellValue('G8', "Beg.Balance");
		$excel->setActiveSheetindex(0)->setCellValue('H8', "Depreciation Expense");
		$excel->setActiveSheetindex(0)->setCellValue('I8', "End.Bal");

		// apply header style
		$excel->getActiveSheet()->getStyle('A7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H7')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I7')->applyFromArray($style_col);

		// isi tabel
		$start_row = 9; //set isian dimulai dari baris ke 9
		$i = 1;
		// (((1+cal.dr)^(1/12))-1)
			$effective_monthly_dr = "";

			$get_decimal = $data_data->discount_rate/100;

			$get_decimal_plus_1 = 1+$get_decimal;

			$effective_monthly_dr_pangkat = pow($get_decimal_plus_1, 1/12);

			$effective_monthly_dr = $effective_monthly_dr_pangkat - 1;

		// ((1+effective_monthly_dr)^1-1)
			$dr_dr = 1 + $effective_monthly_dr;

			$effective_dr = (pow((1 + $effective_monthly_dr), 1))-1;

		// ((cal.tgl_perpanjangan - 12/31/2019--bisa berubah hardcode) / 30)
			$y1_sisa = date('Y',strtotime($data_data->tgl_perpanjangan));
			$y2_sisa = date('Y',strtotime('2019-12-31'));

			$m1_sisa = date('m',strtotime($data_data->tgl_perpanjangan));
			$m2_sisa = date('m',strtotime('2019-12-31'));

			$sisa_periode_31_des_2019 = (($y1_sisa - $y2_sisa) * 12) + ($m1_sisa - $m2_sisa);

		// ( (pv_mlp - cal.prepaid) / sisa_periode_31_des_2019)
			$depresiasi_exp_per_month = '=(C'.$start_row.'-'.$data_data->prepaid.')/'.$sisa_periode_31_des_2019.'';

		$excel->setActiveSheetIndex(0)->setCellValue('Z'.$start_row, $effective_dr);
		$excel->setActiveSheetIndex(0)->setCellValue('AA'.$start_row, $sisa_periode_31_des_2019);
		$excel->setActiveSheetIndex(0)->setCellValue('AB'.$start_row, $data_data->payment_amount_per_term);
		$excel->setActiveSheetIndex(0)->setCellValue('AC'.$start_row, $data_data->nilai_residu);
		$excel->setActiveSheetIndex(0)->setCellValue('AD'.$start_row, $data_data->awal_akhir_bulan);

		$excel->setActiveSheetIndex(0)->setCellValue('AE'.$start_row, $effective_monthly_dr);
		$excel->setActiveSheetIndex(0)->setCellValue('AF'.$start_row, $depresiasi_exp_per_month);

		$excel->setActiveSheetIndex(0)->setCellValue('A'.$start_row, '2020');		
		$excel->setActiveSheetIndex(0)->setCellValue('B'.$start_row, 'Januari');

		$excel->setActiveSheetIndex(0)->setCellValue('C'.$start_row, '=PV((Z'.$start_row.'),AA'.$start_row.',AB'.$start_row.',AC'.$start_row.',AD'.$start_row.')');
		$excel->setActiveSheetIndex(0)->setCellValue('D'.$start_row, '=('.$data_data->payment_amount_per_term.')*(-1)');
		$excel->setActiveSheetIndex(0)->setCellValue('E'.$start_row, '=(C'.$start_row.')*('.$effective_monthly_dr.')');	
		$excel->setActiveSheetIndex(0)->setCellValue('F'.$start_row, '=C'.$start_row.'-(D'.$start_row.'-E'.$start_row.')');

		$excel->setActiveSheetIndex(0)->setCellValue('G'.$start_row, '=ABS(C'.$start_row.')');	
		$excel->setActiveSheetIndex(0)->setCellValue('H'.$start_row, '=AF9');	
		$excel->setActiveSheetIndex(0)->setCellValue('I'.$start_row, '=G'.$start_row.'+H'.$start_row.'');

		$excel->getActiveSheet()->getStyle('A'.$start_row)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('B'.$start_row)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('C'.$start_row)->getNumberFormat()->setFormatCode('_-* #,##0_-;-* #,##0_-;_-* "-"??_-;_-@_-');
		$excel->getActiveSheet()->getStyle('D'.$start_row)->getNumberFormat()->setFormatCode('_-* #,##0_-;-* #,##0_-;_-* "-"??_-;_-@_-');
		$excel->getActiveSheet()->getStyle('E'.$start_row)->getNumberFormat()->setFormatCode('_-* #,##0.00_-;-* #,##0.00_-;_-* "-"??_-;_-@_-');
		// $excel->getActiveSheet()->getStyle('F'.$start_row)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('F'.$start_row)->getNumberFormat()->setFormatCode('_-* #,##0_-;-* #,##0_-;_-* "-"??_-;_-@_-');
		$excel->getActiveSheet()->getStyle('G'.$start_row)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('H'.$start_row)->applyFromArray($style_row);
		$excel->getActiveSheet()->getStyle('I'.$start_row)->applyFromArray($style_row);

		$formatCodeF = '_-* #,##0_-;-* #,##0_-;_-* "-"??_-;_-@_-';
		// for ($ix=1; $ix < 100; $ix++) {
		// PAKE IF INI LEBIH PAS CUMAN KAGAK BISA W DAPET VALUE DARI CELL NYA
		// $highestRow = ($excel->setActiveSheetindex(0)->getHighestRow())+1;
		// $highestRow = $excel->setActiveSheetindex(0)->getHighestRow();
		// $cell_f = $excel->setActiveSheetindex()->getCell('F'.$start_row)->getValue();
		// $cell_f = $excel->setActiveSheetindex()->getCell('F'.$highestRow)->getValue();
		$ix=1;
		do{
		// if ($cell_f <= 0) { 
		// for ($ix=1; $ix < 15 ; $ix++) {
			// $ix++;
			$row = $start_row+$ix;
			$row_2 = ($start_row+$ix)-1;

			$excel->setActiveSheetIndex(0)->setCellValue('C'.$row, '=F'.$row_2);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$row, '=('.$data_data->payment_amount_per_term.')*(-1)');
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$row, '=(C'.$row.')*('.$effective_monthly_dr.')');
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$row, '=C'.$row.'-(D'.$row.'-E'.$row.')');

			$excel->setActiveSheetIndex(0)->setCellValue('G'.$row, '=I'.$row_2.'');	
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$row, '=AF9');	
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$row, '=G'.$row.'+H'.$row.'');

			// apply isian style
			$excel->getActiveSheet()->getStyle('A'.$row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$row)->getNumberFormat()->setFormatCode('_-* #,##0_-;-* #,##0_-;_-* "-"??_-;_-@_-');
			$excel->getActiveSheet()->getStyle('D'.$row)->getNumberFormat()->setFormatCode('_-* #,##0_-;-* #,##0_-;_-* "-"??_-;_-@_-');
			$excel->getActiveSheet()->getStyle('E'.$row)->getNumberFormat()->setFormatCode('_-* #,##0.00_-;-* #,##0.00_-;_-* "-"??_-;_-@_-');
			// $excel->getActiveSheet()->getStyle('F'.$row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$row)->getNumberFormat()->setFormatCode('_-* #,##0_-;-* #,##0_-;_-* "-"??_-;_-@_-');
			$excel->getActiveSheet()->getStyle('G'.$row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('H'.$row)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('I'.$row)->applyFromArray($style_row);

			$cell_f = $excel->setActiveSheetindex()->getCell('F'.$row)->getFormattedValue();

		$ix++;
		}while ( $ix < 20);

			$excel->setActiveSheetIndex(0)->setCellValue('J'.$start_row, $cell_f);
		
		

		// set column width to auto
			foreach (range('A','I') as $columnIndex) {
			  # code...
			  $excel->getActiveSheet()->getColumnDimension($columnIndex)->setAutoSize(true);
			}

			// set row height to auto
			$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

			// set orientation to landscape
			$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

			// set judul excel
			$excel->getActiveSheet(0)->setTitle("Schedule");
			$excel->setActiveSheetindex(0);

			// PHP dibawah 7
				// proses file excel
				// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				// header('Content-Disposition: attachment; filename="'.$title_excel.'.xlsx"'); // set nama file excel nya
				// header('Cache-Control: max-age=0');

				// $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');

			// PHP 7
				// proses file excel
				header('Content-Type: application/vnd.ms-excel');
				header('Content-Disposition: attachment; filename="'.$title_excel.'.xls"'); // set nama file excel nya
				header('Cache-Control: max-age=0');

				$write = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
			$write->save('php://output');

	}
}
