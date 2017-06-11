<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-26 12:29:01 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-26 12:29:01 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-26 12:48:26 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-26 12:48:26 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-26 15:44:03 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 15:44:05 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 15:44:05 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-26 15:48:48 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 15:48:48 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 15:48:48 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-26 16:24:46 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 16:24:47 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 16:24:47 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-26 17:50:42 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 17:50:43 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-26 17:50:43 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-26 18:03:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'access' in 'field list' [ SELECT * FROM (SELECT `report_data`, `report_date`, `report_id`, `report_access`, `SD_first_name`.`value` AS `patient_name`, ( case when patient_id = 30 and report_access = 0 then 1 else 0 end ) AS ``, `access` FROM `patient_report` AS `udc` INNER JOIN `user` AS `u` ON (`udc`.`patient_id` = `u`.`user_id`) LEFT JOIN `user_attribute_value_static` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `u`.`user_id` AND `SD_first_name`.`attribute_id` = 4) WHERE (`reported_id` = '30' OR `patient_id` = '30')) AS `tab` WHERE `tab`.`access` = 0 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-26 18:03:35 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT * FROM (...', false, Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Blocks/Front/Account/Report.php(38): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/application/views/front/base/templates/account/reports.php(3): Blocks_Front_Account_Report->getReports()
#3 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(202): include('/var/www/vhosts...')
#4 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(223): Blocks_Core->fetchView('account/reports')
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(237): Blocks_Core->renderView()
#6 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(261): Blocks_Core->_toHtml()
#7 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(167): Blocks_Core->toHtml()
#8 /var/www/vhosts/Tabibakjo/application/views/front/base/templates/page/wrapper.php(1): Blocks_Core->childView()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(202): include('/var/www/vhosts...')
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(223): Blocks_Core->fetchView('page/wrapper')
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(237): Blocks_Core->renderView()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(261): Blocks_Core->_toHtml()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(160): Blocks_Core->toHtml()
#14 /var/www/vhosts/Tabibakjo/application/views/front/base/templates/column/profile.php(18): Blocks_Core->childView('maincontent')
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(202): include('/var/www/vhosts...')
#16 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(223): Blocks_Core->fetchView('column/profile')
#17 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(237): Blocks_Core->renderView()
#18 /var/www/vhosts/Tabibakjo/application/classes/Blocks/Front/Page.php(7): Blocks_Core->_toHtml()
#19 /var/www/vhosts/Tabibakjo/modules/core/classes/Blocks/Core.php(261): Blocks_Front_Page->_toHtml()
#20 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(67): Blocks_Core->toHtml()
#21 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(230): Controller_Core->renderBlocks()
#22 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_reports()
#23 [internal function]: Kohana_Controller->execute()
#24 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#25 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#26 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#27 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#28 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#29 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#30 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#31 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#32 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-26 18:45:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Not a valid block type "Account/Appointments/Doctor" ~ MODPATH/core/classes/Kohana/Block.php [ 210 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 18:45:17 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(154): Kohana_Block->createBlock('Account/Appoint...', 'profilepage', Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(199): Kohana_Block->_intializeBlocks(Array, Object(Blocks_Front_Page_Wrapper))
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(68): Kohana_Block->_intializeReference(Array)
#3 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(39): Kohana_Block->loadBlocks()
#4 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(54): Kohana_Block::factory('account')
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(67): Controller_Core->getBlock('content')
#6 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(299): Controller_Core->renderBlocks()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_generatereport()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#10 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#16 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#17 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 18:45:25 --- EMERGENCY: Kohana_Exception [ 0 ]: Not a valid block type "Account/Appointments/Doctor" ~ MODPATH/core/classes/Kohana/Block.php [ 210 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 18:45:25 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(154): Kohana_Block->createBlock('Account/Appoint...', 'profilepage', Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(199): Kohana_Block->_intializeBlocks(Array, Object(Blocks_Front_Page_Wrapper))
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(68): Kohana_Block->_intializeReference(Array)
#3 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(39): Kohana_Block->loadBlocks()
#4 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(54): Kohana_Block::factory('account')
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(67): Controller_Core->getBlock('content')
#6 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(299): Controller_Core->renderBlocks()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_generatereport()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#10 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#16 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#17 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 18:51:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Not a valid block type "Front/Account/Reports" ~ MODPATH/core/classes/Kohana/Block.php [ 210 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 18:51:06 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(154): Kohana_Block->createBlock('Front/Account/R...', 'reports', Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(199): Kohana_Block->_intializeBlocks(Array, Object(Blocks_Front_Page_Wrapper))
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(68): Kohana_Block->_intializeReference(Array)
#3 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(39): Kohana_Block->loadBlocks()
#4 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(54): Kohana_Block::factory('settings')
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(67): Controller_Core->getBlock('content')
#6 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(230): Controller_Core->renderBlocks()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_reports()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#10 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#16 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#17 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 18:51:25 --- EMERGENCY: Kohana_Exception [ 0 ]: Not a valid block type "Front/Account/Reports" ~ MODPATH/core/classes/Kohana/Block.php [ 210 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 18:51:25 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(154): Kohana_Block->createBlock('Front/Account/R...', 'reports', Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(199): Kohana_Block->_intializeBlocks(Array, Object(Blocks_Front_Page_Wrapper))
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(68): Kohana_Block->_intializeReference(Array)
#3 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php(39): Kohana_Block->loadBlocks()
#4 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(54): Kohana_Block::factory('settings')
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Controller/Core.php(67): Controller_Core->getBlock('content')
#6 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(230): Controller_Core->renderBlocks()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_reports()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#10 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#16 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#17 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/Block.php:154
2016-05-26 19:39:03 --- ERROR: body in /var/www/vhosts/Tabibakjo/application/classes/Controller/Report.php:89
2016-05-26 20:12:19 --- ERROR: body in /var/www/vhosts/Tabibakjo/application/classes/Controller/Report.php:95