<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = "login";
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['deleteUser/(:num)'] = "user/deleteUser/$1";
$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['changePassword/(:any)'] = "user/changePassword/$1";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

/*new routes*/

//property
$route['property_listing'] = 'property/property_listing';
$route['property_listing/property_listing'] = 'property/property_listing';
$route['property_listing/(:num)'] = "property/property_listing/$1";
$route['add_new_property'] = "property/add_new_property";
$route['delete_property/(:num)'] = "property/delete_property/$1";
$route['edit_property/(:num)'] = "property/edit_property/$1";
$route['edit_property'] = "property/edit_property";

//property type
$route['property_type_listing'] = 'property_type/property_type_listing';
$route['property_type_listing/property_type_listing'] = 'property_type/property_type_listing';
$route['property_type_listing/(:num)'] = "property_type/property_type_listing/$1";
$route['add_new_property_type'] = "property_type/add_new_property_type";
$route['delete_property_type/(:num)'] = "property_type/delete_property_type/$1";
$route['edit_property_type/(:num)'] = "property_type/edit_property_type/$1";
$route['edit_property_type'] = "property_type/edit_property_type";

//property unit size
$route['property_unit_size_listing'] = 'property_unit_size/property_unit_size_listing';
$route['property_unit_size_listing/property_type_listing'] = 'property_unit_size/property_unit_size_listing';
$route['property_unit_size_listing/(:num)'] = "property_unit_size/property_unit_size_listing/$1";
$route['add_new_property_unit_size'] = "property_unit_size/add_new_property_unit_size";
$route['delete_property_unit_size/(:num)'] = "property_unit_size/delete_property_unit_size/$1";
$route['edit_property_unit_size/(:num)'] = "property_unit_size/edit_property_unit_size/$1";
$route['edit_property_unit_size'] = "property_unit_size/edit_property_unit_size";

//Building
$route['building_listing'] = 'building/building_listing';
$route['building_listing/building_listing'] = 'building/building_listing';
$route['building_listing/(:num)'] = "building/building_listing/$1";
$route['add_new_building'] = "building/add_new_building";
$route['delete_building/(:num)'] = "building/delete_building/$1";
$route['edit_building/(:num)'] = "building/edit_building/$1";
$route['edit_building'] = "building/edit_building";


//MODULE MASTER
$route['module_master_listing'] = 'module_master/module_master_listing';
$route['module_master_listing/module_master_listing'] = 'module_master/module_master_listing';
$route['module_master_listing/(:num)'] = "module_master/module_master_listing/$1";
$route['add_new_module_master'] = "module_master/add_new_module_master";
$route['delete_module_master/(:num)'] = "module_master/delete_module_master/$1";
$route['edit_module_master/(:num)'] = "module_master/edit_module_master/$1";
$route['edit_module_master'] = "module_master/edit_module_master";

//ROLE MASTER
$route['role_master_listing'] = 'role_master/role_master_listing';
$route['role_master_listing/role_master_listing'] = 'role_master/role_master_listing';
$route['role_master_listing/(:num)'] = "role_master/role_master_listing/$1";
$route['add_new_role_master'] = "role_master/add_new_role_master";
$route['delete_role_master/(:num)'] = "role_master/delete_role_master/$1";
$route['edit_role_master/(:num)'] = "role_master/edit_role_master/$1";
$route['edit_role_master'] = "role_master/edit_role_master";
$route['AssignRightsRole'] = 'role_master/AssignRightsRole';
$route['AssignRightsRole/(:num)'] = 'role_master/AssignRightsRole/$1';


//item category
$route['item_category_listing'] = 'item_category/item_category_listing';
$route['item_category_listing/item_category_listing'] = 'item_category/item_category_listing';
$route['item_category_listing/(:num)'] = "item_category/item_category_listing/$1";
$route['add_new_item_category'] = "item_category/add_new_item_category";
$route['delete_item_category/(:num)'] = "item_category/delete_item_category/$1";
$route['edit_item_category/(:num)'] = "item_category/edit_item_category/$1";
$route['edit_item_category'] = "item_category/edit_item_category";

