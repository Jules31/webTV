<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['index/(:any)'] = 'welcome/index/$1';
$route['video/(:any)'] = 'welcome/video/$1';
$route['login'] = 'login/index';
$route['verifylogin'] = 'verifylogin';
$route['logout'] = 'login/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
