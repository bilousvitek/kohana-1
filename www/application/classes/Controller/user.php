<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_User extends Controller_Common{
   
 public function action_us()
 {         
     $users = ORM::factory('user')
     ->where( 'login', '=', Cookie::get('login', 'no user'))
     ->find();   
 if($users->loaded())
{     
     if(isset($_POST['exit']))
     {
      Cookie::delete('login');
      Cookie::delete('pas');
      $this->redirect('entry/login');
     }
   
     $content = View::factory('us');
     $this->template->content = $content;
      
     }
     else
     {
        
     $this->redirect('entry/login');
         
     }   
 }
 } //end Controller_User 