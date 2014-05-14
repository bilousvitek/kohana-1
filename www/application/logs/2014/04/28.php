<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-28 20:11:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\page.php [ 6 ] in file:line
2014-04-28 20:11:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 20:11:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\page.php [ 6 ] in file:line
2014-04-28 20:11:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 20:17:02 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-04-28 20:17:02 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-04-28 21:25:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\page.php [ 6 ] in file:line
2014-04-28 21:25:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 21:26:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\page.php [ 6 ] in file:line
2014-04-28 21:26:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 21:28:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_kohana.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-04-28 21:28:16 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('articles')
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 V:\home\kohana\www\application\classes\Controller\page.php(14): Kohana_ORM->__construct()
#6 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-04-28 21:28:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_kohana.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-04-28 21:28:53 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('articles')
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 V:\home\kohana\www\application\classes\Controller\page.php(14): Kohana_ORM->__construct()
#6 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-04-28 21:30:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Locations' not found ~ APPPATH\classes\Controller\page.php [ 14 ] in file:line
2014-04-28 21:30:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 21:30:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\page.php [ 6 ] in file:line
2014-04-28 21:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 21:30:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\page.php [ 6 ] in file:line
2014-04-28 21:30:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 21:31:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Locations' not found ~ APPPATH\classes\Controller\page.php [ 13 ] in file:line
2014-04-28 21:31:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 21:37:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\page.php [ 7 ] in file:line
2014-04-28 21:37:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 21:48:10 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: locations ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:10 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_View->__get('locations')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:36 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: locations ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:36 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_View->__get('locations')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:38 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: locations ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:38 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_View->__get('locations')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:39 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: locations ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:39 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_View->__get('locations')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:40 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: locations ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:48:40 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_View->__get('locations')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:49:51 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: locations ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:49:51 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_View->__get('locations')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:51:34 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant locations - assumed 'locations' ~ APPPATH\classes\Controller\page.php [ 21 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:51:34 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', 'V:\home\kohana\...', 21, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:51:50 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant locations - assumed 'locations' ~ APPPATH\classes\Controller\page.php [ 21 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:51:50 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', 'V:\home\kohana\...', 21, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:51:51 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant locations - assumed 'locations' ~ APPPATH\classes\Controller\page.php [ 21 ] in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:51:51 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', 'V:\home\kohana\...', 21, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:21
2014-04-28 21:52:09 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\my2.php [ 1 ] in V:\home\kohana\www\application\views\my2.php:1
2014-04-28 21:52:09 --- DEBUG: #0 V:\home\kohana\www\application\views\my2.php(1): Kohana_Core::error_handler(4096, 'Object of class...', 'V:\home\kohana\...', 1, Array)
#1 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#2 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#3 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 V:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 V:\home\kohana\www\application\classes\Controller\page.php(22): Kohana_Response->body(Object(View))
#6 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in V:\home\kohana\www\application\views\my2.php:1
2014-04-28 21:54:36 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\page.php [ 18 ] in V:\home\kohana\www\application\classes\Controller\page.php:18
2014-04-28 21:54:36 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(18): Kohana_Core::error_handler(4096, 'Object of class...', 'V:\home\kohana\...', 18, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:18
2014-04-28 21:54:37 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\page.php [ 18 ] in V:\home\kohana\www\application\classes\Controller\page.php:18
2014-04-28 21:54:37 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(18): Kohana_Core::error_handler(4096, 'Object of class...', 'V:\home\kohana\...', 18, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:18
2014-04-28 22:04:31 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: location ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:23
2014-04-28 22:04:31 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(23): Kohana_View->__get('location')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:23
2014-04-28 22:05:07 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: 1 ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:23
2014-04-28 22:05:07 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(23): Kohana_View->__get('1')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:23
2014-04-28 22:05:09 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: 1 ~ SYSPATH\classes\Kohana\View.php [ 171 ] in V:\home\kohana\www\application\classes\Controller\page.php:23
2014-04-28 22:05:09 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\page.php(23): Kohana_View->__get('1')
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\page.php:23