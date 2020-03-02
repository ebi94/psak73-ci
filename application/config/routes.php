<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// AUTH
	$route['log'] = 'auth/LoginController';
	$route['log/do/login'] = 'auth/LoginController/do_login';
	$route['log/regis'] = 'auth/LoginController/regis';
	$route['log/do/regis'] = 'auth/LoginController/do_regis';
	$route['log/out'] = 'auth/LogoutController/log_out';
	

	$route['user/management'] = 'auth/UserController';
	$route['user/management/list'] = 'auth/UserController/list';
	$route['user/management/add'] = 'auth/UserController/add_user';
	$route['user/management/edit'] = 'auth/UserController/edit';
	$route['user/management/delete'] = 'auth/UserController/delete_user';
// END AUTH

$route['admin'] = 'admin/AdminController';
$route['admin/list'] = 'admin/AdminController/list_summary';
$route['admin/add'] = 'admin/AdminController/add_summary';
$route['admin/do/add'] = 'admin/AdminController/do_add_summary';
$route['admin/edit'] = 'admin/AdminController/edit_summary';
$route['admin/delete'] = 'admin/AdminController/delete_summary';

$route['form/calculation/(:any)'] = 'form/FormController/add_calculation/$1';
$route['form/do/calculation'] = 'form/FormController/do_add_calculation';

$route['schedule'] = 'admin/ScheduleController';

$route['report'] = 'admin/ReportController';

$route['export/kkp'] = 'admin/ExportController/kkp_export';
$route['export/calculation'] = 'admin/ExportController/calculation_export';
$route['export/schedule'] = 'admin/ExportController/schedule_export';


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
