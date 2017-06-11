<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-09 12:49:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-09 12:49:11 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-06-09 12:49:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-09 12:49:28 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-06-09 16:59:56 --- EMERGENCY: Kohana_Exception [ 0 ]: File not found ~ MODPATH/core/classes/Controller/Core.php [ 127 ] in /var/www/vhosts/Tabibakjo/application/classes/Controller/Report.php:340
2016-06-09 16:59:56 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Controller/Report.php(340): Controller_Core->_prepareDownloadResponse('Report_2016-06-...', Array)
#1 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Report->action_export()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Report))
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#7 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#10 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#11 {main} in /var/www/vhosts/Tabibakjo/application/classes/Controller/Report.php:340
2016-06-09 19:29:00 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:29:01 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:29:01 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:29:01 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:29:02 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:32:54 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:32:55 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:32:55 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:32:55 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 233 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:32:56 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:34:17 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:34:19 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:34:19 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:34:19 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:34:20 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:36:43 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:36:44 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:36:44 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:36:44 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 233 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:36:45 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:37:42 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:37:43 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:37:43 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:37:43 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:37:44 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:39:14 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:39:15 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:39:15 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:39:15 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 233 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:39:16 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:53:31 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:53:33 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:53:33 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:53:33 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 257 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:53:34 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:54:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:54:54 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:54:54 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:54:54 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 249 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:54:55 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:19 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:20 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:20 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:20 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 245 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:21 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:56 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:56 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:56 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:56 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 233 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 19:56:57 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:11:54 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:11:55 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:11:55 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:11:55 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:11:56 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:58:06 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:58:07 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:58:07 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:58:07 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 233 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-09 20:58:08 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433