//item master
$route['item_master_listing'] = 'item_master/item_master_listing';
$route['item_master_listing/item_master_listing'] = 'item_master/item_master_listing';
$route['item_master_listing/(:num)'] = "item_master/item_master_listing/$1";
$route['add_new_item_master'] = "item_master/add_new_item_master";
$route['delete_item_master/(:num)'] = "item_master/delete_item_master/$1";
$route['edit_item_master/(:num)'] = "item_master/edit_item_master/$1";
$route['edit_item_master'] = "item_master/edit_item_master";

//customer
$route['customer_listing'] = 'customer/customer_listing';
$route['customer_listing/(:num)'] = "customer/customer_listing/$1";
$route['add_new_customer'] = "customer/add_new_customer";
$route['delete_customer/(:num)'] = "customer/delete_customer/$1";
$route['edit_customer/(:num)'] = "customer/edit_customer/$1";
$route['edit_customer'] = "customer/edit_customer";

//expences
$route['expence_listing'] = 'expence/expence_listing';
$route['expence_listing/(:num)'] = "expence/expence_listing/$1";
$route['add_new_expence'] = "expence/add_new_expence";
$route['delete_expence/(:num)'] = "expence/delete_expence/$1";
$route['edit_expence/(:num)'] = "expence/edit_expence/$1";
$route['edit_expence'] = "expence/edit_expence";
$route['get_property_units_exp']="expence/get_property_units_exp";

//vendor 
$route['vendor_listing'] = 'vendor/vendor_listing';
$route['vendor_listing/vendor_listing'] = 'vendor/vendor_listing';
$route['vendor_listing/(:num)'] = "vendor/vendor_listing/$1";
$route['add_new_vendor'] = "vendor/add_new_vendor";
$route['delete_vendor/(:num)'] = "vendor/delete_vendor/$1";
$route['edit_vendor/(:num)'] = "vendor/edit_vendor/$1";
$route['edit_vendor'] = "vendor/edit_vendor";
$route['vendor_email_exists'] = "vendor/vendor_email_exists";


// property reservation
$route['property_reservation_listing'] = 'property_reservation/property_reservation_listing';
$route['property_reservation_listing/property_reservation_listing'] = 'property_reservation/property_reservation_listing';
$route['property_reservation_listing/(:num)'] = 'property_reservation/property_reservation_listing/$1';
$route['add_new_property_reservation'] = 'property_reservation/add_new_property_reservation';
$route['add_po_boi_session'] = 'property_reservation/add_po_boi_session';
$route['delete_po_boi_session'] = 'property_reservation/delete_po_boi_session';
$route['delete_property_reservation/(:num)'] = 'property_reservation/delete_property_reservation/$1';
$route['edit_property_reservation/(:num)'] = "property_reservation/edit_property_reservation/$1";
$route['edit_property_reservation'] = "property_reservation/edit_property_reservation";
$route['edit_po_boi_session'] = "property_reservation/edit_po_boi_session";
$route['purchase_order_pdf'] = "property_reservation/purchase_order_pdf";
$route['purchase_order_email'] = "property_reservation/purchase_order_email";
$route['property_reservation_get_payment_record_details'] = "property_reservation/property_reservation_get_payment_record_details";
$route['property_reservation_add_payment_record'] = "property_reservation/property_reservation_add_payment_record";
$route['get_rent']="property_reservation/get_rent";
$route['get_property_units']="property_reservation/get_property_units";
$route['payment_records/(:num)']="property_reservation/payment_records/$1";
$route['pay_now/(:num)']="property_reservation/pay_now/$1";
$route['add_pr'] = 'property_reservation/add_pr';
$route['edit_pr'] = 'property_reservation/edit_pr';
$route['delete_pr'] = 'property_reservation/delete_pr';

$route['AssignRole'] = 'User/AssignRole';
$route['AssignRole/(:num)'] = 'User/AssignRole/$1';

//Reports
$route['Reports_listing'] = 'Reports/Reports_listing';
$route['expence_report'] = "Reports/expence_report";
// $route['add_new_contact'] = "Contact/add_new_contact";
// $route['delete_contact/(:num)'] = "Contact/delete_contact/$1";
// $route['edit_contact/(:num)'] = "Contact/edit_contact/$1";
// $route['edit_contact'] = "Contact/edit_contact";