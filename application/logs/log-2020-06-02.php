<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-02 00:31:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-02 07:48:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-02 07:49:02 --> Query error: Table 'wahidfix_property.tbl_item_unit' doesn't exist - Invalid query: SELECT `BaseTbl`.`item_master_id`, `BaseTbl`.`item_master_name`, `BaseTbl`.`item_master_desc`, `BaseTbl`.`item_master_unit`, `BaseTbl`.`item_master_created_at`, `BaseTbl`.`item_master_update_at`, `c`.`item_category_name`, `u`.`item_unit_name`, `BaseTbl`.`item_master_logo`
FROM `tbl_item_master` as `BaseTbl`
LEFT JOIN `tbl_item_unit` as `u` ON `u`.`item_unit_id` = `BaseTbl`.`item_master_unit`
LEFT JOIN `tbl_item_category` as `c` ON `c`.`item_category_id` = `BaseTbl`.`item_master_category`
WHERE `BaseTbl`.`isDeleted` = 0
