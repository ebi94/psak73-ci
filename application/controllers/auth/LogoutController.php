<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutController extends CI_Controller {
	function log_out() {
		$this->session->sess_destroy();
		$url=base_url('log');
		redirect($url);
	}
}