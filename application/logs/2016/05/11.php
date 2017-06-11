<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-11 09:49:10 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Database/MySQLi.php:410
2016-05-11 09:49:10 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Database/MySQLi.php(410): Database_MySQLi->connect()
#1 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database.php(478): Database_MySQLi->escape('http://192.168....')
#2 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('http://192.168....')
#3 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query/Builder/Select.php(396): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(242): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Website.php(33): Kohana_Database_Query->execute()
#6 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(476): Model_Core_Website->loadWebsite()
#7 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#10 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#11 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Database/MySQLi.php:410
2016-05-11 09:49:11 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2) ~ MODPATH/database/classes/Database/MySQLi.php [ 59 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Database/MySQLi.php:410
2016-05-11 09:49:11 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Database/MySQLi.php(410): Database_MySQLi->connect()
#1 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database.php(478): Database_MySQLi->escape('http://192.168....')
#2 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('http://192.168....')
#3 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query/Builder/Select.php(396): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQLi), Array)
#4 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(242): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#5 /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Website.php(33): Kohana_Database_Query->execute()
#6 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(476): Model_Core_Website->loadWebsite()
#7 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#10 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#11 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Database/MySQLi.php:410
2016-05-11 10:59:59 --- ERROR: body in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Registermobile.php:37
2016-05-11 11:14:14 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:14 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:20 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:20 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:24 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:24 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:28 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:28 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:32 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:14:32 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:02 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:02 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:10 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:10 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:20 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:20 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:28 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:28 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:30 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:21:30 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:23:15 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:23:15 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:23:17 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:23:17 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:25:40 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:25:40 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:25:44 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:25:44 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:25:56 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:25:56 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:36:53 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:36:53 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:37:12 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:37:12 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:37:18 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:37:18 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:38:46 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:38:46 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:38:47 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:38:47 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:39:05 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:39:05 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:39:18 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:39:18 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:185
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:201
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:201
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:201
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:201
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:201
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/user/classes/Model/User/Event.php:217
2016-05-11 11:51:55 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Model/Core/Search.php:43
2016-05-11 12:18:20 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:18:20 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:18:26 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:18:26 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:19:24 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:19:24 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:22:45 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:22:45 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:22:53 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'd.clinic_id' in 'field list' [ SELECT `d`.`clinic_id`, `SD_clinicname`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:22:53 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `d`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:23:10 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SD_clinicname.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `SD_clinicname`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:23:10 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:23:12 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SD_clinicname.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `SD_clinicname`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:23:12 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:00 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'c.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `c`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:30 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:41 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'ci.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `ci`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:41 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'ci.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `ci`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:26:43 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:27:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SD_clinicname.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `SD_clinicname`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:27:19 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:30:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SD_clinicname.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `SD_clinicname`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:30:44 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:30:46 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:30:46 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:30:48 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:30:48 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:30:48 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:30:48 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:30:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'SD_clinicname.clinic_name' in 'field list' [ SELECT `c`.`clinic_id`, `SD_clinicname`.`clinic_name` FROM `clinic` AS `c` LEFT JOIN `clinic_attribute_value` AS `SD_clinicname` ON (`SD_clinicname`.`clinic_id` = `c`.`clinic_id` AND `SD_clinicname`.`attribute_id` = 16 AND `SD_clinicname`.`language_id` = (CASE WHEN (SELECT count(ci.clinic_id) AS "totalcount" FROM clinic_attribute_value AS ci WHERE ci.language_id = 1 AND ci.clinic_id = c.clinic_id)>0 THEN 1 ELSE 1 END)) WHERE `c`.`clinic_id` IN ('3', '14') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 174 ] in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:30:50 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php(262): Database_MySQLi->query(1, 'SELECT `c`.`cli...', false, Array)
#1 /var/www/vhosts/Tabibakjo/modules/clinic/classes/Model/Clinic.php(589): Kohana_Database_Query->execute()
#2 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(144): Model_Clinic->getClinicByIds(Array)
#3 /var/www/vhosts/Tabibakjo/modules/business/store/classes/Controller/Store/Users.php(87): Controller_Store_Users->_localSessionData()
#4 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Store_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Store_Users))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#12 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#13 /var/www/vhosts/Tabibakjo/index.php(120): Kohana_App::execute()
#14 {main} in /var/www/vhosts/Tabibakjo/modules/database/classes/Kohana/Database/Query.php:262
2016-05-11 12:31:41 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:31:41 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:31:49 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:31:49 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:32:01 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:32:01 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:33:40 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:33:40 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:34:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH/clinic/classes/Model/Clinic.php [ 583 ] in file:line
2016-05-11 12:34:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-11 12:35:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH/clinic/classes/Model/Clinic.php [ 583 ] in file:line
2016-05-11 12:35:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-11 12:36:25 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:36:25 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:36:32 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:36:32 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:37:43 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:37:43 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:37:48 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:37:48 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:37:58 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:37:58 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:41:43 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:41:43 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:41:51 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:41:51 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:42:01 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:42:01 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:43:52 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:43:52 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:01 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:01 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:14 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:14 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:24 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:24 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:32 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:32 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:37 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:37 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:47 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:47 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:51 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:51 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:56 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:44:56 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:50:50 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:50:50 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:51:13 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:51:13 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:53:00 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:53:00 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:54:57 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:54:57 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:07 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:07 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:15 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:15 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:19 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:19 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:55 --- EMERGENCY: Kohana_Exception [ 0 ]: This Website not defined to us. ~ MODPATH/core/classes/Kohana/App.php [ 483 ] in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 12:55:55 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(427): Kohana_App->_initWebsite(Array)
#1 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(387): Kohana_App->_initStores(Array)
#2 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#3 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#4 {main} in /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php:427
2016-05-11 15:55:55 --- EMERGENCY: Exception [ 0 ]: Invalid method Model_User::__toString(Array
(
)
) ~ MODPATH/core/classes/Kohana/Core/Object.php [ 621 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php:69
2016-05-11 15:55:55 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php(69): Kohana_Core_Object->__call('__toString', Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php(69): Model_User->__toString()
#2 /var/www/vhosts/Tabibakjo/application/classes/Controller/Api/Search.php(30): Model_Api_Search->getDoctors()
#3 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Api_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Api_Search))
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#12 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#13 {main} in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php:69
2016-05-11 15:56:18 --- EMERGENCY: Exception [ 0 ]: Invalid method Model_User::__toString(Array
(
)
) ~ MODPATH/core/classes/Kohana/Core/Object.php [ 621 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php:66
2016-05-11 15:56:18 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php(66): Kohana_Core_Object->__call('__toString', Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php(66): Model_User->__toString()
#2 /var/www/vhosts/Tabibakjo/application/classes/Controller/Api/Search.php(30): Model_Api_Search->getDoctors()
#3 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Api_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Api_Search))
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#12 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#13 {main} in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php:66
2016-05-11 15:57:50 --- EMERGENCY: Exception [ 0 ]: Invalid method Model_User::__toString(Array
(
)
) ~ MODPATH/core/classes/Kohana/Core/Object.php [ 621 ] in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php:53
2016-05-11 15:57:50 --- DEBUG: #0 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php(53): Kohana_Core_Object->__call('__toString', Array)
#1 /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php(53): Model_User->__toString()
#2 /var/www/vhosts/Tabibakjo/application/classes/Controller/Api/Search.php(30): Model_Api_Search->getDoctors()
#3 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Controller.php(83): Controller_Api_Search->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client/Internal.php(98): ReflectionMethod->invoke(Object(Controller_Api_Search))
#6 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/Tabibakjo/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/Tabibakjo/modules/core/classes/Request.php(48): Kohana_Request->execute()
#9 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(398): Request->execute()
#10 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(391): Kohana_App->sendResponse()
#11 /var/www/vhosts/Tabibakjo/modules/core/classes/Kohana/App.php(382): Kohana_App->run(Array)
#12 /var/www/vhosts/Tabibakjo/api/index.php(120): Kohana_App::execute()
#13 {main} in /var/www/vhosts/Tabibakjo/application/classes/Model/Api/Search.php:53
2016-05-11 16:35:42 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-11 16:35:44 --- INFO: INFO: Connected to tls://gateway.sandbox.push.apple.com:2195. in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-05-11 16:35:44 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519