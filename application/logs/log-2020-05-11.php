<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-11 06:49:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-11 06:51:30 --> 404 Page Not Found: Purchase_order_get_payment_record_details/index
ERROR - 2020-05-11 06:54:58 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 07:07:44 --> Query error: Table 'wahidfix_property.tbl_expence_type' doesn't exist - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_type_id`, `BaseTbl`.`expence_title`, `BaseTbl`.`created_at`, `BaseTbl`.`updated_at`, `pt`.`expence_type_name`, `BaseTbl`.`expence_size`, `BaseTbl`.`expence_status`
FROM `tbl_expence` as `BaseTbl`
LEFT JOIN `tbl_expence_type` as `pt` ON `pt`.`expence_type_id` = `BaseTbl`.`expence_type_id`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-11 07:11:44 --> Query error: Unknown column 'pt.property_id' in 'field list' - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_bill_no`, `BaseTbl`.`expence_amount`, `BaseTbl`.`expence_desc`, `BaseTbl`.`vendor_id`, `pt`.`property_id`, `BaseTbl`.`created_at`, `p`.`property_title`, `v`.`vendor_name`
FROM `tbl_expence` as `BaseTbl`
LEFT JOIN `tbl_vendor` as `v` ON `v`.`vendor_id` = `BaseTbl`.`vendor_id`
LEFT JOIN `tbl_property` as `p` ON `p`.`property_id` = `BaseTbl`.`property_id`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-11 07:12:14 --> Query error: Unknown column 'pt.property_id' in 'field list' - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_bill_no`, `BaseTbl`.`expence_amount`, `BaseTbl`.`expence_desc`, `BaseTbl`.`vendor_id`, `pt`.`property_id`, `BaseTbl`.`created_at`, `p`.`property_title`, `v`.`vendor_name`
FROM `tbl_expence` as `BaseTbl`
LEFT JOIN `tbl_vendor` as `v` ON `v`.`vendor_id` = `BaseTbl`.`vendor_id`
LEFT JOIN `tbl_property` as `p` ON `p`.`property_id` = `BaseTbl`.`property_id`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-11 07:14:39 --> Query error: Table 'wahidfix_property.tbl_expence_type' doesn't exist - Invalid query: SELECT `expence_type_id`, `expence_type_name`
FROM `tbl_expence_type`
WHERE `isDeleted` = 0
ERROR - 2020-05-11 07:27:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 07:27:58 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 07:28:13 --> Severity: Notice --> Undefined property: stdClass::$expence_type_name /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 54
ERROR - 2020-05-11 07:28:13 --> Severity: Notice --> Undefined property: stdClass::$expence_title /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 55
ERROR - 2020-05-11 07:28:13 --> Severity: Notice --> Undefined property: stdClass::$expence_size /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 56
ERROR - 2020-05-11 07:28:13 --> Severity: Notice --> Undefined property: stdClass::$expence_rent /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 57
ERROR - 2020-05-11 07:28:13 --> Severity: Notice --> Undefined property: stdClass::$expence_status /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 58
ERROR - 2020-05-11 07:28:13 --> Severity: Notice --> Undefined property: stdClass::$updated_at /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 60
ERROR - 2020-05-11 07:28:14 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 07:29:57 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 07:30:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 07:31:26 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-11 08:22:44 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-11 08:51:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-11 09:03:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-11 09:43:11 --> 404 Page Not Found: Building_listing/index
ERROR - 2020-05-11 10:10:27 --> Query error: Table 'wahidfix_property.tbl_building' doesn't exist - Invalid query: SELECT `BaseTbl`.`building_id`, `BaseTbl`.`building_name`, `BaseTbl`.`building_created_at`, `BaseTbl`.`building_updated_at`
FROM `tbl_building` as `BaseTbl`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-11 10:10:32 --> Query error: Table 'wahidfix_property.tbl_building' doesn't exist - Invalid query: SELECT `BaseTbl`.`building_id`, `BaseTbl`.`building_name`, `BaseTbl`.`building_created_at`, `BaseTbl`.`building_updated_at`
FROM `tbl_building` as `BaseTbl`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-11 10:11:28 --> Query error: Table 'wahidfix_property.tbl_building' doesn't exist - Invalid query: SELECT `BaseTbl`.`building_id`, `BaseTbl`.`building_name`, `BaseTbl`.`building_created_at`, `BaseTbl`.`building_updated_at`
FROM `tbl_building` as `BaseTbl`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-11 10:16:54 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:20:55 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:23:41 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:44:18 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_property.php 41
ERROR - 2020-05-11 10:49:59 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:50:55 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_property.php 41
ERROR - 2020-05-11 10:50:56 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:51:36 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_property.php 41
ERROR - 2020-05-11 10:51:37 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:53:10 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:53:16 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:53:43 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:53:57 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:55:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:55:10 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:55:10 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:55:22 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 10:56:23 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:10:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:13:44 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:19:05 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:23:07 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:23:15 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-11 11:23:29 --> Query error: Table 'wahidfix_property.tbl_item_unit' doesn't exist - Invalid query: SELECT `BaseTbl`.`item_master_id`, `BaseTbl`.`item_master_name`, `BaseTbl`.`item_master_desc`, `BaseTbl`.`item_master_unit`, `BaseTbl`.`item_master_created_at`, `BaseTbl`.`item_master_update_at`, `c`.`item_category_name`, `u`.`item_unit_name`, `BaseTbl`.`item_master_logo`
FROM `tbl_item_master` as `BaseTbl`
LEFT JOIN `tbl_item_unit` as `u` ON `u`.`item_unit_id` = `BaseTbl`.`item_master_unit`
LEFT JOIN `tbl_item_category` as `c` ON `c`.`item_category_id` = `BaseTbl`.`item_master_category`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-11 11:30:02 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:30:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:30:15 --> 404 Page Not Found: Get_property_units/index
ERROR - 2020-05-11 11:33:47 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:33:48 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:33:48 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:35:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:35:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:35:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:44:51 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:44:51 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:44:51 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:30 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:31 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:43 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:48 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:48 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:55 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:57 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:45:58 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:46:04 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:46:13 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 11:46:13 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:03:45 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:03:54 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:04:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:05:21 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:13:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:17:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:18:06 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:19:31 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:21:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:35:29 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:38:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:40:31 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:40:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:42:58 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:43:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:43:08 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:47:57 --> Severity: Notice --> Undefined property: Expence::$property_reservation_model /home/wahidfix/property.wahidfix.com/application/controllers/Expence.php 67
ERROR - 2020-05-11 12:47:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-11 12:47:57 --> Severity: Error --> Call to a member function get_buildings() on null /home/wahidfix/property.wahidfix.com/application/controllers/Expence.php 67
ERROR - 2020-05-11 12:48:21 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:51:12 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:51:18 --> Severity: Notice --> Undefined index: building_id_session /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 75
ERROR - 2020-05-11 12:51:41 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:51:43 --> Severity: Notice --> Undefined index: building_id_session /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 75
ERROR - 2020-05-11 12:53:36 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:54:36 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:55:50 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 12:57:11 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:16:28 --> Severity: Notice --> Undefined property: stdClass::$vat_per /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 59
ERROR - 2020-05-11 13:16:28 --> Severity: Notice --> Undefined property: stdClass::$vat_per /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 59
ERROR - 2020-05-11 13:16:51 --> Severity: Notice --> Undefined property: stdClass::$vat_per /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 59
ERROR - 2020-05-11 13:16:51 --> Severity: Notice --> Undefined property: stdClass::$vat_per /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 59
ERROR - 2020-05-11 13:19:27 --> Query error: Table 'wahidfix_property.tbl_expence_type' doesn't exist - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_type_id`, `BaseTbl`.`expence_title`, `BaseTbl`.`expence_size`, `BaseTbl`.`expence_status`, `BaseTbl`.`expence_rent`
FROM `tbl_expence` as `BaseTbl`
LEFT JOIN `tbl_expence_type` as `pt` ON `pt`.`expence_type_id` = `BaseTbl`.`expence_type_id`
WHERE `expence_id` = '1'
ERROR - 2020-05-11 13:19:39 --> Query error: Table 'wahidfix_property.tbl_expence_type' doesn't exist - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_type_id`, `BaseTbl`.`expence_title`, `BaseTbl`.`expence_size`, `BaseTbl`.`expence_status`, `BaseTbl`.`expence_rent`
FROM `tbl_expence` as `BaseTbl`
LEFT JOIN `tbl_expence_type` as `pt` ON `pt`.`expence_type_id` = `BaseTbl`.`expence_type_id`
WHERE `expence_id` = '2'
ERROR - 2020-05-11 13:19:42 --> Query error: Table 'wahidfix_property.tbl_expence_type' doesn't exist - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_type_id`, `BaseTbl`.`expence_title`, `BaseTbl`.`expence_size`, `BaseTbl`.`expence_status`, `BaseTbl`.`expence_rent`
FROM `tbl_expence` as `BaseTbl`
LEFT JOIN `tbl_expence_type` as `pt` ON `pt`.`expence_type_id` = `BaseTbl`.`expence_type_id`
WHERE `expence_id` = '2'
ERROR - 2020-05-11 13:20:23 --> Query error: Unknown column 'BaseTbl.expence_type_id' in 'field list' - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_type_id`, `BaseTbl`.`expence_title`, `BaseTbl`.`expence_size`, `BaseTbl`.`expence_status`, `BaseTbl`.`expence_rent`
FROM `tbl_expence` as `BaseTbl`
WHERE `expence_id` = '2'
ERROR - 2020-05-11 13:20:44 --> Query error: Unknown column 'BaseTbl.expence_type_id' in 'field list' - Invalid query: SELECT `BaseTbl`.`expence_id`, `BaseTbl`.`expence_type_id`, `BaseTbl`.`expence_title`, `BaseTbl`.`expence_size`, `BaseTbl`.`expence_status`, `BaseTbl`.`expence_rent`
FROM `tbl_expence` as `BaseTbl`
WHERE `BaseTbl`.`expence_id` = '2'
ERROR - 2020-05-11 13:22:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/application/controllers/Expence.php:90) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-11 13:22:46 --> Severity: Error --> Call to undefined method Expence_model::get_types() /home/wahidfix/property.wahidfix.com/application/controllers/Expence.php 90
ERROR - 2020-05-11 13:23:24 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:23:24 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:23:43 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:23:43 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:23:49 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:27:07 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:27:12 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:27:15 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:27:35 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:27:41 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:27:41 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:27:42 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:28:41 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:28:41 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:28:41 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:28:41 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:28:42 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:29:18 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:29:18 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:29:18 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:29:18 --> Severity: Notice --> Undefined index: building_id /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:29:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:30:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 13:30:58 --> Severity: Notice --> Undefined variable: list /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:30:58 --> Severity: Notice --> Undefined variable: list /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:30:58 --> Severity: Notice --> Undefined variable: list /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 13:30:58 --> Severity: Notice --> Undefined variable: list /home/wahidfix/property.wahidfix.com/application/views/add_new_expence.php 68
ERROR - 2020-05-11 14:01:30 --> Severity: Notice --> Undefined index: vat_amt /home/wahidfix/property.wahidfix.com/application/controllers/Expence.php 54
ERROR - 2020-05-11 14:01:30 --> Severity: Notice --> Undefined index: total_amt /home/wahidfix/property.wahidfix.com/application/controllers/Expence.php 54
ERROR - 2020-05-11 14:01:30 --> Query error: Column 'vat_amt' cannot be null - Invalid query: INSERT INTO `tbl_expence` (`building_id`, `vat_amt`, `total_amt`, `vat_per`, `expence_bill_no`, `expence_amount`, `expence_desc`, `vendor_id`, `property_id`, `created_at`, `updated_at`, `isDeleted`) VALUES ('1', NULL, NULL, '5', '500', '500', '500', '26', '1', '2020-05-11 14:01:30', '2020-05-11 14:01:30', 0)
ERROR - 2020-05-11 14:01:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-11 14:02:39 --> Severity: Notice --> Undefined variable: expence_amount /home/wahidfix/property.wahidfix.com/application/models/Expence_model.php 117
ERROR - 2020-05-11 14:02:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/helpers/url_helper.php 564
ERROR - 2020-05-11 14:05:39 --> Severity: Notice --> Undefined property: stdClass::$vat_amt /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 63
ERROR - 2020-05-11 14:05:39 --> Severity: Notice --> Undefined property: stdClass::$total_amt /home/wahidfix/property.wahidfix.com/application/views/expence_list_view.php 64
ERROR - 2020-05-11 14:09:44 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:31:18 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:31:37 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:31:40 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:31:46 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:31:49 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:31:54 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:33:24 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:42:14 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:42:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:45:06 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:46:00 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:46:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:46:04 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:48:44 --> Severity: Notice --> Undefined index: vat_per_session /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 211
ERROR - 2020-05-11 14:48:44 --> Query error: Column 'vat_per_session' cannot be null - Invalid query: INSERT INTO `tbl_po_boi_session` (`building_id_session`, `property_id_session`, `vat_per_session`, `po_boi_po_id_session`, `rent_session`, `reservation_from_date_session`, `reservation_to_date_session`, `po_boi_created_at_session`, `po_boi_updated_at_session`) VALUES ('1', '3', NULL, 'po_5eb92c0642b74', '2020', '2020-05-01', '2020-05-31', '2020-05-11 14:48:44', '2020-05-11 14:48:44')
ERROR - 2020-05-11 14:48:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-11 14:48:53 --> Severity: Notice --> Undefined index: vat_per_session /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 211
ERROR - 2020-05-11 14:48:53 --> Query error: Column 'vat_per_session' cannot be null - Invalid query: INSERT INTO `tbl_po_boi_session` (`building_id_session`, `property_id_session`, `vat_per_session`, `po_boi_po_id_session`, `rent_session`, `reservation_from_date_session`, `reservation_to_date_session`, `po_boi_created_at_session`, `po_boi_updated_at_session`) VALUES ('1', '3', NULL, 'po_5eb92c0642b74', '2020', '2020-05-01', '2020-05-31', '2020-05-11 14:48:53', '2020-05-11 14:48:53')
ERROR - 2020-05-11 14:48:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-11 14:49:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:49:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:49:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:50:56 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:50:56 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:50:56 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:51:24 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:51:25 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:51:25 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:51:25 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:52:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:52:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:52:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:52:26 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:52:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:52:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:52:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-11 14:53:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:53:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:53:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:54:29 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 14:57:02 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-11 14:58:08 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-11 16:55:49 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-11 17:50:41 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-11 19:52:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-05-11 19:52:03 --> 404 Page Not Found: ServicesListing/index
ERROR - 2020-05-11 20:23:56 --> 404 Page Not Found: Faviconico/index
