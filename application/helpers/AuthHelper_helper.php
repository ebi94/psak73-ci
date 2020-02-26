<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function auth_level($level=''){
		switch ($level) {
			case '0':
			$val_level = 'Super Admin';
			break;
			case '1':
			$val_level = 'Admin';
			break;
			case '2':
			$val_level = 'Client';
			break;
			default:
			  $val_level = '';
			break;
		}
		return $val_level;
	}