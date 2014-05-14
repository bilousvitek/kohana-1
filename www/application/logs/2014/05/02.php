<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-02 22:49:49 --- CRITICAL: View_Exception [ 0 ]: The requested view registr could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in V:\home\kohana\www\system\classes\Kohana\View.php:137
2014-05-02 22:49:49 --- DEBUG: #0 V:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registr')
#1 V:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('registr', NULL)
#2 V:\home\kohana\www\application\classes\Controller\home.php(21): Kohana_View::factory('registr')
#3 V:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 V:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 V:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 V:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 V:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in V:\home\kohana\www\system\classes\Kohana\View.php:137