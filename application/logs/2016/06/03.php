<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-03 16:42:24 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic/Event.php:27
2016-06-03 16:45:52 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic/Event.php:27
2016-06-03 16:48:18 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic/Event.php:27
2016-06-03 16:49:50 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:110
2016-06-03 17:03:30 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic/Event.php:27
2016-06-03 17:05:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid attribute name: clinic_id ~ MODPATH/entity/classes/Model/Entity/Abstract.php [ 300 ] in /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php:266
2016-06-03 17:05:28 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(266): Model_Entity_Abstract->_addAttributeJoin('clinic_id', 'inner')
#1 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(156): Model_Entity_Abstract->_getAttributeConditionSql('clinic_id', Array, 'inner')
#2 /var/www/vhosts/Tabibakjo/application/classes/Controller/View/Clinic.php(19): Model_Entity_Abstract->filter('clinic_id', Array)
#3 /var/www/vhosts/Tabibakjo/application/classes/Controller/View/Clinic.php(31): Controller_View_Clinic->_initData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_View_Clinic->action_detail()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_View_Clinic))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php:266
2016-06-03 17:05:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid attribute name: status ~ MODPATH/entity/classes/Model/Entity/Abstract.php [ 300 ] in /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php:266
2016-06-03 17:05:39 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(266): Model_Entity_Abstract->_addAttributeJoin('status', 'inner')
#1 /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php(156): Model_Entity_Abstract->_getAttributeConditionSql('status', Array, 'inner')
#2 /var/www/vhosts/Tabibakjo/application/classes/Controller/View/Clinic.php(16): Model_Entity_Abstract->filter('status', Array)
#3 /var/www/vhosts/Tabibakjo/application/classes/Controller/View/Clinic.php(31): Controller_View_Clinic->_initData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_View_Clinic->action_detail()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_View_Clinic))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/entity/classes/Model/Entity/Abstract.php:266
2016-06-03 17:06:23 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic/Event.php:27
2016-06-03 19:46:12 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:205
2016-06-03 19:46:12 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:205
2016-06-03 19:46:12 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:205
2016-06-03 19:46:12 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:205
2016-06-03 19:46:12 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:205
2016-06-03 19:46:12 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:221
2016-06-03 20:06:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-03 20:06:35 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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
2016-06-03 20:34:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dep_arr ~ APPPATH/classes/Model/Api/Userdetails.php [ 151 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php:151
2016-06-03 20:34:41 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Userdetails.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 151, Array)
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