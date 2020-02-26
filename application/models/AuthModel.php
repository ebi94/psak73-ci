<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{
	function auth_cek($user,$pass) {
		$query = $this->db->query("SELECT * FROM users WHERE email='".$user."' AND password = '".$pass."'");
		return $query;
	}

	function auth_cek_id($id) {
		$query = $this->db->query("SELECT * FROM users WHERE id = $id");
		return $query;
	}

	function auth_get_all() {
		$query = $this->db->query("SELECT * FROM users WHERE active = 1");
		return $query;
	}

	function auth_add() {
		$auth_add_data = array(
			'name' => $this->input->post('auth_name'),
			'email' => $this->input->post('auth_email'),
			'level' => $this->input->post('auth_level'),
			'password' => do_hash($this->input->post('auth_email')),
		);

		$result = $this->db->insert('users',$auth_add_data);
		return $result;
	}

	function auth_delete() {
		$update_date = date('Y-m-d H:i:s');
		$id = $this->input->post('auth_id');
		$auth_delete_data = array(
			'active' => 0,
			'updated_at' => $update_date,
		);

		$this->db->where('id', $id);
		$result = $this->db->update('users', $auth_delete_data);
		return $result;
	}
}