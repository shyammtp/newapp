<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-10 00:16:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: panel ~ MODPATH\business\store\views\store\atlant\templates\login\login.php [ 14 ] in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\login\login.php:14
2017-06-10 00:16:06 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\login\login.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('login/login')
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#5 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#6 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\page\wrapper.php(1): Blocks_Core->childView()
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\column\1column.php(14): Blocks_Core->childView('maincontent')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/1column')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Blocks\Store\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Store_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Index.php(39): Controller_Core->renderBlocks()
#20 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Store_Index->action_login()
#21 [internal function]: Kohana_Controller->execute()
#22 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Index))
#23 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#25 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#29 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#30 {main} in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\login\login.php:14
2017-06-10 00:16:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: place ~ MODPATH\business\store\views\store\atlant\templates\login\login.php [ 17 ] in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\login\login.php:17
2017-06-10 00:16:19 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\login\login.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('login/login')
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#5 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#6 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\page\wrapper.php(1): Blocks_Core->childView()
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\column\1column.php(14): Blocks_Core->childView('maincontent')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/1column')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Blocks\Store\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Store_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Index.php(39): Controller_Core->renderBlocks()
#20 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Store_Index->action_login()
#21 [internal function]: Kohana_Controller->execute()
#22 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Index))
#23 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#25 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#29 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#30 {main} in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\login\login.php:17
2017-06-10 00:43:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getUserId() on null ~ MODPATH\business\store\classes\Model\Store\Adminevent.php [ 71 ] in file:line
2017-06-10 00:43:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 00:44:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Insurance' not found ~ SYSPATH\classes\Kohana\Model.php [ 28 ] in file:line
2017-06-10 00:44:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 00:45:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Insurance' not found ~ SYSPATH\classes\Kohana\Model.php [ 28 ] in file:line
2017-06-10 00:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 01:14:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Insurance_Entity' not found ~ SYSPATH\classes\Kohana\Model.php [ 28 ] in file:line
2017-06-10 01:14:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-10 01:56:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH\business\store\config\storemenu.php [ 70 ] in file:line
2017-06-10 01:56:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line