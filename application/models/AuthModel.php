<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{
	function auth_cek($user,$pass){
		$query = $this->db->query("SELECT * FROM users WHERE name='".$user."' AND password = '".$pass."'");
		return $query;
	}

	function auth_cek_id($id){
		$query = $this->db->query("SELECT * FROM users WHERE id = $id");
		return $query;
	}
}