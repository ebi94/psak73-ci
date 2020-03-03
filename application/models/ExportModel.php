<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExportModel extends CI_Model{
	function kkp(){
		$query = $this->db->query(
			"SELECT
				kon.nomor_kontrak AS no_kontrak,
				kon.vendor AS nama_vendor,
				sum.jenis_sewa AS underlying_asset,
				sum.start_date AS tgl_mulai_kontrak,
				sum.end_date AS tgl_berakhir_kontrak,
				sum.periode_kontrak AS periode_kontrak,
				sum.ns_a AS modifikasi_kontrak,
				sum.ns_a AS kontrak_original,
				sum.ns_b AS negosiasi_dengan_kontrak_lain,
				sum.ns_c1 AS opsi_perpanjangan,
				sum.ns_c2 AS cukup_pasti_perpanjang,
				sum.ns_d1 AS terminasi,
				sum.ns_d2 AS cukup_pasti_menghentikan,
				sum.is_1 AS certain_asset,
				sum.is_2 AS rigth_to_operate,
				sum.is_3 AS control_utility,
				sum.is_4 AS control_physical_asset,
				sum.is_5 AS contract_price,
				sum.is_6 AS output_used_by_third_party,
				sum.is_7 AS right_control,
				-- certain_asset = YES AND right_control = YES AND right_to_operate = YES AND control_utility = YES AND control_physical_asset = YES AND output_used_by_third_party = NO
				CASE WHEN sum.is_1 = 'Yes' AND sum.is_7 = 'Yes' AND sum.is_2 = 'Yes' AND sum.is_3 = 'Yes' AND sum.is_4 = 'Yes' AND sum.is_6 = 'No' THEN 'Lease' ELSE 'Non Lease' END AS lease,
				sum.k_1 AS multi_komponen,
				sum.k_2 AS komponen_dalam_kontrak,
				sum.k_3 AS komponen_sewa,
				sum.k_4 AS penyewa_dapat_manfaat,
				sum.k_5 AS ketergantungan_tinggi_asset,
				CASE WHEN sum.k_4 = 'Yes' AND sum.k_5 = 'Yes' THEN 'Terpisah' ELSE 'Tidak Terpisah' END AS komponen_terpisah,
				-- 'Terpisah' AS komponen_terpisah,
				sum.nilai_kontrak AS nilai_kontrak_exclude_ppn,
				cal.top AS termin_bayar,
				cal.awak AS akhir_awal_bulan_bayar,
				'4' AS frekuensi_pembayaran,
				/*(nilai_kontrak/frekuensi_pembayaran) AS nilai_sewa_per_pembayaran*/
				(sum.nilai_kontrak / 4) AS nilai_sewa_per_pembayaran,
				cal.status_ppn AS status_ppn,
				cal.ppn AS ppn,
				(sum.nilai_kontrak/sum.periode_kontrak) AS nilai_sewa_per_bulan,
				-- (nilai_kontrak/24) AS nilai_sewa_per_bulan,
				cal.jumlah_unit AS jumlah_unit_jumlah,
				cal.satuan AS jumlah_unit_satuan
			FROM
				abm_summary sum LEFT JOIN t_kontrak kon ON sum.id_kontrak = kon.id LEFT JOIN t_calculation cal ON cal.id_summary = sum.id"
		);

		return $query;
	}

	function calculation() {
		$where = '';
		if (isset($param['id_summary'])) {
			$where = 'WHERE sum.id = '.$param['id_summary'];
		}
		$query = $this->db->query(
			"SELECT
				sum.serialnumber AS serial_number,
				sum.jenis_sewa AS jenis_sewa,
				kon.vendor AS vendor,
				kon.nomor_kontrak AS nomor_kontrak,
				sum.nilai_kontrak AS nilai_kontrak,
				( sum.nilai_kontrak + cal.nilai_asumsi_perpanjangan ) AS kontrak_plus_perpanjangan,
				sum.start_date AS start_date,
				sum.end_date AS end_date,
				sum.periode_kontrak AS periode_kontrak,
				cal.tgl_perpanjangan AS tgl_perpanjangan,
			/*((cal.tgl_perpanjangan - sum.start_date) / 30) AS periode_kontrak_plus_perpanjangan -----dibikin buat pembulatan kebawah*/
				'10' AS periode_kontrak_plus_perpanjangan,
			/*(sum.periode_kontrak - periode_kontrak_plus_perpanjangan) AS kosongan*/
				'10' AS kosongan,
			/*if ((cal.tgl_perpanjangan - 12/31/2019--bisa berubah hardcode) / 30) <= 12 ='Position Paper' ELSE 'Lease' AS lease/ non lease*/
				'Position Paper' AS lease_non_lease,
			/*((cal.tgl_perpanjangan - 12/31/2019--bisa berubah hardcode) / 30) AS sisa_periode_31_des_2019*/
				'20' AS sisa_periode_31_des_2019,
				cal.top AS top,
				cal.awak AS awal_akhir_bulan,
				cal.pat AS payment_amount_per_term,
				'0' AS nilai_residu,
				cal.dr AS discount_rate,
			/*(((1+cal.dr)^(1/12))-1) AS effective_monthly_dr*/
				'2' AS effective_monthly_dr,
			/*((1+effective_monthly_dr)^1-1) AS effective_dr*/
				'3' AS effective_dr,
			/*https://stackoverflow.com/questions/22073169/need-help-converting-pv-formula-to-php AS pv_mlp*/
				'-60' AS pv_mlp,
				cal.prepaid AS prepaid,
			/*'10' AS prepaid,*/
			/*https://stackoverflow.com/questions/22073169/need-help-converting-pv-formula-to-php AS lease_liability_as_of_31_12_2019*/
				'-60' AS lease_liability_as_of_31_12_2019,
			/*( (pv_mlp - cal.prepaid) / sisa_periode_31_des_2019) -----dibikin buat pembulatan kebawah AS depresiasi_exp_per_month*/
				'100' AS depresiasi_exp_per_month,
			/*pv_mlp dibikin positif AS rou_as_of_31_12_2019*/
				'60' AS rou_as_of_31_12_2019,
			/*((pv_mlp-cal.prepaid)+rou_as_of_31_12_2019) AS kosongan_dua*/
				'0' AS kosongan_dua
			FROM
				t_calculation cal
				LEFT JOIN abm_summary sum ON cal.id_summary = sum.id
				LEFT JOIN t_kontrak kon ON sum.id_kontrak = kon.id
			$where"
		);

		return $query;
	}
}