<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-13 20:02:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\entry.php [ 8 ] in V:\home\kohana\www\application\classes\Controller\entry.php:8
2014-05-13 20:02:38 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\entry.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 8, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\entry.php:8
2014-05-13 20:03:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\entry.php [ 8 ] in V:\home\kohana\www\application\classes\Controller\entry.php:8
2014-05-13 20:03:29 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\entry.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 8, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\entry.php:8
2014-05-13 20:49:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\Controller\user.php [ 36 ] in file:line
2014-05-13 20:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 20:59:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\us.php [ 4 ] in file:line
2014-05-13 20:59:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 21:00:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\us.php [ 5 ] in file:line
2014-05-13 21:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 21:06:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\exit.php [ 6 ] in file:line
2014-05-13 21:06:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 21:08:24 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\us.php [ 6 ] in file:line
2014-05-13 21:08:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line