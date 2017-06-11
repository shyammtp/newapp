<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-31 12:34:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-05-31 12:34:18 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-05-31 12:34:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-05-31 12:34:35 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-05-31 12:34:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-05-31 12:34:37 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-05-31 12:49:52 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 12:49:54 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 12:49:54 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-31 12:51:34 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 12:51:36 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 12:51:36 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-31 13:01:37 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:01:38 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:01:38 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-31 13:02:52 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:02:52 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:02:52 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:02:52 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 195 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:02:53 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:11:10 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:11:12 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:11:12 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:11:12 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 211 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:11:13 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:21:00 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:21:05 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:21:05 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:21:05 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 211 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:21:06 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:13 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:19 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:19 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:19 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 211 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:20 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:29 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:30 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:30 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:30 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 205 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:22:31 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:47 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:48 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:48 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:48 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 211 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:49 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:54 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:54 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:54 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 205 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:23:55 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:24:52 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:24:57 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:24:57 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:24:57 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 212 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:24:58 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:45 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:47 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:47 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:47 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 226 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:48 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:55 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:55 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:55 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:55 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:26:56 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:27:56 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:27:57 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:27:57 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:27:57 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 226 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:27:58 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:02 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:04 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:04 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:04 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:05 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:18 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:20 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:20 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:20 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 226 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:21 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:25 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:26 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:26 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:26 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:27 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:49 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:50 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:50 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:50 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 225 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:51 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:56 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:57 --- INFO: ERROR: Unable to connect to 'tls://gateway.sandbox.push.apple.com:2195':  (0) in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:57 --- INFO: INFO: Retry to connect (1/3)... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:58 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:58 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:58 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:58 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:28:59 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:30 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:30 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:30 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:30 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 225 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:31 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:36 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:37 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:37 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:37 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:29:38 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:38:27 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:38:30 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:38:30 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:38:30 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 13:38:31 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 14:53:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-05-31 14:53:27 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-05-31 14:59:13 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 14:59:15 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 14:59:15 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-31 15:16:04 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:16:04 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:16:04 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-31 15:18:16 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:18:18 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:18:18 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-05-31 15:28:44 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:30:24 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:30:24 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:30:25 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:30:25 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:30:25 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 225 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:30:26 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:33:08 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:33:08 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:33:09 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:33:09 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:33:09 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:33:10 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:37:06 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:37:06 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:37:09 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:37:09 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:37:09 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:37:10 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:38:30 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:38:30 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:38:31 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:38:31 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:38:31 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 249 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:38:32 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:51:00 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:51:00 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:51:02 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:51:02 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:51:02 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 249 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:51:03 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:53:20 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:53:20 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:53:21 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:53:21 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:53:21 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:53:22 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:59:11 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 15:59:11 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:59:13 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:59:13 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:59:13 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 15:59:14 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:03:07 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:03:07 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:03:08 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:03:08 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:03:08 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 209 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:03:09 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:23 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:15:23 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:26 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:26 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:26 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:27 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:53 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:15:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:53 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:53 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:53 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:15:54 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:16:00 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:16:00 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:16:06 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:16:06 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:16:06 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:16:07 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:14 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:25:14 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:15 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:15 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:15 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:16 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:20 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:25:20 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:21 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:21 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:21 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:25:22 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:15 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:36:15 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:16 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:16 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:16 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 247 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:17 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:45 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:36:45 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:46 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:46 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:46 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:47 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:51 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:36:51 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:52 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:52 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:52 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:36:53 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:51 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:42:51 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:52 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:52 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:52 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:53 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:57 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:42:57 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:57 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:57 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:57 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:42:58 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:02 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:46:02 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:03 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:03 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:03 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 247 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:04 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:43 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:46:43 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:44 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:44 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:44 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:45 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:48 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:46:48 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:49 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:49 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:49 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:46:50 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:48:10 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:48:10 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:48:12 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:48:12 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:48:12 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:48:13 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:37 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:51:37 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:38 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:38 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:38 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:39 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:43 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:51:43 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:44 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:44 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:44 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:51:45 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:52:39 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 16:52:39 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:52:40 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:52:40 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:52:40 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 247 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 16:52:41 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:16 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:14:16 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:18 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:18 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:18 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:19 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:24 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:14:24 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:25 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:25 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:25 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:14:26 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:17:53 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:17:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:17:54 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:17:54 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:17:54 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:17:55 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:21:00 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:21:00 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:21:01 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:21:01 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:21:01 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:21:02 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:25:41 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:25:41 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:25:42 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:25:42 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:25:42 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 225 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:25:43 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:28:33 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:28:33 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:28:34 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:28:34 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:28:34 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:28:35 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:50:04 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:50:04 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:50:06 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:50:06 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:50:06 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:50:07 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:57:54 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:57:54 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:57:55 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:57:55 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:57:55 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:57:56 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:59:58 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 17:59:58 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:59:59 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:59:59 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 17:59:59 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:00:00 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:00:36 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:00:36 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:00:37 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:00:37 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:00:37 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:00:38 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:01:36 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:01:36 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:01:37 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:01:37 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:01:37 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 207 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:01:38 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:28 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:02:28 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:29 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:29 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:29 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:30 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:34 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:02:34 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:35 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:35 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:35 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:02:36 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:09 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:03:09 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:10 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:10 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:10 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:11 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:16 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:03:16 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:17 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:17 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:17 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:03:18 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:10:53 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:10:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:10:54 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:10:54 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:10:54 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:10:55 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:10:59 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:10:59 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:11:00 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:11:00 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:11:00 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:11:01 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:44 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:12:44 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:46 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:46 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:46 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:47 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:52 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:12:52 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:53 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:53 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:53 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 222 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:12:54 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:16:57 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:16:57 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:16:59 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:16:59 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:16:59 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 247 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:17:00 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:18:05 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:18:05 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:18:06 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:18:06 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:18:06 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:18:07 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:24:58 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 18:55:55 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:55:58 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:55:58 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:55:58 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 246 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 18:55:59 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:09:36 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:09:37 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:09:37 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:09:37 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:09:38 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:10:59 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:11:00 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:11:00 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:11:00 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 248 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:11:01 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:11:05 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 19:14:01 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:14:01 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:14:05 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:14:05 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:14:09 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:14:09 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:15:10 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:15:10 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:06 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:16:06 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:16:06 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:16:07 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:07 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:24 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:24 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:26 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:26 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:47 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:16:47 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:17:00 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:17:00 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:17:06 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:17:06 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:26:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: s ~ APPPATH/classes/Model/Api/Profile.php [ 289 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php:289
2016-05-31 19:26:30 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php(289): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 289, Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php(227): Model_Api_Profile->getSingleAppointment()
#2 /var/www/vhosts/Tabibakjo/application/classes/Controller/Api/Profile.php(34): Model_Api_Profile->getAppointments()
#3 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Api_Profile->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Api_Profile))
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#12 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#13 {main} in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php:289
2016-05-31 19:26:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: s ~ APPPATH/classes/Model/Api/Profile.php [ 289 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php:289
2016-05-31 19:26:31 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php(289): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 289, Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php(227): Model_Api_Profile->getSingleAppointment()
#2 /var/www/vhosts/Tabibakjo/application/classes/Controller/Api/Profile.php(34): Model_Api_Profile->getAppointments()
#3 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Api_Profile->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Api_Profile))
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#12 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#13 {main} in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Profile.php:289
2016-05-31 19:32:26 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:32:26 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:32:31 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:32:31 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:32:38 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:32:38 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:18 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:18 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:23 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:23 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:39 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:39 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:39 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:39 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:40 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:40 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:40 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:40 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:40 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:40 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:41 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:41 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:41 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-31 19:34:42 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:42 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:49 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:34:49 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:37:02 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:37:02 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-31 19:38:02 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:38:04 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:38:04 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:38:04 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 221 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:38:05 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:38:12 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 19:52:53 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 19:52:53 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:52:55 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:52:55 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:52:55 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 19:52:56 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:03:45 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:03:45 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:03:46 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:03:46 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:03:46 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:03:47 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:21 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:10:21 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:22 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:22 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:22 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:23 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:41 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:10:41 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:42 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:42 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:42 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:10:43 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:11:04 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:11:04 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:11:05 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:11:05 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:11:05 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:11:06 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:16:00 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:16:00 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:16:02 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:16:02 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:16:02 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:16:03 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:22:14 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:22:14 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:22:15 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:22:15 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:22:15 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:22:16 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:03 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:25:03 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:04 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:04 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:04 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:05 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:28 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:25:28 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:29 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:29 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:29 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:30 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:56 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:25:56 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:57 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:57 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:57 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 199 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:25:58 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:30 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:29:30 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:31 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:31 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:31 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:32 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:52 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434
2016-05-31 20:29:52 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:53 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:53 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:53 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 220 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 20:29:54 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-31 22:26:18 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/uploads/user/2/StoreMedicalimportData.csv ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91
2016-05-31 22:26:18 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('uploads/user/2/...')
#1 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('uploads/user/2/...')
#2 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(244): Kohana_Image::factory('uploads/user/2/...')
#3 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(93): ImageCache->_set_params(NULL, NULL)
#4 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/Controller/Imagecache.php(15): ImageCache->__construct()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Imagecache->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Imagecache))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#14 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#15 {main} in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91
2016-05-31 22:26:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/uploads/user/2/StoreMedicalimportData.csv ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91
2016-05-31 22:26:19 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('uploads/user/2/...')
#1 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('uploads/user/2/...')
#2 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(244): Kohana_Image::factory('uploads/user/2/...')
#3 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(93): ImageCache->_set_params(NULL, NULL)
#4 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/Controller/Imagecache.php(15): ImageCache->__construct()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Imagecache->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Imagecache))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#14 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#15 {main} in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91
2016-05-31 22:26:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/uploads/user/2/StoreMedicalimportData.csv ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91
2016-05-31 22:26:24 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('uploads/user/2/...')
#1 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('uploads/user/2/...')
#2 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(244): Kohana_Image::factory('uploads/user/2/...')
#3 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(93): ImageCache->_set_params(NULL, NULL)
#4 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/Controller/Imagecache.php(15): ImageCache->__construct()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Imagecache->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Imagecache))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#14 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#15 {main} in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91
2016-05-31 22:26:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/uploads/user/2/StoreMedicalimportData.csv ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91
2016-05-31 22:26:24 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('uploads/user/2/...')
#1 /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('uploads/user/2/...')
#2 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(244): Kohana_Image::factory('uploads/user/2/...')
#3 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/ImageCache.php(93): ImageCache->_set_params(NULL, NULL)
#4 /var/www/vhosts/Tabibakjo/modules/imagecache/classes/Controller/Imagecache.php(15): ImageCache->__construct()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Imagecache->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Imagecache))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#13 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#14 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#15 {main} in /var/www/vhosts/Tabibakjo/modules/image/classes/Kohana/Image/GD.php:91