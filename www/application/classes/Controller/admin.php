<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Common{
   
 public function action_adm()
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
        
     $content = View::factory('adm');
     $this->template->content = $content;     
     }
     else
     {        
     $this->redirect('entry/login');        
     }
         
 } 
 } //end Controller_Common  
 
 
 
 