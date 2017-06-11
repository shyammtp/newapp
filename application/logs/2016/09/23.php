<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-23 11:30:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/i18n/ar/ae.php [ 19 ] in file:line
2016-09-23 11:30:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-09-23 11:41:02 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:04 --- INFO: ERROR: Unable to connect to 'tls://gateway.sandbox.push.apple.com:2195':  (0) in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:04 --- INFO: INFO: Retry to connect (1/3)... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:05 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:06 --- INFO: ERROR: Unable to connect to 'tls://gateway.sandbox.push.apple.com:2195':  (0) in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:06 --- INFO: INFO: Retry to connect (2/3)... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:07 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:08 --- INFO: ERROR: Unable to connect to 'tls://gateway.sandbox.push.apple.com:2195':  (0) in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:08 --- INFO: INFO: Retry to connect (3/3)... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:09 --- INFO: INFO: Trying tls://gateway.sandbox.push.apple.com:2195... in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:10 --- INFO: ERROR: Unable to connect to 'tls://gateway.sandbox.push.apple.com:2195':  (0) in /var/www/vhosts/Tabibakjo/includes/ApnsPHP/Abstract.php:433
2016-09-23 11:41:10 --- ERROR: body in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:519
2016-09-23 11:41:17 --- ERROR: GCM_MESSAGE:NotRegistered in /var/www/vhosts/Tabibakjo/modules/core/classes/Helpers/Notification.php:434