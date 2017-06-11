<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-15 12:05:01 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Event.php:171
2016-06-15 12:05:02 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Event.php:171
2016-06-15 17:41:51 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `' at line 1 [ SELECT COUNT('*') AS mycount FROM (SELECT * FROM (SELECT `report_data`, `report_date`, `report_id`, `report_access`, `reported_id`, `patient_id`, `SD_first_name`.`value` AS `patient_name`, ( case when patient_id =  and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `udc` LEFT JOIN `user` AS `u` ON (`udc`.`patient_id` = `u`.`user_id`) LEFT JOIN `user_attribute_value_static` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `u`.`user_id` AND `SD_first_name`.`attribute_id` = 4) WHERE `patient_id` IS NULL AND `report_access` = 1 AND `report_access` = 1) AS `tab` WHERE `tab`.`report_access` = 1 ORDER BY `report_date` DESC) AS `t` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-15 17:41:51 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT COUNT('*...', false, Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Blocks/Front/Account/Report.php(98): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/application/classes/Blocks/Front/Account/Report.php(82): Blocks_Front_Account_Report->getTotalItem()
#3 /var/www/vhosts/Tabibakjo/application/views/front/base/templates/account/appreports.php(3): Blocks_Front_Account_Report->getReports()
#4 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(202): include('/var/www/vhosts...')
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(223): Blocks_Core->fetchView('account/apprepo...')
#6 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(237): Blocks_Core->renderView()
#7 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(261): Blocks_Core->_toHtml()
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(167): Blocks_Core->toHtml()
#9 /var/www/vhosts/Tabibakjo/application/views/front/base/templates/page/wrapper.php(1): Blocks_Core->childView()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(202): include('/var/www/vhosts...')
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(223): Blocks_Core->fetchView('page/wrapper')
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(237): Blocks_Core->renderView()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(261): Blocks_Core->_toHtml()
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(160): Blocks_Core->toHtml()
#15 /var/www/vhosts/Tabibakjo/application/views/front/base/templates/column/empty.php(7): Blocks_Core->childView('maincontent')
#16 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(202): include('/var/www/vhosts...')
#17 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(223): Blocks_Core->fetchView('column/empty')
#18 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(237): Blocks_Core->renderView()
#19 /var/www/vhosts/Tabibakjo/application/classes/Blocks/Front/Page.php(7): Blocks_Core->_toHtml()
#20 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(261): Blocks_Front_Page->_toHtml()
#21 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(67): Blocks_Core->toHtml()
#22 /var/www/vhosts/Tabibakjo/application/classes/Controller/Report.php(270): Controller_Core->renderBlocks()
#23 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Report->action_user()
#24 [internal function]: Kohana_Controller->execute()
#25 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Report))
#26 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#27 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#28 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#29 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#30 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#31 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#32 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#33 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-15 18:56:15 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-15 18:56:16 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-15 18:56:16 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-15 18:56:16 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 258 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-15 18:56:17 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-15 19:54:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-15 19:54:38 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Controller/Api/Myprofile.php(27): Model_Api_Userdetails->getProfiles(Array)
#2 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Api_Myprofile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Api_Myprofile))
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#11 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#12 {main} in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-15 19:55:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-15 19:55:26 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Controller/Api/Myprofile.php(27): Model_Api_Userdetails->getProfiles(Array)
#2 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Api_Myprofile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Api_Myprofile))
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#11 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#12 {main} in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151