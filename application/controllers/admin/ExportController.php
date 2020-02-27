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

	function kkp_export(){
		$data_kkp = $this->ExportModel->kkp();

		$creator = $this->session->userdata('ses_nama');
		$title_excel = "KKP Assessment Leasing - PT ABM Investama";
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

		$excel->setActiveSheetindex(0)->setCellValue('A2', 'PT. ABM Investama Tbk'); //isian A2 (title)
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
}