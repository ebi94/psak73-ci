<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE){
			redirect('log');
		}

		$this->load->model('AuthModel');
	}

	function index() {
		$data['title'] = 'User Management';
		
		$data['view'] = 'admin/user';
		$this->load->view('templates/header', $data);
	}

	function list() {
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$query = $this->AuthModel->auth_get_all();

		$data = [];
		$i = 1;

		foreach ($query->result() as $key_user) {
			$data[] = array(
				$i++,
				$key_user->email,
				$key_user->name,
				auth_level($key_user->level),
				'<a title="Edit" href="" style="color:orange;"><i class="nav-icon fas fa-user-edit"></i></a>
      			 <a href="javascript:void(0);" class="item_user_delete" data-user_id="'.$key_user->id.'"><i class="nav-icon fas fas fa-user-alt-slash"></i></a>'
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

	function add_user() {
		$data=$this->AuthModel->auth_add();
		echo json_encode($data);
	}

	function delete_user() {
		$data=$this->AuthModel->auth_delete();
		echo json_encode($data);
	}
}