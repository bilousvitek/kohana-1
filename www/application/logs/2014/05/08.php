<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-08 00:27:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:27:55 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#3 {main} in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:28:48 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:28:48 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#3 {main} in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:29:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:29:15 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#3 {main} in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:29:27 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot create instances of abstract Controller_Common ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 87 ] in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:29:27 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#3 {main} in V:\home\kohana\www\system\classes\Kohana\Request\Client.php:114
2014-05-08 00:39:59 --- CRITICAL: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 00:39:59 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('login')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('login', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(8): Kohana_View::factory('login')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 00:46:28 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\classes\Controller\registr.php [ 20 ] in V:\home\kohana\www\application\classes\Controller\registr.php:20
2014-05-08 00:46:28 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\registr.php(20): Kohana_Core::error_handler(8, 'Use of undefine...', 'V:\home\kohana\...', 20, Array)
#1 V:\home\kohana\www\application\views\pageregistr.php(6): Controller_Registr->addUser()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\application\classes\Controller\registr.php:20
2014-05-08 00:48:50 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '300' for key 'PRIMARY' [ INSERT INTO `users` (`id`, `initials`, `login`, `password`, `email`, `phone`) VALUES (300, 'qwrqrtqt', 'qwrwqter', '123456789', 'kantora272@rambler.ru', '0977353627') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-08 00:48:50 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 V:\home\kohana\www\application\classes\Controller\registr.php(26): Kohana_ORM->save()
#4 V:\home\kohana\www\application\views\pageregistr.php(6): Controller_Registr->addUser()
#5 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#6 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#7 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#9 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#10 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#11 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#18 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-08 00:49:55 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\classes\Controller\registr.php [ 20 ] in V:\home\kohana\www\application\classes\Controller\registr.php:20
2014-05-08 00:49:55 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\registr.php(20): Kohana_Core::error_handler(8, 'Use of undefine...', 'V:\home\kohana\...', 20, Array)
#1 V:\home\kohana\www\application\views\pageregistr.php(6): Controller_Registr->addUser()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\application\classes\Controller\registr.php:20
2014-05-08 00:51:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\registr.php [ 20 ] in V:\home\kohana\www\application\classes\Controller\registr.php:20
2014-05-08 00:51:08 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\registr.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 20, Array)
#1 V:\home\kohana\www\application\views\pageregistr.php(6): Controller_Registr->addUser()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\application\classes\Controller\registr.php:20
2014-05-08 00:53:12 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '50000' for key 'PRIMARY' [ INSERT INTO `users` (`id`, `initials`, `login`, `password`, `email`, `phone`) VALUES (50000, 'zxcvbnmjhgf', 'wfdghgfds', '123456789', 'kantora272@rambler.ru', '0977353627') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-08 00:53:12 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 V:\home\kohana\www\application\classes\Controller\registr.php(26): Kohana_ORM->save()
#4 V:\home\kohana\www\application\views\pageregistr.php(6): Controller_Registr->addUser()
#5 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#6 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#7 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#9 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#10 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#11 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#15 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#18 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-08 01:07:39 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 01:07:39 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 01:08:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:09:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:10:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:10:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:11:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 4 ] in file:line
2014-05-08 01:11:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:11:17 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 01:11:17 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 01:40:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\login.php [ 12 ] in V:\home\kohana\www\application\views\login.php:12
2014-05-08 01:40:42 --- DEBUG: #0 V:\home\kohana\www\application\views\login.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 12, Array)
#1 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#2 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#3 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 V:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 V:\home\kohana\www\application\classes\Controller\home.php(7): Kohana_Response->body(Object(View))
#6 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in V:\home\kohana\www\application\views\login.php:12
2014-05-08 01:45:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\login.php [ 13 ] in file:line
2014-05-08 01:45:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:45:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\login.php [ 13 ] in file:line
2014-05-08 01:45:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:48:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\login.php [ 13 ] in file:line
2014-05-08 01:48:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:49:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\login.php [ 13 ] in file:line
2014-05-08 01:49:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 01:49:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\login.php [ 13 ] in file:line
2014-05-08 01:49:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 12:36:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\views\login.php [ 13 ] in file:line
2014-05-08 12:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 12:43:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\login.php [ 27 ] in file:line
2014-05-08 12:43:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 12:43:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\login.php [ 26 ] in file:line
2014-05-08 12:43:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 12:43:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\login.php [ 26 ] in file:line
2014-05-08 12:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 12:44:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\login.php [ 25 ] in file:line
2014-05-08 12:44:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 12:44:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\login.php [ 15 ] in V:\home\kohana\www\application\views\login.php:15
2014-05-08 12:44:59 --- DEBUG: #0 V:\home\kohana\www\application\views\login.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 15, Array)
#1 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#2 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#3 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 V:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 V:\home\kohana\www\application\classes\Controller\home.php(7): Kohana_Response->body(Object(View))
#6 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in V:\home\kohana\www\application\views\login.php:15
2014-05-08 12:45:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\login.php [ 15 ] in V:\home\kohana\www\application\views\login.php:15
2014-05-08 12:45:10 --- DEBUG: #0 V:\home\kohana\www\application\views\login.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 15, Array)
#1 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#2 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#3 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 V:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 V:\home\kohana\www\application\classes\Controller\home.php(7): Kohana_Response->body(Object(View))
#6 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in V:\home\kohana\www\application\views\login.php:15
2014-05-08 12:56:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\views\login.php [ 8 ] in file:line
2014-05-08 12:56:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 12:56:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\views\login.php [ 8 ] in file:line
2014-05-08 12:56:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 14:33:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function Controller_Home() ~ APPPATH\views\login.php [ 28 ] in file:line
2014-05-08 14:33:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 14:33:54 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\views\login.php on line 28 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 14:33:54 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\views\login.php(28): Kohana_Controller->__construct()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 V:\home\kohana\www\application\classes\Controller\home.php(7): Kohana_Response->body(Object(View))
#7 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 14:35:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 68 ] in file:line
2014-05-08 14:35:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 14:35:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\views\login.php on line 28 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 14:35:31 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\views\login.php(28): Kohana_Controller->__construct()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 V:\home\kohana\www\application\classes\Controller\home.php(7): Kohana_Response->body(Object(View))
#7 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 14:38:51 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 10 ] in V:\home\kohana\www\application\classes\Controller\home.php:10
2014-05-08 14:38:51 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(10): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 10, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:10
2014-05-08 14:39:19 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:39:19 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:39:21 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:39:21 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:39:24 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:39:24 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:39:59 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:39:59 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:40:00 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:40:00 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:40:07 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 16 ] in V:\home\kohana\www\application\classes\Controller\home.php:16
2014-05-08 14:40:07 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(16): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 16, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:16
2014-05-08 14:40:18 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:40:18 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(9): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:9
2014-05-08 14:42:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\views\login.php on line 28 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 14:42:24 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\views\login.php(28): Kohana_Controller->__construct()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 14:52:29 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\views\login.php on line 28 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 14:52:29 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\views\login.php(28): Kohana_Controller->__construct()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 15:11:44 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\login.php [ 31 ] in file:line
2014-05-08 15:11:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 15:12:25 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\views\login.php [ 31 ] in V:\home\kohana\www\application\views\login.php:31
2014-05-08 15:12:25 --- DEBUG: #0 V:\home\kohana\www\application\views\login.php(31): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 31, Array)
#1 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#2 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#3 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#5 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#6 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#7 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in V:\home\kohana\www\application\views\login.php:31
2014-05-08 15:16:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function site() ~ APPPATH\views\login.php [ 23 ] in file:line
2014-05-08 15:16:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 15:26:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Controler_Log' not found ~ APPPATH\views\login.php [ 4 ] in file:line
2014-05-08 15:26:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 15:27:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Controller\log.php [ 43 ] in file:line
2014-05-08 15:27:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 15:27:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\Controller\log.php [ 43 ] in file:line
2014-05-08 15:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 15:27:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\log.php [ 44 ] in file:line
2014-05-08 15:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 15:28:59 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\classes\Controller\log.php on line 28 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 15:28:59 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\classes\Controller\log.php(28): Kohana_Controller->__construct()
#2 V:\home\kohana\www\application\views\login.php(5): Controller_Log->login()
#3 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#4 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#5 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#7 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#8 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#9 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#16 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 15:30:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\views\login.php on line 4 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 15:30:14 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\views\login.php(4): Kohana_Controller->__construct()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 15:30:18 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\views\login.php on line 4 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 15:30:18 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\views\login.php(4): Kohana_Controller->__construct()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 15:30:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting T_STRING or T_NAMESPACE or T_NS_SEPARATOR ~ APPPATH\classes\Controller\log.php [ 3 ] in file:line
2014-05-08 15:30:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 18:37:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\log.php [ 27 ] in file:line
2014-05-08 18:37:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 18:37:46 --- CRITICAL: HTTP_Exception_302 [ 302 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in V:\home\kohana\www\system\classes\Kohana\HTTP.php:33
2014-05-08 18:37:46 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(302)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('adm', 302)
#2 V:\home\kohana\www\application\classes\Controller\log.php(25): Kohana_Controller::redirect('adm')
#3 V:\home\kohana\www\application\views\login.php(5): Controller_Log->login()
#4 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#5 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#6 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#8 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#9 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#10 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#14 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in V:\home\kohana\www\system\classes\Kohana\HTTP.php:33
2014-05-08 18:38:15 --- CRITICAL: HTTP_Exception_302 [ 302 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in V:\home\kohana\www\system\classes\Kohana\HTTP.php:33
2014-05-08 18:38:15 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\HTTP.php(33): Kohana_HTTP_Exception::factory(302)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('adm', 302)
#2 V:\home\kohana\www\application\classes\Controller\log.php(25): Kohana_Controller::redirect('adm')
#3 V:\home\kohana\www\application\views\login.php(5): Controller_Log->login()
#4 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#5 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#6 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#8 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#9 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#10 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#14 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in V:\home\kohana\www\system\classes\Kohana\HTTP.php:33
2014-05-08 18:49:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Log::redirect() ~ APPPATH\classes\Controller\log.php [ 25 ] in file:line
2014-05-08 18:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 18:52:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Log::$request ~ APPPATH\classes\Controller\log.php [ 25 ] in V:\home\kohana\www\application\classes\Controller\log.php:25
2014-05-08 18:52:47 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\log.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'V:\home\kohana\...', 25, Array)
#1 V:\home\kohana\www\application\views\login.php(5): Controller_Log->login()
#2 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#3 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#4 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#6 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#7 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#8 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\application\classes\Controller\log.php:25
2014-05-08 18:54:06 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\classes\Controller\log.php on line 25 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 18:54:06 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\classes\Controller\log.php(25): Kohana_Controller->__construct()
#2 V:\home\kohana\www\application\views\login.php(5): Controller_Log->login()
#3 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#4 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#5 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#7 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#8 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#9 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#16 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 19:13:58 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\classes\Controller\log.php on line 23 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 19:13:58 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\classes\Controller\log.php(23): Kohana_Controller->__construct()
#2 V:\home\kohana\www\application\views\login.php(5): Controller_Log->login()
#3 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#4 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#5 V:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 V:\home\kohana\www\application\views\header.php(44): Kohana_View->__toString()
#7 V:\home\kohana\www\system\classes\Kohana\View.php(61): include('V:\home\kohana\...')
#8 V:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('V:\home\kohana\...', Array)
#9 V:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 V:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#16 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 19:25:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\home.php [ 60 ] in file:line
2014-05-08 19:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:25:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Common' not found ~ APPPATH\classes\Controller\home.php [ 3 ] in file:line
2014-05-08 19:25:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:25:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Common' not found ~ APPPATH\classes\Controller\home.php [ 3 ] in file:line
2014-05-08 19:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:25:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\home.php [ 54 ] in file:line
2014-05-08 19:25:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:42:06 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:06 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:49 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:49 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:51 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:51 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:51 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:51 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:52 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:52 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:52 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:52 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:53 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:53 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:53 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:53 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:53 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:53 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:54 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:55 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:55 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:55 --- CRITICAL: View_Exception [ 0 ]: The requested view registration_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:42:55 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration_fo...')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration_fo...', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_View::factory('registration_fo...')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 19:43:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\home.php [ 15 ] in file:line
2014-05-08 19:43:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:44:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\home.php [ 15 ] in file:line
2014-05-08 19:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:45:37 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 32 ] in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:45:37 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 32, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:27 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 32 ] in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:27 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 32, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:43 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 32 ] in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:43 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 32, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:46 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 32 ] in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:46 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 32, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:58 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 32 ] in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:46:58 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 32, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:47:00 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 32 ] in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:47:00 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 32, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:32
2014-05-08 19:52:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\home.php [ 15 ] in file:line
2014-05-08 19:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:54:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\home.php [ 15 ] in file:line
2014-05-08 19:54:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:57:40 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 27 ] in V:\home\kohana\www\application\classes\Controller\home.php:27
2014-05-08 19:57:40 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 27, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:27
2014-05-08 19:57:41 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\home.php [ 27 ] in V:\home\kohana\www\application\classes\Controller\home.php:27
2014-05-08 19:57:41 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(27): Kohana_Core::error_handler(2048, 'Creating defaul...', 'V:\home\kohana\...', 27, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:27
2014-05-08 19:58:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\classes\Controller\home.php [ 29 ] in file:line
2014-05-08 19:58:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 19:58:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\home.php [ 18 ] in V:\home\kohana\www\application\classes\Controller\home.php:18
2014-05-08 19:58:18 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 18, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:18
2014-05-08 19:59:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 19:59:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:00:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 20:00:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:23:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 20:23:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:23:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 20:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:26:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: access ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:26:00 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 1567, Array)
#1 V:\home\kohana\www\application\classes\Controller\home.php(18): Kohana_ORM->add('access', Object(Model_User))
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:26:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:26:41 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 1567, Array)
#1 V:\home\kohana\www\application\classes\Controller\home.php(18): Kohana_ORM->add('roles', Object(Model_User))
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:31:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW, expecting ')' ~ APPPATH\classes\Controller\home.php [ 13 ] in file:line
2014-05-08 20:31:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:31:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: users ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:31:23 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 1567, Array)
#1 V:\home\kohana\www\application\classes\Controller\home.php(19): Kohana_ORM->add('users', Object(Model_User))
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:33:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_access' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-08 20:33:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:34:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_access' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-08 20:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:34:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_access' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-08 20:34:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:34:42 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_kohana.access' doesn't exist [ SHOW FULL COLUMNS FROM `access` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 20:34:42 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('access')
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 V:\home\kohana\www\application\classes\Controller\home.php(19): Kohana_ORM::factory('access')
#7 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 20:35:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: accesses ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:35:40 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 1567, Array)
#1 V:\home\kohana\www\application\classes\Controller\home.php(19): Kohana_ORM->add('accesses', Object(Model_Access))
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:36:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_accesses' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-05-08 20:36:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:36:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: accesses ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:36:19 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 1567, Array)
#1 V:\home\kohana\www\application\classes\Controller\home.php(19): Kohana_ORM->add('accesses', Object(Model_Access))
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:1567
2014-05-08 20:36:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_kohana.access' doesn't exist [ SHOW FULL COLUMNS FROM `access` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 20:36:33 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('access')
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 V:\home\kohana\www\application\classes\Controller\home.php(19): Kohana_ORM::factory('access')
#7 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 20:37:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\home.php [ 15 ] in file:line
2014-05-08 20:37:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:46:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH\views\header.php [ 33 ] in file:line
2014-05-08 20:46:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:49:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 109 ] in file:line
2014-05-08 20:49:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:49:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 105 ] in file:line
2014-05-08 20:49:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:50:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 92 ] in file:line
2014-05-08 20:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:56:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\home.php [ 102 ] in file:line
2014-05-08 20:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 20:57:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\home.php [ 43 ] in V:\home\kohana\www\application\classes\Controller\home.php:43
2014-05-08 20:57:45 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\home.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\home.php:43
2014-05-08 21:00:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\home.php [ 57 ] in file:line
2014-05-08 21:00:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:01:23 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in V:\home\kohana\www\application\classes\Controller\home.php on line 63 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 21:01:23 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'V:\home\kohana\...', 43, Array)
#1 V:\home\kohana\www\application\classes\Controller\home.php(63): Kohana_Controller->__construct()
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\system\classes\Kohana\Controller.php:43
2014-05-08 21:03:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\home.php [ 57 ] in file:line
2014-05-08 21:03:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:29:01 --- CRITICAL: View_Exception [ 0 ]: The requested view entry/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 21:29:01 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('entry/login')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('entry/login', NULL)
#2 V:\home\kohana\www\application\classes\Controller\entry.php(54): Kohana_View::factory('entry/login')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 21:31:31 --- CRITICAL: View_Exception [ 0 ]: The requested view entry/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 21:31:31 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('entry/login')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('entry/login', NULL)
#2 V:\home\kohana\www\application\classes\Controller\entry.php(50): Kohana_View::factory('entry/login')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 21:31:41 --- CRITICAL: View_Exception [ 0 ]: The requested view entry/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 21:31:41 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('entry/login')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('entry/login', NULL)
#2 V:\home\kohana\www\application\classes\Controller\entry.php(50): Kohana_View::factory('entry/login')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-08 21:35:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\entry.php [ 25 ] in file:line
2014-05-08 21:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:41:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH\classes\Controller\admin.php [ 15 ] in file:line
2014-05-08 21:41:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:42:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH\classes\Controller\admin.php [ 15 ] in file:line
2014-05-08 21:42:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:42:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\admin.php [ 8 ] in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:42:46 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 8, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:42:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\admin.php [ 8 ] in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:42:51 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 8, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:43:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\admin.php [ 8 ] in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:43:15 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 8, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:43:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\admin.php [ 8 ] in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:43:20 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 8, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 21:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function start_session() ~ APPPATH\classes\Controller\entry.php [ 25 ] in file:line
2014-05-08 21:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:45:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 21:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:48:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 21:48:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:49:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 21:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:50:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 21:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:55:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 21:55:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 21:57:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 21:57:19 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 V:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 V:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456789', false)
#8 V:\home\kohana\www\application\classes\Controller\entry.php(25): Kohana_Auth->login('admin', '123456789')
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 22:02:39 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 22:02:39 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#6 V:\home\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 V:\home\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', '123456789', false)
#8 V:\home\kohana\www\application\classes\Controller\entry.php(25): Kohana_Auth->login('admin', '123456789')
#9 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#12 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-05-08 22:06:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\entry.php [ 9 ] in V:\home\kohana\www\application\classes\Controller\entry.php:9
2014-05-08 22:06:52 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\entry.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 9, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\entry.php:9
2014-05-08 22:08:02 --- CRITICAL: Kohana_Exception [ 0 ]: The access property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-08 22:08:02 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('access')
#1 V:\home\kohana\www\application\classes\Controller\entry.php(20): Kohana_ORM->__get('access')
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-08 22:08:37 --- CRITICAL: Kohana_Exception [ 0 ]: The access property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-08 22:08:37 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('access')
#1 V:\home\kohana\www\application\classes\Controller\entry.php(20): Kohana_ORM->__get('access')
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-08 22:09:51 --- CRITICAL: Kohana_Exception [ 0 ]: The access property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-08 22:09:51 --- DEBUG: #0 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('access')
#1 V:\home\kohana\www\application\classes\Controller\entry.php(20): Kohana_ORM->__get('access')
#2 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-08 22:10:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\admin.php [ 7 ] in file:line
2014-05-08 22:10:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 22:45:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\entry.php [ 27 ] in file:line
2014-05-08 22:45:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 22:45:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\entry.php [ 26 ] in V:\home\kohana\www\application\classes\Controller\entry.php:26
2014-05-08 22:45:53 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\entry.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 26, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Entry->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Entry))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\entry.php:26
2014-05-08 22:46:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 80 ] in file:line
2014-05-08 22:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 22:54:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _GLOBAL ~ APPPATH\classes\Controller\admin.php [ 7 ] in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:54:37 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 7, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:56:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _GLOBALS ~ APPPATH\classes\Controller\admin.php [ 7 ] in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:56:39 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 7, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:56:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\admin.php [ 7 ] in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:56:50 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 7, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:58:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: a ~ APPPATH\classes\Controller\admin.php [ 7 ] in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:58:04 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'V:\home\kohana\...', 7, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:58:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL ~ APPPATH\classes\Controller\admin.php [ 7 ] in file:line
2014-05-08 22:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 22:58:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL ~ APPPATH\classes\Controller\admin.php [ 7 ] in file:line
2014-05-08 22:58:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 22:59:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_GLOBAL ~ APPPATH\classes\Controller\admin.php [ 7 ] in file:line
2014-05-08 22:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-08 22:59:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\admin.php [ 7 ] in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 22:59:53 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 7, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:7
2014-05-08 23:05:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin.php [ 8 ] in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 23:05:20 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 8, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:8
2014-05-08 23:08:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin.php [ 12 ] in V:\home\kohana\www\application\classes\Controller\admin.php:12
2014-05-08 23:08:15 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 12, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:12
2014-05-08 23:08:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin.php [ 12 ] in V:\home\kohana\www\application\classes\Controller\admin.php:12
2014-05-08 23:08:32 --- DEBUG: #0 V:\home\kohana\www\application\classes\Controller\admin.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'V:\home\kohana\...', 12, Array)
#1 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#2 [internal function]: Kohana_Controller->execute()
#3 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in V:\home\kohana\www\application\classes\Controller\admin.php:12
2014-05-08 23:09:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'admin' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`initials` AS `initials`, `user`.`login` AS `login`, `user`.`password` AS `password`, `user`.`email` AS `email`, `user`.`phone` AS `phone`, `user`.`dokuments` AS `dokuments`, `user`.`accesses` AS `accesses`, `user`.`confirm` AS `confirm` FROM `users` AS `user` WHERE `admin` = 'admin' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-08 23:09:40 --- DEBUG: #0 V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 V:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 V:\home\kohana\www\application\classes\Controller\admin.php(13): Kohana_ORM->find()
#4 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_adm()
#5 [internal function]: Kohana_Controller->execute()
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in V:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251