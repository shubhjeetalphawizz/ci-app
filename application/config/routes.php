<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// http://localhost/ci-app/index.php/about
$route['about'] = 'home/about';

// http://localhost/ci-app/index.php/admin/dashboard
$route['dashboard'] = 'admin/dashboard';

// http://localhost/ci-app/index.php/admin/list
$route['list'] = 'admin/showData';
