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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/home/dashboard'] = 'admin/admin';
$route['admin/home/dashboard1'] = 'admin/admin1';

//register - kasus
$route['admin/register/kasus'] = 'admin/kasus';
$route['admin/register/kasus/create'] = 'admin/kasus/create';
$route['admin/register/kasus/naik_lidik/(:any)'] = 'admin/kasus/naik_lidik/$1';
$route['admin/register/kasus/edit/(:any)'] = 'admin/kasus/edit/$1';
$route['admin/register/kasus/delete/(:any)'] = 'admin/kasus/delete/$1';

$route['admin/register/subyek'] = 'admin/subyek';

// Register - RP2
$route['admin/register/rp2'] = 'admin/rp2';
$route['admin/register/rp2/geledah'] = 'admin/rp2/geledah';
$route['admin/register/rp2/create_sprint_lidik/(:any)'] = 'admin/rp2/create_sprint_lidik/$1';
$route['admin/register/rp2/create'] = 'admin/rp2/create';
$route['admin/register/rp2/naik_dik_mum'] = 'admin/rp2/naik_dik_mum';
$route['admin/register/rp2/edit/(:any)'] = 'admin/rp2/edit/$1';
$route['admin/register/rp2/delete/(:any)'] = 'admin/rp2/delete/$1';

// Register - RP3MUM
$route['admin/register/rp3mum'] = 'admin/rp3mum';
$route['admin/register/rp3mum/geledah'] = 'admin/rp3mum/geledah';
$route['admin/register/rp3mum/naik_dik_sus'] = 'admin/rp3mum/naik_dik_sus';
$route['admin/register/rp3mum/edit/(:any)'] = 'admin/rp3mum/edit/$1';
$route['admin/register/rp3mum/delete/(:any)'] = 'admin/rp3mum/delete/$1';

// Register - RP3SUS
$route['admin/register/rp3sus'] = 'admin/rp3sus';
$route['admin/register/rp3sus/geledah'] = 'admin/rp3sus/geledah';
$route['admin/register/rp3sus/tahapan'] = 'admin/rp3sus/tahapan';
$route['admin/register/rp3sus/edit/(:any)'] = 'admin/rp3sus/edit/$1';
$route['admin/register/rp3sus/delete/(:any)'] = 'admin/rp3sus/delete/$1';


//administrasi - jaksa
$route['admin/administrasi/jaksa'] = 'admin/jaksa';
$route['admin/administrasi/jaksa/create'] = 'admin/jaksa/create';
$route['admin/administrasi/jaksa/edit/(:any)'] = 'admin/jaksa/edit/$1';
$route['admin/administrasi/jaksa/delete/(:any)'] = 'admin/jaksa/delete/$1';

//administrasi - kategori subyek
$route['admin/administrasi/kategori_subyek'] = 'admin/kategori_subyek';
$route['admin/administrasi/kategori_subyek/create'] = 'admin/kategori_subyek/create';
$route['admin/administrasi/kategori_subyek/edit/(:any)'] = 'admin/kategori_subyek/edit/$1';
$route['admin/administrasi/kategori_subyek/delete/(:any)'] = 'admin/kategori_subyek/delete/$1';

//administrasi - pasal disangkakan
$route['admin/administrasi/pasal'] = 'admin/pasal';
$route['admin/administrasi/pasal/create'] = 'admin/pasal/create';
$route['admin/administrasi/pasal/edit/(:any)'] = 'admin/pasal/edit/$1';
$route['admin/administrasi/pasal/delete/(:any)'] = 'admin/pasal/delete/$1';


//brands routes
$route['admin/brands'] = 'admin/brands';
$route['admin/brands/create'] = 'admin/brands/create';
$route['admin/brands/edit/(:any)'] = 'admin/brands/edit/$1';

//categories routes
$route['admin/categories'] = 'admin/categories';
$route['admin/categories/create'] = 'admin/categories/create';
$route['admin/categories/edit/(:any)'] = 'admin/categories/edit/$1';

//products routes
$route['admin/products'] = 'admin/products';
$route['admin/products/create'] = 'admin/products/create';
$route['admin/products/edit/(:any)'] = 'admin/products/edit/$1';

//perkara routes
$route['admin/perkara'] = 'admin/perkara';
$route['admin/perkara/create'] = 'admin/perkara/create';
$route['admin/perkara/edit/(:any)'] = 'admin/perkara/edit/$1';

//jaksas routes
$route['admin/jaksas'] = 'admin/jaksas';
$route['admin/jaksas/create'] = 'admin/jaksas/create';
$route['admin/jaksas/edit/(:any)'] = 'admin/jaksas/edit/$1';

//pasals routes
$route['admin/pasals'] = 'admin/pasals';
$route['admin/pasals/create'] = 'admin/pasals/create';
$route['admin/pasals/edit/(:any)'] = 'admin/pasals/edit/$1';

//pidanas routes
$route['admin/pidanas'] = 'admin/pidanas';
$route['admin/pidanas/create'] = 'admin/pidanas/create';
$route['admin/pidanas/edit/(:any)'] = 'admin/pidanas/edit/$1';

//subyeks routes
$route['admin/subyeks'] = 'admin/subyeks';
$route['admin/subyeks/create'] = 'admin/subyeks/create';
$route['admin/subyeks/edit/(:any)'] = 'admin/subyeks/edit/$1';

//obyeks routes
$route['admin/obyeks'] = 'admin/obyeks';
$route['admin/obyeks/create'] = 'admin/obyeks/create';
$route['admin/obyeks/edit/(:any)'] = 'admin/obyeks/edit/$1';

//surats routes
$route['admin/surats'] = 'admin/surats';
$route['admin/surats/create'] = 'admin/surats/create';
$route['admin/surats/edit/(:any)'] = 'admin/surats/edit/$1';

//kasuss routes
$route['admin/register/kasuss'] = 'admin/kasuss';
$route['admin/kasuss/create'] = 'admin/kasuss/create';
$route['admin/kasuss/edit/(:any)'] = 'admin/kasuss/edit/$1';

//kasuss routes
$route['admin/perkaras'] = 'admin/perkaras';
$route['admin/perkaras/create'] = 'admin/perkaras/create';
$route['admin/perkaras/edit/(:any)'] = 'admin/perkaras/edit/$1';

//kasuss routes
$route['admin/register/rp2s'] = 'admin/rp2s';
$route['admin/rp2s/create'] = 'admin/rp2s/create';
$route['admin/rp2s/create1'] = 'admin/rp2s/create1';
$route['admin/rp2s/edit/(:any)'] = 'admin/rp2s/edit/$1';

//kasuss routes
$route['admin/register/rp3s'] = 'admin/rp3s';
$route['admin/rp3s/create'] = 'admin/rp3s/create';
$route['admin/rp3s/create1'] = 'admin/rp3s/create1';
$route['admin/rp3s/edit/(:any)'] = 'admin/rp3s/edit/$1';


