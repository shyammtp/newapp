<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-14 13:05:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND `SD_first_name`.`value` = '%Array%' AND `main_table`.`user_type` = 1' at line 1 [ SELECT `SD_first_name`.`value` AS `first_name`, `main_table`.`social_title`, `main_table`.`user_id` FROM `user` AS `main_table` INNER JOIN `user_attribute_value` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `main_table`.`user_id` AND `SD_first_name`.`attribute_id` = 4 AND `SD_first_name`.`language_id` = 1) WHERE `main_table`.`user_id` NOT IN () AND `SD_first_name`.`value` = '%Array%' AND `main_table`.`user_type` = 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:05:55 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `SD_firs...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(752): Kohana_Database_Query->execute('default')
#2 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Attribute.php(24): Model_Entity_Abstract->getAllIds()
#3 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(368): Model_User_Attribute->getSelect()
#4 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(235): Model_Entity_Abstract->getAttributeValues()
#5 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(198): Model_Entity_Abstract->_loadAttributes()
#6 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User.php(49): Model_Entity_Abstract->loadCollection()
#7 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(325): Model_User->loadCollection()
#8 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(315): Controller_Account->_getRotateDoctors(Array)
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_getdoctors()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#12 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#16 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#17 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#18 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#19 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:05:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND `SD_first_name`.`value` = '%Array%' AND `main_table`.`user_type` = 1' at line 1 [ SELECT `SD_first_name`.`value` AS `first_name`, `main_table`.`social_title`, `main_table`.`user_id` FROM `user` AS `main_table` INNER JOIN `user_attribute_value` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `main_table`.`user_id` AND `SD_first_name`.`attribute_id` = 4 AND `SD_first_name`.`language_id` = 1) WHERE `main_table`.`user_id` NOT IN () AND `SD_first_name`.`value` = '%Array%' AND `main_table`.`user_type` = 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:05:57 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `SD_firs...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(752): Kohana_Database_Query->execute('default')
#2 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Attribute.php(24): Model_Entity_Abstract->getAllIds()
#3 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(368): Model_User_Attribute->getSelect()
#4 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(235): Model_Entity_Abstract->getAttributeValues()
#5 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(198): Model_Entity_Abstract->_loadAttributes()
#6 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User.php(49): Model_Entity_Abstract->loadCollection()
#7 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(325): Model_User->loadCollection()
#8 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(315): Controller_Account->_getRotateDoctors(Array)
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_getdoctors()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#12 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#16 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#17 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#18 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#19 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:09:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ILIKE '%%' AND `main_table`.`user_type` = 1' at line 1 [ SELECT `SD_first_name`.`value` AS `first_name`, `main_table`.`social_title`, `main_table`.`user_id` FROM `user` AS `main_table` INNER JOIN `user_attribute_value` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `main_table`.`user_id` AND `SD_first_name`.`attribute_id` = 4 AND `SD_first_name`.`language_id` = 1) WHERE `main_table`.`user_id` NOT IN ('30') AND `SD_first_name`.`value` ILIKE '%%' AND `main_table`.`user_type` = 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:09:57 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `SD_firs...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(752): Kohana_Database_Query->execute('default')
#2 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Attribute.php(24): Model_Entity_Abstract->getAllIds()
#3 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(368): Model_User_Attribute->getSelect()
#4 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(235): Model_Entity_Abstract->getAttributeValues()
#5 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(198): Model_Entity_Abstract->_loadAttributes()
#6 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User.php(49): Model_Entity_Abstract->loadCollection()
#7 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(325): Model_User->loadCollection()
#8 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(315): Controller_Account->_getRotateDoctors('', Array)
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_getdoctors()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#12 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#16 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#17 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#18 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#19 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:10:03 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ILIKE '%s%' AND `main_table`.`user_type` = 1' at line 1 [ SELECT `SD_first_name`.`value` AS `first_name`, `main_table`.`social_title`, `main_table`.`user_id` FROM `user` AS `main_table` INNER JOIN `user_attribute_value` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `main_table`.`user_id` AND `SD_first_name`.`attribute_id` = 4 AND `SD_first_name`.`language_id` = 1) WHERE `main_table`.`user_id` NOT IN ('30') AND `SD_first_name`.`value` ILIKE '%s%' AND `main_table`.`user_type` = 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:10:03 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `SD_firs...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(752): Kohana_Database_Query->execute('default')
#2 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Attribute.php(24): Model_Entity_Abstract->getAllIds()
#3 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(368): Model_User_Attribute->getSelect()
#4 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(235): Model_Entity_Abstract->getAttributeValues()
#5 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(198): Model_Entity_Abstract->_loadAttributes()
#6 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User.php(49): Model_Entity_Abstract->loadCollection()
#7 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(325): Model_User->loadCollection()
#8 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(315): Controller_Account->_getRotateDoctors('s', Array)
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_getdoctors()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#12 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#16 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#17 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#18 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#19 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:10:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ILIKE '%sa%' AND `main_table`.`user_type` = 1' at line 1 [ SELECT `SD_first_name`.`value` AS `first_name`, `main_table`.`social_title`, `main_table`.`user_id` FROM `user` AS `main_table` INNER JOIN `user_attribute_value` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `main_table`.`user_id` AND `SD_first_name`.`attribute_id` = 4 AND `SD_first_name`.`language_id` = 1) WHERE `main_table`.`user_id` NOT IN ('30') AND `SD_first_name`.`value` ILIKE '%sa%' AND `main_table`.`user_type` = 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:10:04 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `SD_firs...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(752): Kohana_Database_Query->execute('default')
#2 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Attribute.php(24): Model_Entity_Abstract->getAllIds()
#3 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(368): Model_User_Attribute->getSelect()
#4 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(235): Model_Entity_Abstract->getAttributeValues()
#5 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(198): Model_Entity_Abstract->_loadAttributes()
#6 /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User.php(49): Model_Entity_Abstract->loadCollection()
#7 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(325): Model_User->loadCollection()
#8 /var/www/vhosts/Tabibakjo/application/classes/Controller/Account.php(315): Controller_Account->_getRotateDoctors('sa', Array)
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Account->action_getdoctors()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Account))
#12 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#15 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#16 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#17 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#18 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#19 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 13:22:54 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Appointments.php:72
2016-06-14 16:48:46 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:48:47 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:48:47 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:48:47 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 260 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:48:48 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:51:22 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:51:23 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:51:23 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:51:23 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 255 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:51:24 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:18 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:19 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:19 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:19 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 207 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:20 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:33 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:34 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:34 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:34 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 249 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:52:35 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:54:18 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:54:19 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:54:19 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:54:19 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 256 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:54:20 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:58:04 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:58:05 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:58:05 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:58:05 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 256 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 16:58:06 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:01:24 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:01:25 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:01:25 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:01:25 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 207 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:01:26 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:39:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:39:54 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:39:54 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:39:54 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 236 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:39:55 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:41:15 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:41:15 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:41:15 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:41:15 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 229 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:41:16 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:53:06 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:53:07 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:53:07 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:53:07 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 256 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 17:53:08 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:03 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:03 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:03 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:03 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 207 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:04 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:17 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:18 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:18 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:18 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 207 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:49:19 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:50:43 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:50:43 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:50:43 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:50:43 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 207 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 19:50:44 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:26:24 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:26:25 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:26:25 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:26:25 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 207 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:26:26 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:28:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:28:54 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:28:54 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:28:54 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 317 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:28:55 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:35:27 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:35:28 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:35:28 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:35:28 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 270 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:35:29 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:40:56 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `' at line 1 [ SELECT COUNT('*') AS mycount FROM (SELECT * FROM (SELECT `report_data`, `report_date`, `report_id`, `report_access`, `reported_id`, `patient_id`, `SD_first_name`.`value` AS `patient_name`, ( case when patient_id =  and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `udc` LEFT JOIN `user` AS `u` ON (`udc`.`patient_id` = `u`.`user_id`) LEFT JOIN `user_attribute_value_static` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `u`.`user_id` AND `SD_first_name`.`attribute_id` = 4) WHERE `patient_id` IS NULL AND `report_access` = 1 AND `report_access` = 1) AS `tab` WHERE `tab`.`report_access` = 1 ORDER BY `report_date` DESC) AS `t` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 20:40:56 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT COUNT('*...', false, Array)
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
2016-06-14 20:41:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `' at line 1 [ SELECT COUNT('*') AS mycount FROM (SELECT * FROM (SELECT `report_data`, `report_date`, `report_id`, `report_access`, `reported_id`, `patient_id`, `SD_first_name`.`value` AS `patient_name`, ( case when patient_id =  and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `udc` LEFT JOIN `user` AS `u` ON (`udc`.`patient_id` = `u`.`user_id`) LEFT JOIN `user_attribute_value_static` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `u`.`user_id` AND `SD_first_name`.`attribute_id` = 4) WHERE `patient_id` IS NULL AND `report_access` = 1 AND `report_access` = 1) AS `tab` WHERE `tab`.`report_access` = 1 ORDER BY `report_date` DESC) AS `t` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 20:41:30 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT COUNT('*...', false, Array)
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
2016-06-14 20:44:29 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `' at line 1 [ SELECT COUNT('*') AS mycount FROM (SELECT * FROM (SELECT `report_data`, `report_date`, `report_id`, `report_access`, `reported_id`, `patient_id`, `SD_first_name`.`value` AS `patient_name`, ( case when patient_id =  and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `udc` LEFT JOIN `user` AS `u` ON (`udc`.`patient_id` = `u`.`user_id`) LEFT JOIN `user_attribute_value_static` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `u`.`user_id` AND `SD_first_name`.`attribute_id` = 4) WHERE `patient_id` IS NULL AND `report_access` = 1 AND `report_access` = 1) AS `tab` WHERE `tab`.`report_access` = 1 ORDER BY `report_date` DESC) AS `t` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 20:44:29 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT COUNT('*...', false, Array)
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
2016-06-14 20:56:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-14 20:56:49 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-06-14 20:58:11 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:58:12 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:58:12 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:58:12 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 229 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:58:13 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:59:55 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:59:57 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:59:57 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:59:57 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 270 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 20:59:58 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:00:47 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `' at line 1 [ SELECT COUNT('*') AS mycount FROM (SELECT * FROM (SELECT `report_data`, `report_date`, `report_id`, `report_access`, `reported_id`, `patient_id`, `SD_first_name`.`value` AS `patient_name`, ( case when patient_id =  and report_access = 0 then 1 else 0 end ) AS `access` FROM `patient_report` AS `udc` LEFT JOIN `user` AS `u` ON (`udc`.`patient_id` = `u`.`user_id`) LEFT JOIN `user_attribute_value_static` AS `SD_first_name` ON (`SD_first_name`.`user_id` = `u`.`user_id` AND `SD_first_name`.`attribute_id` = 4) WHERE `patient_id` IS NULL AND `report_access` = 1 AND `report_access` = 1) AS `tab` WHERE `tab`.`report_access` = 1 ORDER BY `report_date` DESC) AS `t` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-06-14 21:00:47 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT COUNT('*...', false, Array)
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
2016-06-14 21:22:11 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:22:12 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:22:12 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:22:12 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 210 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:22:13 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:23:14 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:23:15 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:23:15 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:23:15 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 202 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:23:16 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:24:12 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:24:13 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:24:13 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:24:13 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 202 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:24:14 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:37:57 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:37:58 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:37:58 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:37:58 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 210 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-14 21:37:59 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433