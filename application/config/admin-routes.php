<?php
$route['admin'] = "admin/LoginController/loginView";
$route['admin/create-new-account'] = "admin/LoginController/newAccount";
?>
<?php
/*Admin home Page Route*/

$route['admin'] = "admin/LoginController/loginView";
$route['forgot-password'] = "admin/LoginController/forgot";
/*
| -------------------------------------------------------------------
| Apple Therapeutics Controller one route here "START HERE"
| -------------------------------------------------------------------
| (:any) routes is website blog routes this routes is override admin
| Login view so just place here
|*/
$route['(:any)'] = "Appletherapeutics/blogDetails/$1";
/*
| -------------------------------------------------------------------
| Apple Therapeutics Controller one route here "ENDS HERE"
| -------------------------------------------------------------------
| (:any) routes is website blog routes
|*/
$route['admin/dashboard'] = "admin/LoginController/dashboard";
$route['admin/layouts/header'] = "admin/MenuController/header";
$route['admin/layouts/footer'] = "admin/MenuController/footer";

/*
@@@@ Routes for News Section
 */
$route['admin/news'] = "admin/NewsController/index";
$route['admin/news/(:num)'] = "admin/NewsController/index/$1";
$route['admin/news/add'] = "admin/NewsController/create";
$route['admin/news/show/(:num)'] = "admin/NewsController/show/$1";
$route['admin/news/edit/(:num)'] = "admin/NewsController/edit/$1";

/*Product Routes*/
$route['admin/product/add'] = "admin/ProductController/create"

?>