
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['abouts']= 'welcome/demo';

//http://localhost:8080/PageController/index
$route['Home']= 'PageController/index';
//http://localhost:8080/PageController/aboutUs
$route['About']= 'PageController/aboutUs';


//$route['Blog/(:any)']= 'PageController/blog/$1';
$route['Blog/(:num)']= 'PageController/blog/$1';

// ----------------------------------------------
//employer route
$route['Employee']= 'frontend/EmployeeController/index';

//route add employer ito
$route['Employee/add']= 'frontend/EmployeeController/create';

// route de methode store
$route['Employee/store'] = 'frontend/EmployeeController/store';

//route edit
$route['Employee/edit/(:any)'] = 'frontend/EmployeeController/edit/$1';
$route['Employee/update/(:any)'] = 'frontend/EmployeeController/update/$1';

//route delete
$route['Employee/delete/(:any)'] = 'frontend/EmployeeController/delete/$1';