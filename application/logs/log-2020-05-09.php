<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-09 11:07:56 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-09 11:13:40 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 11:14:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 11:14:08 --> 404 Page Not Found: Reports_listing/index
ERROR - 2020-05-09 12:19:06 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 12:20:04 --> 404 Page Not Found: Property_reservation_get_payment_record_details/index
ERROR - 2020-05-09 12:21:15 --> 404 Page Not Found: Property_reservation_get_payment_record_details/index
ERROR - 2020-05-09 12:21:44 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 12:21:57 --> Query error: Table 'wahidfix_property.tbl_services' doesn't exist - Invalid query: SELECT *
FROM `tbl_services`
ERROR - 2020-05-09 12:22:02 --> 404 Page Not Found: Property_reservation_get_payment_record_details/index
ERROR - 2020-05-09 13:27:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-05-09 13:33:52 --> 404 Page Not Found: Sub_services/edit_sub_subservice
ERROR - 2020-05-09 13:38:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-09 13:40:29 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:19:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-09 16:19:37 --> 404 Page Not Found: Property_reservation_get_payment_record_details/index
ERROR - 2020-05-09 16:20:17 --> Query error: Unknown column 'BaseTbl.vehicle_no' in 'where clause' - Invalid query: SELECT `BaseTbl`.*, `c`.`customer_name`
FROM `tbl_property_reservation` as `BaseTbl`
LEFT JOIN `tbl_customer` as `c` ON `c`.`customer_id` = `BaseTbl`.`customer_id`
WHERE (`BaseTbl`.`vehicle_no` LIKE '%Irfan%'
                            OR  `BaseTbl`.`vehicle_tc_no` LIKE '%Irfan%'
                            OR  `c`.`customer_name` LIKE '%Irfan%')
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-09 16:21:33 --> Query error: Unknown column 'BaseTbl.vehicle_no' in 'where clause' - Invalid query: SELECT `BaseTbl`.*, `c`.`customer_name`
FROM `tbl_property_reservation` as `BaseTbl`
LEFT JOIN `tbl_customer` as `c` ON `c`.`customer_id` = `BaseTbl`.`customer_id`
WHERE (`BaseTbl`.`vehicle_no` LIKE '%Irfan%'
                            OR  `BaseTbl`.`vehicle_tc_no` LIKE '%Irfan%'
                            OR  `c`.`customer_name` LIKE '%Irfan%')
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-09 16:22:18 --> 404 Page Not Found: Property_reservation_get_payment_record_details/index
ERROR - 2020-05-09 16:22:24 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:22:28 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:22:36 --> 404 Page Not Found: Property_reservation_get_payment_record_details/index
ERROR - 2020-05-09 16:26:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:26:29 --> Query error: Unknown column 'BaseTbl.property_reservation_venodr_id' in 'on clause' - Invalid query: SELECT `BaseTbl`.*, `vendor`.*
FROM `tbl_property_reservation` as `BaseTbl`
LEFT JOIN `tbl_vendor` as `vendor` ON `vendor`.`vendor_id` = `BaseTbl`.`property_reservation_venodr_id`
WHERE `BaseTbl`.`reservation_id` = '6'
ERROR - 2020-05-09 16:28:57 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:30:48 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:31:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:31:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:31:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:31:56 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:32:37 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:35:41 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 16:38:28 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:00:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:02:58 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:03:24 --> 404 Page Not Found: Property_reservation_add_payment_record/index
ERROR - 2020-05-09 17:09:53 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:09:56 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:10:39 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:11:58 --> Severity: Notice --> Undefined index: po_payment_record_po_id /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 74
ERROR - 2020-05-09 17:11:58 --> Severity: Notice --> Undefined index: po_payment_record_date /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 75
ERROR - 2020-05-09 17:11:58 --> Severity: Notice --> Undefined index: property_reservation_bill_no /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 76
ERROR - 2020-05-09 17:11:58 --> Severity: Notice --> Undefined index: po_payment_record_payment_no /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 77
ERROR - 2020-05-09 17:11:58 --> Severity: Notice --> Undefined index: po_payment_record_total_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 81
ERROR - 2020-05-09 17:11:58 --> Severity: Notice --> Undefined index: po_payment_record_paid_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 82
ERROR - 2020-05-09 17:11:58 --> Severity: Notice --> Undefined index: po_payment_record_due_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 83
ERROR - 2020-05-09 17:11:58 --> Query error: Column 'po_payment_record_po_id' cannot be null - Invalid query: INSERT INTO `tbl_po_payment_record` (`po_payment_record_po_id`, `po_payment_record_date`, `po_payment_record_invoice_no`, `po_payment_record_payment_no`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `po_payment_record_total_amt`, `po_payment_record_paid_amt`, `po_payment_record_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES (NULL, NULL, NULL, NULL, 'Cash', '', '', NULL, NULL, NULL, '', '2020-05-09 17:11:58', '2020-05-09 17:11:58')
ERROR - 2020-05-09 17:11:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-09 17:16:38 --> Severity: Notice --> Undefined index: po_payment_record_total_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 81
ERROR - 2020-05-09 17:16:38 --> Severity: Notice --> Undefined index: po_payment_record_paid_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 82
ERROR - 2020-05-09 17:16:38 --> Severity: Notice --> Undefined index: po_payment_record_due_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 83
ERROR - 2020-05-09 17:16:38 --> Query error: Column 'po_payment_record_total_amt' cannot be null - Invalid query: INSERT INTO `tbl_po_payment_record` (`reservation_id`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `po_payment_record_total_amt`, `po_payment_record_paid_amt`, `po_payment_record_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES ('6', 'Cash', '', '', NULL, NULL, NULL, '', '2020-05-09 17:16:38', '2020-05-09 17:16:38')
ERROR - 2020-05-09 17:16:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-09 17:16:44 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:16:46 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:17:03 --> Severity: Notice --> Undefined index: po_payment_record_total_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 81
ERROR - 2020-05-09 17:17:03 --> Severity: Notice --> Undefined index: po_payment_record_paid_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 82
ERROR - 2020-05-09 17:17:03 --> Severity: Notice --> Undefined index: po_payment_record_due_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 83
ERROR - 2020-05-09 17:17:03 --> Query error: Column 'po_payment_record_total_amt' cannot be null - Invalid query: INSERT INTO `tbl_po_payment_record` (`reservation_id`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `po_payment_record_total_amt`, `po_payment_record_paid_amt`, `po_payment_record_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES ('6', 'Cash', '', '', NULL, NULL, NULL, 'test', '2020-05-09 17:17:03', '2020-05-09 17:17:03')
ERROR - 2020-05-09 17:17:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-09 17:18:27 --> Query error: Unknown column 'reservation_amount' in 'field list' - Invalid query: INSERT INTO `tbl_po_payment_record` (`reservation_id`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `reservation_amount`, `reservation_paid_amt`, `reservation_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES ('6', 'Cash', '', '', '4040', '0', '2020', 'test', '2020-05-09 17:18:27', '2020-05-09 17:18:27')
ERROR - 2020-05-09 17:18:57 --> Severity: error --> Exception: Unable to locate the model you have specified: Services_model /home/wahidfix/property.wahidfix.com/system/core/Loader.php 348
ERROR - 2020-05-09 17:20:33 --> Severity: Notice --> Undefined index: po_payment_record_po_id /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 93
ERROR - 2020-05-09 17:20:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/helpers/url_helper.php 561
ERROR - 2020-05-09 17:21:13 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:26:15 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:37:39 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:37:41 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:38:26 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:38:29 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:39:23 --> Query error: Unknown column 'reservation_amount' in 'field list' - Invalid query: INSERT INTO `tbl_po_payment_record` (`reservation_id`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `reservation_amount`, `reservation_paid_amt`, `po_reservation_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES ('6', 'Cash', '', '', '4040', '0', '11', 'ff', '2020-05-09 17:39:23', '2020-05-09 17:39:23')
ERROR - 2020-05-09 17:39:49 --> Query error: Unknown column 'reservation_paid_amt' in 'field list' - Invalid query: INSERT INTO `tbl_po_payment_record` (`reservation_id`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `reservation_paid_amt`, `po_reservation_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES ('6', 'Cash', '', '', '0', '11', 'ff', '2020-05-09 17:39:49', '2020-05-09 17:39:49')
ERROR - 2020-05-09 17:42:20 --> Severity: Notice --> Undefined index: po_reservation_amount /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 82
ERROR - 2020-05-09 17:42:20 --> Severity: Notice --> Undefined index: po_reservation_paid_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 83
ERROR - 2020-05-09 17:42:20 --> Query error: Column 'po_reservation_amount' cannot be null - Invalid query: INSERT INTO `tbl_po_payment_record` (`reservation_id`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `po_reservation_amount`, `po_reservation_paid_amt`, `po_reservation_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES ('6', 'Cash', '', '', NULL, NULL, '11', 'ff', '2020-05-09 17:42:20', '2020-05-09 17:42:20')
ERROR - 2020-05-09 17:42:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-09 17:42:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:42:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:42:46 --> Severity: Notice --> Undefined index: reservation_paid_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 93
ERROR - 2020-05-09 17:42:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/helpers/url_helper.php 561
ERROR - 2020-05-09 17:43:29 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:44:30 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:49:13 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:49:24 --> Severity: Notice --> Undefined index: po_reservation_due_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 84
ERROR - 2020-05-09 17:49:24 --> Query error: Column 'po_reservation_due_amt' cannot be null - Invalid query: INSERT INTO `tbl_po_payment_record` (`reservation_id`, `po_payment_record_type`, `po_payment_record_cheque_no`, `po_payment_record_bank`, `po_reservation_amount`, `po_reservation_paid_amt`, `po_reservation_due_amt`, `po_payment_record_note`, `po_payment_record_created_at`, `po_payment_record_updated_at`) VALUES ('6', 'Cash', '', '', '4040', '2020', NULL, '', '2020-05-09 17:49:24', '2020-05-09 17:49:24')
ERROR - 2020-05-09 17:49:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/core/Common.php 570
ERROR - 2020-05-09 17:50:15 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:57:44 --> Severity: Notice --> Undefined index: po_reservation_due_amt /home/wahidfix/property.wahidfix.com/application/models/Property_reservation_model.php 93
ERROR - 2020-05-09 17:57:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/wahidfix/property.wahidfix.com/system/core/Exceptions.php:271) /home/wahidfix/property.wahidfix.com/system/helpers/url_helper.php 561
ERROR - 2020-05-09 17:58:28 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:59:15 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:59:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:59:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 17:59:36 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 18:00:30 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 18:00:53 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:06:36 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:07:40 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:10:55 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:11:24 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:11:26 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:11:26 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:11:37 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:12:04 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:12:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:12:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:13:54 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:14:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:14:58 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:15:44 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:16:53 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:19:01 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:19:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:24:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:25:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:34:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:35:55 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:37:54 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:56:25 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:56:30 --> Severity: Notice --> Undefined variable: result /home/wahidfix/property.wahidfix.com/application/controllers/Property_reservation.php 195
ERROR - 2020-05-09 19:56:53 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:57:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:57:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:58:19 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:58:49 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 19:59:45 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:08:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:14:11 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:17:17 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:17:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:17:20 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:17:37 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:17:52 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:18:33 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:18:44 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-09 20:19:59 --> 404 Page Not Found: Assets/js
