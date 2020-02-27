<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model{

	function calculation_add() {
		$data = array(
            'dr' => $this->input->post('calculation_dr'),
            'pat' => $this->input->post('calculation_pat'),
            'top' => $this->input->post('calculation_top'),
            'awak' => $this->input->post('calculation_awak'),
            'pd' => $this->input->post('calculation_pd')
		);

		$result = $this->db->insert('calculation',$data);
		return $result;
	}

}