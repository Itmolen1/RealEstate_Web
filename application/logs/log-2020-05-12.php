<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-12 07:44:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-12 08:13:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-12 08:20:46 --> Query error: Table 'wahidfix_property.tbl_service_request' doesn't exist - Invalid query: SELECT *
FROM `tbl_service_request`
WHERE `status` != 2
AND `status` != 11
AND `status` != 99
AND `isDeleted` = 0
ERROR - 2020-05-12 08:44:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-12 08:52:37 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-12 08:56:04 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 08:57:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:00:16 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:11:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:11:41 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:11:48 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:13:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/application/controllers/Property_unit_size.php:79) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-12 09:13:37 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE), expecting identifier (T_STRING) /home/wahidfix/property.wahidfix.com/application/controllers/Property_unit_size.php 79
ERROR - 2020-05-12 09:13:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/application/controllers/Property_unit_size.php:79) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-12 09:13:40 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE), expecting identifier (T_STRING) /home/wahidfix/property.wahidfix.com/application/controllers/Property_unit_size.php 79
ERROR - 2020-05-12 09:14:01 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:14:39 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-12 09:15:22 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:15:26 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:33:32 --> Severity: Notice --> Undefined index: property_size /home/wahidfix/property.wahidfix.com/application/models/Property_model.php 125
ERROR - 2020-05-12 09:33:32 --> Query error: Unknown column 'property_size' in 'field list' - Invalid query: UPDATE `tbl_property` SET `building_id` = '1', `property_type_id` = '1', `property_title` = 'rizwan', `property_size` = NULL, `property_status` = 'open', `property_rent` = '1000', `updated_at` = '2020-05-12 09:33:32'
WHERE `property_id` = '6'
ERROR - 2020-05-12 09:33:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-12 09:36:45 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-12 09:45:36 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:45:46 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:51:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 09:54:55 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:20:10 --> Severity: Notice --> Undefined variable: record_num /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 231
ERROR - 2020-05-12 11:20:10 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 268
ERROR - 2020-05-12 11:20:10 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 308
ERROR - 2020-05-12 11:20:10 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 319
ERROR - 2020-05-12 11:20:10 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:22:12 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:22:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:22:24 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:22:30 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:23:17 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-12 11:26:05 --> Query error: Table 'wahidfix_property.tbl_item_unit' doesn't exist - Invalid query: SELECT `BaseTbl`.`item_master_id`, `BaseTbl`.`item_master_name`, `BaseTbl`.`item_master_desc`, `BaseTbl`.`item_master_unit`, `BaseTbl`.`item_master_created_at`, `BaseTbl`.`item_master_update_at`, `c`.`item_category_name`, `u`.`item_unit_name`, `BaseTbl`.`item_master_logo`
FROM `tbl_item_master` as `BaseTbl`
LEFT JOIN `tbl_item_unit` as `u` ON `u`.`item_unit_id` = `BaseTbl`.`item_master_unit`
LEFT JOIN `tbl_item_category` as `c` ON `c`.`item_category_id` = `BaseTbl`.`item_master_category`
WHERE `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-12 11:33:38 --> Severity: Notice --> Undefined variable: record_num /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 231
ERROR - 2020-05-12 11:33:38 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 268
ERROR - 2020-05-12 11:33:38 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 308
ERROR - 2020-05-12 11:33:38 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 319
ERROR - 2020-05-12 11:33:38 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:34:28 --> Severity: Notice --> Undefined variable: record_num /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 231
ERROR - 2020-05-12 11:34:28 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 268
ERROR - 2020-05-12 11:34:28 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 308
ERROR - 2020-05-12 11:34:28 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 319
ERROR - 2020-05-12 11:34:29 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 11:34:31 --> Severity: Notice --> Undefined variable: record_num /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 231
ERROR - 2020-05-12 11:34:31 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 268
ERROR - 2020-05-12 11:34:31 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 308
ERROR - 2020-05-12 11:34:31 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 319
ERROR - 2020-05-12 11:36:05 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 273
ERROR - 2020-05-12 11:36:05 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 313
ERROR - 2020-05-12 11:36:05 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 324
ERROR - 2020-05-12 11:36:09 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 273
ERROR - 2020-05-12 11:36:09 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 313
ERROR - 2020-05-12 11:36:09 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 324
ERROR - 2020-05-12 11:49:50 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 273
ERROR - 2020-05-12 11:49:50 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 313
ERROR - 2020-05-12 11:49:50 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 324
ERROR - 2020-05-12 11:49:54 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 273
ERROR - 2020-05-12 11:49:54 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 313
ERROR - 2020-05-12 11:49:54 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 324
ERROR - 2020-05-12 11:50:39 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 273
ERROR - 2020-05-12 11:50:39 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 313
ERROR - 2020-05-12 11:50:39 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 324
ERROR - 2020-05-12 12:03:59 --> Severity: Notice --> Undefined variable: query /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 310
ERROR - 2020-05-12 12:03:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-12 12:03:59 --> Severity: Error --> Call to a member function row_array() on null /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 310
ERROR - 2020-05-12 12:05:37 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 273
ERROR - 2020-05-12 12:05:37 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 313
ERROR - 2020-05-12 12:05:37 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 324
ERROR - 2020-05-12 12:08:14 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 308
ERROR - 2020-05-12 12:08:14 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 319
ERROR - 2020-05-12 12:08:39 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 308
ERROR - 2020-05-12 12:08:39 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 319
ERROR - 2020-05-12 12:09:40 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 305
ERROR - 2020-05-12 12:09:40 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 316
ERROR - 2020-05-12 12:11:07 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 305
ERROR - 2020-05-12 12:11:07 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 316
ERROR - 2020-05-12 12:11:51 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 305
ERROR - 2020-05-12 12:11:51 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 316
ERROR - 2020-05-12 12:15:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 12:26:00 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 12:34:31 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 13:04:22 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 13:04:30 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-12 13:25:20 --> Query error: Unknown column 'BaseTbl.po_boi_po_id' in 'where clause' - Invalid query: SELECT `BaseTbl`.*, `p`.`property_title`, `b`.`building_name`
FROM `tbl_po_boi_session` as `BaseTbl`
LEFT JOIN `tbl_property` as `p` ON `p`.`property_id` = `BaseTbl`.`property_id_session`
LEFT JOIN `tbl_building` as `b` ON `b`.`building_id` = `BaseTbl`.`building_id_session`
WHERE `BaseTbl`.`po_boi_po_id` = '2'
ERROR - 2020-05-12 13:45:49 --> Severity: Notice --> Undefined variable: record /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:45:49 --> Severity: Notice --> Trying to get property of non-object /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:45:49 --> Severity: Notice --> Undefined variable: record /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:45:49 --> Severity: Notice --> Trying to get property of non-object /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:18 --> Severity: Notice --> Undefined variable: record /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:18 --> Severity: Notice --> Trying to get property of non-object /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:18 --> Severity: Notice --> Undefined variable: record /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:18 --> Severity: Notice --> Trying to get property of non-object /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:20 --> Severity: Notice --> Undefined variable: record /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:20 --> Severity: Notice --> Trying to get property of non-object /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:20 --> Severity: Notice --> Undefined variable: record /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:46:20 --> Severity: Notice --> Trying to get property of non-object /home/wahidfix/property.wahidfix.com/application/views/add_new_property_reservation_payments_view.php 92
ERROR - 2020-05-12 13:48:39 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:48:39 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:49:07 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:49:07 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:49:25 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:49:25 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:50:11 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:50:11 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:50:21 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:50:21 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:51:31 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 13:51:35 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 13:51:45 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:51:45 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:53:33 --> 404 Page Not Found: Payment_records/index
ERROR - 2020-05-12 13:54:06 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:54:06 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:54:09 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:54:09 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:54:10 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:54:10 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:54:12 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:54:12 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:54:15 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:54:15 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:54:17 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:54:17 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:54:33 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 13:54:33 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 13:54:49 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 13:55:24 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 14:17:15 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 14:17:44 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 14:17:44 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 14:17:46 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 14:17:46 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 14:19:36 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-12 14:37:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 14:41:53 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 14:41:53 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 14:41:55 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 221
ERROR - 2020-05-12 14:41:55 --> Severity: Notice --> Undefined index: data /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 222
ERROR - 2020-05-12 14:43:41 --> 404 Page Not Found: Pay_now/16
ERROR - 2020-05-12 14:43:46 --> 404 Page Not Found: Pay_now/16
ERROR - 2020-05-12 14:46:59 --> Severity: Notice --> Undefined variable: list /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 110
ERROR - 2020-05-12 14:48:30 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 304
ERROR - 2020-05-12 14:48:30 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 344
ERROR - 2020-05-12 14:48:30 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 355
ERROR - 2020-05-12 14:48:30 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 14:49:22 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 304
ERROR - 2020-05-12 14:49:22 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 344
ERROR - 2020-05-12 14:49:22 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 355
ERROR - 2020-05-12 14:49:22 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 14:58:27 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 304
ERROR - 2020-05-12 14:58:27 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 344
ERROR - 2020-05-12 14:58:27 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 355
ERROR - 2020-05-12 14:58:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 14:59:27 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 304
ERROR - 2020-05-12 14:59:27 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 329
ERROR - 2020-05-12 14:59:27 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 340
ERROR - 2020-05-12 14:59:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 15:00:07 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 15:00:07 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 15:00:07 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 15:00:07 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 15:00:10 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 15:00:10 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 15:00:10 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 15:00:10 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 15:00:24 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 15:00:24 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 15:00:24 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 15:00:24 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 15:21:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-05-12 17:36:08 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 17:37:17 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 17:37:17 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 17:37:17 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 17:37:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:23:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-12 20:24:03 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 20:24:03 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 20:24:03 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 20:24:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:24:16 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 20:24:16 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 20:24:16 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 20:24:16 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:25:47 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 20:25:47 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 20:25:47 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 20:25:48 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:26:54 --> Severity: Notice --> Undefined variable: customers /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 296
ERROR - 2020-05-12 20:26:54 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 321
ERROR - 2020-05-12 20:26:54 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 332
ERROR - 2020-05-12 20:26:54 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:28:10 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 298
ERROR - 2020-05-12 20:28:10 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 309
ERROR - 2020-05-12 20:28:10 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:28:11 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:28:36 --> Severity: Notice --> Undefined variable: buildings /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 298
ERROR - 2020-05-12 20:28:36 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 309
ERROR - 2020-05-12 20:28:36 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:28:36 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:29:21 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:29:21 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 307
ERROR - 2020-05-12 20:29:21 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:29:22 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:30:44 --> Severity: Notice --> Undefined variable: properties /home/wahidfix/property.wahidfix.com/application/views/pay_now_view.php 307
ERROR - 2020-05-12 20:30:46 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:30:46 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:32:04 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:32:04 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:32:47 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:32:47 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:33:06 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:33:06 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:34:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:34:34 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:35:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:35:33 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:45:23 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:45:23 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:46:23 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:46:24 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:48:50 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:48:50 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
ERROR - 2020-05-12 20:53:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-12 20:53:20 --> 404 Page Not Found: Pay_now/undefinededit_po_boi_session
