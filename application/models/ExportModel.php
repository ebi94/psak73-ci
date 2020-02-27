<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExportModel extends CI_Model{
	function kkp(){
		$query = $this->db->query(
			"SELECT
				nomor_kontrak AS no_kontrak,
				vendor AS nama_vendor,
				jenis_sewa AS underlying_asset,
				start_date AS tgl_mulai_kontrak,
				end_date AS tgl_berakhir_kontrak,
				'tgl_akhir_kontrak - tgl_awal_kontrak dalam bulan' AS periode_kontrak,
				ns_a AS modifikasi_kontrak,
				'kontrak original kalau modifikasi kontrak itu yes' AS kontrak_original,
				ns_b AS negosiasi_dengan_kontrak_lain,
				ns_c1 AS opsi_perpanjangan,
				ns_c2 AS cukup_pasti_perpanjang,
				ns_d1 AS terminasi,
				ns_d2 AS cukup_pasti_menghentikan,
				is_1 AS certain_asset,
				is_2 AS rigth_to_operate,
				is_3 AS control_utility,
				is_4 AS control_physical_asset,
				is_5 AS contract_price,
				is_6 AS output_used_by_third_party,
				is_7 AS right_control,
				'lease / non lease' AS lease,
				komponen AS multi_komponen,
				'komponen kontrak' AS komponen_dalam_kontrak,
				'1' AS komponen_sewa,
				'1' AS penyewa_dapat_manfaat,
				'1' AS ketergantungan_tinggi_asset,
				/*CASE WHEN penyewa_dapat_manfaat = '1' AND ketergantungan_tinggi_asset = '1' THEN 'Terpisah' ELSE 'Tidak Terpisah' END AS komponen_terpisah*/
				'1' AS komponen_terpisah,
				nilai_kontrak AS nilai_kontrak_exclude_ppn,
				'3' AS termin_bayar,
				'1' AS akhir_awal_bulan_bayar,
				'4' AS frekuensi_pembayaran,
				/*(nilai_kontrak/frekuensi_pembayaran) AS nilai_sewa_per_pembayaran*/
				(nilai_kontrak / 4) AS nilai_sewa_per_pembayaran,
				'Belum Termasuk PPN' AS status_ppn,
				'10%' AS ppn,
				/*(nilai_kontrak/periode_kontrak) AS nilai_sewa_per_bulan*/
				(nilai_kontrak/24) AS nilai_sewa_per_bulan,
				'1' AS jumlah_unit_jumlah,
				'unit' AS jumlah_unit_satuan
			FROM
				abm_summary"
		);

		return $query;
	}

	function calculation() {
		
	}
}