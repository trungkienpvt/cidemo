<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "product";
$route['404_override'] = 'my404';
$route['category/(:any)/(:any)'] = "product/lists/cat/$1/name/$2";
$route['(.*)/category/(:any)/(:any)'] = "product/lists/cat/$2/name/$3";
$route['(.*)catalog'] = "product/catalog";
$route['product/(:any)/(:any)'] = "product/detail/rid/$1/name/$2";
$route['(.*)/product/(:any)/(:any)'] = "product/detail/rid/$2/name/$3";
$route['news/(:any)/(:any)'] = "article/detail/rid/$1/name/$2";
$route['(.*)/news/(:any)/(:any)'] = "article/detail/rid/$2/name/$3";
$route['(.*)about-us'] = "article/aboutus";
$route['(.*)product-list'] = "$1";
$route['(.*)product-list/page(/{0,1})(\d*)'] = "$1product/index/page/$3";

/*multiple language*/
$route['(\w{2})/(.*)'] = '$2';
$route['(\w{2})'] = $route['default_controller'];
/*end multiple language*/



/* End of file routes.php */
/* Location: ./application/config/routes.php */