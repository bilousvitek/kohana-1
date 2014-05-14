<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Entry extends Controller_Common{
 
 public function action_entry()
{
     $users = ORM::factory('user')
     ->where('login', '=', Cookie::get('login','no user'))
     ->find();
     
  if(Cookie::get('login', 'no user')==$users->login && Cookie::get('pas')==$users->password )
  {
         if($users->accesses==1)
          { 
             $this->redirect('admin/adm');
          }
         else
         {
         $this->redirect('user/us');
         }     
     }
     else 
     {
     $this->redirect('entry/login');
     }
 }   
    
 public function action_login()   
 {         
         if(isset($_POST['confirm']))
        {
          $login=$_POST['login'];
          $pass=$_POST['password'];
   
          $users = ORM::factory('user')
          ->where('login', '=', $login)
          ->find();
    
        if($users->loaded())
       {  
        if($login==$users->login && $pass==$users->password)
        {
          if($users->accesses==1)
          {
              Cookie::set('login', $_POST['login']);
              Cookie::set('pas', $_POST['password']);               
              $this->redirect('admin/adm');
          }
    else
    { 
              Cookie::set('login', $_POST['login']);
              Cookie::set('pas', $_POST['password']);                 
              $this->redirect('user/us');
    }       
        }
        else
        {
            echo "непраивльний пароль";
        }    
 }   
else
{
    echo "такий логін не існує";
}          
           
        
   // $this->template->content = View::factory('login');
    
    }
        $content = View::factory('login');
        $this->template->content = $content;
    }
}