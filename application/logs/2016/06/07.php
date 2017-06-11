<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-07 16:08:19 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:08:21 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:08:21 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:08:21 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 242 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:08:22 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:19:12 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:19:14 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:19:14 --- INFO: INFO: Sending messages queue, run #1: 1 message(s) left in queue. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:19:14 --- INFO: STATUS: Sending message ID 1 [custom identifier: Message-Badge-3] (1/3): 247 bytes. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:19:15 --- INFO: INFO: Disconnected. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-06-07 16:39:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-07 16:39:12 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-06-07 19:28:27 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:110