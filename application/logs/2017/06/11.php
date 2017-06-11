<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-11 08:48:06 --- CRITICAL: Database_Exception [ 0 ]: ERROR:  relation "currency_settings" does not exist
LINE 1: SELECT * FROM "currency_settings" AS "main_table"
                      ^ [ SELECT * FROM "currency_settings" AS "main_table" ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 08:48:06 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php(262): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM "...', false, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Model\Core\Currency.php(35): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Settings.php(197): Model_Core_Currency->getOptionArray()
#3 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Settings.php(77): Controller_Store_Settings->_getCurrencyArray()
#4 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Store_Settings->action_general()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Settings))
#7 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#12 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#13 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#14 {main} in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 08:48:30 --- CRITICAL: Kohana_Exception [ 0 ]: Not a valid block type "Store/Paymentsettings" ~ MODPATH\core\classes\Kohana\Block.php [ 210 ] in C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php:33
2017-06-11 08:48:30 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php(33): Kohana_Block->createBlock('Store/Paymentse...')
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('configuration/e...')
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#5 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#6 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\page\wrapper.php(1): Blocks_Core->childView()
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\column\2column-left.php(24): Blocks_Core->childView('maincontent')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Blocks\Store\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Store_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Settings.php(192): Controller_Core->renderBlocks()
#20 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Store_Settings->action_general()
#21 [internal function]: Kohana_Controller->execute()
#22 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Settings))
#23 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#25 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#29 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#30 {main} in C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php:33
2017-06-11 08:48:39 --- CRITICAL: Kohana_Exception [ 0 ]: Not a valid block type "Store/Timesettings" ~ MODPATH\core\classes\Kohana\Block.php [ 210 ] in C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php:33
2017-06-11 08:48:39 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php(33): Kohana_Block->createBlock('Store/Timesetti...')
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('configuration/e...')
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#5 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#6 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\page\wrapper.php(1): Blocks_Core->childView()
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\column\2column-left.php(24): Blocks_Core->childView('maincontent')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Blocks\Store\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Store_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Settings.php(192): Controller_Core->renderBlocks()
#20 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Store_Settings->action_general()
#21 [internal function]: Kohana_Controller->execute()
#22 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Settings))
#23 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#25 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#29 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#30 {main} in C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php:33
2017-06-11 09:05:32 --- CRITICAL: Exception [ 0 ]: Invalid method Blocks_Store_Settings_Themecolor::_getValue(Array
(
)
) ~ MODPATH\core\classes\Kohana\Core\Object.php [ 621 ] in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\settings\themecolor.php:2
2017-06-11 09:05:32 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\settings\themecolor.php(2): Kohana_Core_Object->__call('_getValue', Array)
#1 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\settings\themecolor.php(2): Blocks_Store_Settings_Themecolor->_getValue()
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('settings/themec...')
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#5 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#6 C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php(33): Blocks_Core->toHtml()
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('configuration/e...')
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\page\wrapper.php(1): Blocks_Core->childView()
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\column\2column-left.php(24): Blocks_Core->childView('maincontent')
#19 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#20 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#21 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#22 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Blocks\Store\Page.php(7): Blocks_Core->_toHtml()
#23 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Store_Page->_toHtml()
#24 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#25 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Settings.php(177): Controller_Core->renderBlocks()
#26 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Store_Settings->action_general()
#27 [internal function]: Kohana_Controller->execute()
#28 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Settings))
#29 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#30 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#31 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#32 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#33 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#34 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#35 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#36 {main} in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\settings\themecolor.php:2
2017-06-11 09:12:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\business\store\views\store\atlant\templates\settings\themecolor.php [ 13 ] in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\settings\themecolor.php:13
2017-06-11 09:12:46 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\settings\themecolor.php(13): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('settings/themec...')
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#5 C:\xampp\htdocs\project\cpay\modules\core\views\store\base\templates\configuration\elements.php(33): Blocks_Core->toHtml()
#6 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('configuration/e...')
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#11 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\page\wrapper.php(1): Blocks_Core->childView()
#12 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#16 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\column\2column-left.php(24): Blocks_Core->childView('maincontent')
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#19 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#20 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#21 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Blocks\Store\Page.php(7): Blocks_Core->_toHtml()
#22 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Store_Page->_toHtml()
#23 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#24 C:\xampp\htdocs\project\cpay\modules\business\store\classes\Controller\Store\Settings.php(176): Controller_Core->renderBlocks()
#25 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Store_Settings->action_general()
#26 [internal function]: Kohana_Controller->execute()
#27 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Settings))
#28 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#29 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#30 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#31 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#32 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#33 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#34 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#35 {main} in C:\xampp\htdocs\project\cpay\modules\business\store\views\store\atlant\templates\settings\themecolor.php:13
2017-06-11 10:13:03 --- CRITICAL: Kohana_Exception [ 0 ]: Not a valid block file "error/404" ~ MODPATH\core\classes\Kohana\Block.php [ 103 ] in C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php:61
2017-06-11 10:13:03 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php(61): Kohana_Block->getBlocks()
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php(39): Kohana_Block->loadBlocks()
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\HTTP\Exception\404.php(27): Kohana_Block::factory('error/404')
#3 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(115): HTTP_Exception_404->get_response()
#4 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#10 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#11 {main} in C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php:61
2017-06-11 10:18:12 --- CRITICAL: Kohana_Exception [ 0 ]: Not a valid block file "error/404" ~ MODPATH\core\classes\Kohana\Block.php [ 103 ] in C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php:61
2017-06-11 10:18:12 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php(61): Kohana_Block->getBlocks()
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php(39): Kohana_Block->loadBlocks()
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\HTTP\Exception\404.php(27): Kohana_Block::factory('error/404')
#3 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(115): HTTP_Exception_404->get_response()
#4 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#10 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#11 {main} in C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\Block.php:61
2017-06-11 10:32:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 10:32:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 10:33:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 10:33:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 10:33:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 10:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 10:35:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 10:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 10:35:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 10:35:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 10:38:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 10:38:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 10:38:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 10:38:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 16:11:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 16:11:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 16:44:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 16:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 16:45:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 16:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 16:48:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 16:48:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 17:46:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 17:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 17:50:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 17:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:43:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:43:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:45:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:45:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:45:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:45:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:45:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:45:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:45:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:45:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:45:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:45:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:47:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:47:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:47:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:47:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:48:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:49:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:49:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:51:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:51:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:52:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:52:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:53:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:53:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 22:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 22:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:01:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:01:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:01:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:01:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:10:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:11:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:11:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:11:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Merchant::loadLayout() ~ MODPATH\merchant\classes\Controller\Admin\Merchant.php [ 14 ] in file:line
2017-06-11 23:11:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:11:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Core::loadBlocks(), called in C:\xampp\htdocs\project\cpay\modules\merchant\classes\Controller\Admin\Merchant.php on line 14 and defined ~ MODPATH\core\classes\Controller\Core.php [ 38 ] in C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php:38
2017-06-11 23:11:55 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(38): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Controller\Admin\Merchant.php(14): Controller_Core->loadBlocks()
#2 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Admin_Merchant->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Merchant))
#5 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#11 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#12 {main} in C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php:38
2017-06-11 23:12:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:12:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:12:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:12:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:12:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:12:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:17:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:17:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:18:09 --- CRITICAL: Database_Exception [ 0 ]: ERROR:  missing FROM-clause entry for table "main_table"
LINE 1: ...e_entity" AS "pe" JOIN "place_info" AS "info" ON ("main_tabl...
                                                             ^ [ SELECT COUNT('*') AS mycount FROM (SELECT "info"."place_name", "pe"."status", "pe"."created_date", "pe"."updated_date" FROM "place_entity" AS "pe" JOIN "place_info" AS "info" ON ("main_table"."place_id" = "info"."place_id" AND "info"."language_id" = (case when (select count(place_id) as totalcount from place_info as info where info.language_id = 1 and place_id = main_table.place_id) > 0 THEN 1 ELSE 1 END))) AS "t" ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:18:09 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php(262): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT('*...', false, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(79): Kohana_Database_Query->execute('default')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(93): Blocks_Core_Pagination->getTotalItem()
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(322): Blocks_Core_Pagination->load()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(417): Blocks_Core_Widget_List->_preparePaging()
#5 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(30): Blocks_Core_Widget_List->_prepareQuery()
#6 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(433): Blocks_Admin_Merchant_List->_prepareQuery()
#7 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(82): Blocks_Core_Widget_List->_prepareColumns()
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(510): Blocks_Admin_Merchant_List->_prepareColumns()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(534): Blocks_Core_Widget_List->_prepareList()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(260): Blocks_Core_Widget_List->_beforeToHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\user\views\admin\base\templates\admin\users.php(2): Blocks_Core->childView('user_listing')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('admin/users')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\page\wrapper.php(1): Blocks_Core->childView()
#20 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#21 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#22 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#23 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#24 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#25 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\column\2column-left.php(57): Blocks_Core->childView('maincontent')
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#29 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#30 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#31 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#32 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Controller\Admin\Merchant.php(15): Controller_Core->renderBlocks()
#33 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Admin_Merchant->action_index()
#34 [internal function]: Kohana_Controller->execute()
#35 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Merchant))
#36 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#37 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#38 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#39 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#40 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#41 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#42 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#43 {main} in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:19:03 --- CRITICAL: Database_Exception [ 0 ]: ERROR:  missing FROM-clause entry for table "main_table"
LINE 1: ...as info where info.language_id = 1 and place_id = main_table...
                                                             ^ [ SELECT COUNT('*') AS mycount FROM (SELECT "info"."place_name", "pe"."status", "pe"."created_date", "pe"."updated_date" FROM "place_entity" AS "pe" JOIN "place_info" AS "info" ON ("pe"."place_id" = "info"."place_id" AND "info"."language_id" = (case when (select count(place_id) as totalcount from place_info as info where info.language_id = 1 and place_id = main_table.place_id) > 0 THEN 1 ELSE 1 END))) AS "t" ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:19:03 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php(262): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT('*...', false, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(79): Kohana_Database_Query->execute('default')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(93): Blocks_Core_Pagination->getTotalItem()
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(322): Blocks_Core_Pagination->load()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(417): Blocks_Core_Widget_List->_preparePaging()
#5 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(30): Blocks_Core_Widget_List->_prepareQuery()
#6 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(433): Blocks_Admin_Merchant_List->_prepareQuery()
#7 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(82): Blocks_Core_Widget_List->_prepareColumns()
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(510): Blocks_Admin_Merchant_List->_prepareColumns()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(534): Blocks_Core_Widget_List->_prepareList()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(260): Blocks_Core_Widget_List->_beforeToHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\user\views\admin\base\templates\admin\users.php(2): Blocks_Core->childView('user_listing')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('admin/users')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\page\wrapper.php(1): Blocks_Core->childView()
#20 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#21 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#22 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#23 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#24 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#25 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\column\2column-left.php(57): Blocks_Core->childView('maincontent')
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#29 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#30 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#31 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#32 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Controller\Admin\Merchant.php(15): Controller_Core->renderBlocks()
#33 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Admin_Merchant->action_index()
#34 [internal function]: Kohana_Controller->execute()
#35 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Merchant))
#36 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#37 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#38 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#39 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#40 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#41 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#42 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#43 {main} in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:19:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:19:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:19:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:19:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:20:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:20:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:21:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:23 --- CRITICAL: Database_Exception [ 0 ]: ERROR:  operator does not exist: character varying = numeric
LINE 1: ...ce_id) > 0 THEN 1 ELSE 1 END)) WHERE "place_name" = 0.000000...
                                                             ^
HINT:  No operator matches the given name and argument type(s). You might need to add explicit type casts. [ SELECT COUNT('*') AS mycount FROM (SELECT "info"."place_name", case when pe.status then 1 else 0 end AS "status", "pe"."created_date", "pe"."updated_date" FROM "place_entity" AS "pe" JOIN "place_info" AS "info" ON ("pe"."place_id" = "info"."place_id" AND "info"."language_id" = (case when (select count(place_id) as totalcount from place_info as info where info.language_id = 1 and place_id = pe.place_id) > 0 THEN 1 ELSE 1 END)) WHERE "place_name" = 0.000000) AS "t" ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:22:23 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php(262): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT('*...', false, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(79): Kohana_Database_Query->execute('default')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(93): Blocks_Core_Pagination->getTotalItem()
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(322): Blocks_Core_Pagination->load()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(417): Blocks_Core_Widget_List->_preparePaging()
#5 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(30): Blocks_Core_Widget_List->_prepareQuery()
#6 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(433): Blocks_Admin_Merchant_List->_prepareQuery()
#7 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(82): Blocks_Core_Widget_List->_prepareColumns()
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(510): Blocks_Admin_Merchant_List->_prepareColumns()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(534): Blocks_Core_Widget_List->_prepareList()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(260): Blocks_Core_Widget_List->_beforeToHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\user\views\admin\base\templates\admin\users.php(2): Blocks_Core->childView('user_listing')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('admin/users')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\page\wrapper.php(1): Blocks_Core->childView()
#20 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#21 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#22 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#23 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#24 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#25 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\column\2column-left.php(57): Blocks_Core->childView('maincontent')
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#29 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#30 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#31 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#32 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Controller\Admin\Merchant.php(15): Controller_Core->renderBlocks()
#33 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Admin_Merchant->action_index()
#34 [internal function]: Kohana_Controller->execute()
#35 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Merchant))
#36 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#37 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#38 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#39 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#40 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#41 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#42 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#43 {main} in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:22:26 --- CRITICAL: Database_Exception [ 0 ]: ERROR:  operator does not exist: character varying = numeric
LINE 1: ...ce_id) > 0 THEN 1 ELSE 1 END)) WHERE "place_name" = 0.000000...
                                                             ^
HINT:  No operator matches the given name and argument type(s). You might need to add explicit type casts. [ SELECT COUNT('*') AS mycount FROM (SELECT "info"."place_name", case when pe.status then 1 else 0 end AS "status", "pe"."created_date", "pe"."updated_date" FROM "place_entity" AS "pe" JOIN "place_info" AS "info" ON ("pe"."place_id" = "info"."place_id" AND "info"."language_id" = (case when (select count(place_id) as totalcount from place_info as info where info.language_id = 1 and place_id = pe.place_id) > 0 THEN 1 ELSE 1 END)) WHERE "place_name" = 0.000000) AS "t" ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:22:26 --- DEBUG: #0 C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php(262): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT('*...', false, Array)
#1 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(79): Kohana_Database_Query->execute('default')
#2 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Pagination.php(93): Blocks_Core_Pagination->getTotalItem()
#3 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(322): Blocks_Core_Pagination->load()
#4 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(417): Blocks_Core_Widget_List->_preparePaging()
#5 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(30): Blocks_Core_Widget_List->_prepareQuery()
#6 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(433): Blocks_Admin_Merchant_List->_prepareQuery()
#7 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Blocks\Admin\Merchant\List.php(82): Blocks_Core_Widget_List->_prepareColumns()
#8 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(510): Blocks_Admin_Merchant_List->_prepareColumns()
#9 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core\Widget\List.php(534): Blocks_Core_Widget_List->_prepareList()
#10 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(260): Blocks_Core_Widget_List->_beforeToHtml()
#11 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#12 C:\xampp\htdocs\project\cpay\modules\user\views\admin\base\templates\admin\users.php(2): Blocks_Core->childView('user_listing')
#13 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#14 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('admin/users')
#15 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#16 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#17 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#18 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(167): Blocks_Core->toHtml()
#19 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\page\wrapper.php(1): Blocks_Core->childView()
#20 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#21 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('page/wrapper')
#22 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#23 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Core->_toHtml()
#24 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(160): Blocks_Core->toHtml()
#25 C:\xampp\htdocs\project\cpay\modules\admin\admin\views\admin\base\templates\column\2column-left.php(57): Blocks_Core->childView('maincontent')
#26 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(202): include('C:\\xampp\\htdocs...')
#27 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(223): Blocks_Core->fetchView('column/2column-...')
#28 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(237): Blocks_Core->renderView()
#29 C:\xampp\htdocs\project\cpay\modules\admin\admin\classes\Blocks\Admin\Page.php(7): Blocks_Core->_toHtml()
#30 C:\xampp\htdocs\project\cpay\modules\core\classes\Blocks\Core.php(261): Blocks_Admin_Page->_toHtml()
#31 C:\xampp\htdocs\project\cpay\modules\core\classes\Controller\Core.php(67): Blocks_Core->toHtml()
#32 C:\xampp\htdocs\project\cpay\modules\merchant\classes\Controller\Admin\Merchant.php(15): Controller_Core->renderBlocks()
#33 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Controller.php(83): Controller_Admin_Merchant->action_index()
#34 [internal function]: Kohana_Controller->execute()
#35 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Merchant))
#36 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#37 C:\xampp\htdocs\project\cpay\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#38 C:\xampp\htdocs\project\cpay\modules\core\classes\Request.php(48): Kohana_Request->execute()
#39 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(398): Request->execute()
#40 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(391): Kohana_App->sendResponse()
#41 C:\xampp\htdocs\project\cpay\modules\core\classes\Kohana\App.php(382): Kohana_App->run(Array)
#42 C:\xampp\htdocs\project\cpay\index.php(120): Kohana_App::execute()
#43 {main} in C:\xampp\htdocs\project\cpay\modules\database\classes\Kohana\Database\Query.php:262
2017-06-11 23:22:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:22:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:22:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:24:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:34:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:34:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:34:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:36:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:36:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:38:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:38:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:41:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:41:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:42:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:42:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:42:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:42:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:42:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:42:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:43:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:43:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:43:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:43:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:43:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:43:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:44:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:44:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:44:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:44:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:44:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:46:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:48:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:48:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:51:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:52:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:53:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:53:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:54:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:54:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:55:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:55:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:56:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:56:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:56:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:56:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-06-11 23:58:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function query() on null ~ MODPATH\core\classes\Kohana\App.php [ 317 ] in file:line
2017-06-11 23:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line