<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['default_controller'] = 'welcome';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'test';

$route['tests'] = 'test';
$route['tests/create'] = 'test/create';
$route['tests/(:any)'] = 'test/view/$1';



// $route['news/create'] = 'news/create';
// $route['news/(:any)'] = 'news/view/$1';
// $route['news'] = 'news';
// $route['(:any)'] = 'pages/view/$1';
// $route['default_controller'] = 'pages/view';

