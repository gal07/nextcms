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
// $route['default_controller'] = 'halaman/index';
$route['user/edit'] = 'user/index';
$route['blog'] = 'blog/index';
$route['kontak'] = 'halaman/contactus';
$route['tentang'] = 'halaman/tentangkami';

## NextCMS
## Admin
$route['default_controller'] = 'client/index';
$route['cms-admin/admin'] = 'admin/index';
$route['cms-admin/login'] = 'admin/login';
$route['cms-admin/logout'] = 'admin/logout';
$route['cms-admin/register'] = 'admin/register';
$route['cms-admin/forgot'] = 'admin/forgotpassword';

##Users
$route['cms-admin/users'] = 'users/index';
$route['cms-admin/users/create'] = 'users/create';
$route['cms-admin/users/update/:num'] = 'users/update';
$route['cms-admin/users/delete/:num'] = 'users/delete';
$route['cms-admin/users/status/:num'] = 'users/status';


##Category
$route['cms-admin/category'] = 'category/index';
$route['cms-admin/category/create'] = 'category/create';
$route['cms-admin/category/update/:num'] = 'category/update';
$route['cms-admin/category/delete/:num'] = 'category/delete';
$route['cms-admin/category/status/:num'] = 'category/status';

##Posts
$route['cms-admin/posts'] = 'posts/index';
$route['cms-admin/posts/create'] = 'posts/create';
$route['cms-admin/posts/update/:num'] = 'posts/update';
$route['cms-admin/posts/delete/:num'] = 'posts/delete';
$route['cms-admin/posts/status/:num'] = 'posts/status';
$route['cms-admin/posts/topseries'] = 'posts/topseries';
$route['cms-admin/posts/topseries/update'] = 'posts/topseriesupdate';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
