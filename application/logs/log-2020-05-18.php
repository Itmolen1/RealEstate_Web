<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-18 01:08:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-05-18 07:22:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-05-18 07:26:37 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-18 07:32:35 --> 404 Page Not Found: Assets/js
ERROR - 2020-05-18 08:41:54 --> Query error: Column 'building_id' in where clause is ambiguous - Invalid query: SELECT `BaseTbl`.*, `b`.`building_name`
FROM `tbl_expence` as `BaseTbl`
LEFT JOIN `tbl_building` as `b` ON `b`.`building_id` = `BaseTbl`.`building_id`
WHERE `building_id` = '1'
AND `BaseTbl`.`expence_date` <= '2020-05-01'
AND `BaseTbl`.`expence_date` >= '2020-05-31'
AND `BaseTbl`.`isDeleted` = 0
ERROR - 2020-05-18 08:42:45 --> Severity: Notice --> Undefined property: CI_Loader::$pagination /home/wahidfix/property.wahidfix.com/application/views/expence_report_list_view.php 39
ERROR - 2020-05-18 08:42:45 --> Severity: Error --> Call to a member function create_links() on null /home/wahidfix/property.wahidfix.com/application/views/expence_report_list_view.php 39
ERROR - 2020-05-18 11:36:54 --> 404 Page Not Found: Robotstxt/index
