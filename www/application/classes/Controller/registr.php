<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Registr  {
    
    public function addUser(){
        
        if(isset($_POST['add'])){
       
$post = Validation::factory($_POST);   
$post -> rule(TRUE, 'not_empty')
      -> rule('password', 'min_length', array(':value', 8))     
      -> rule('repass',  'matches', array(':validation', 'repass', 'password'))
      -> rule('email', 'email')
   // -> rule('email', ' email_domain')          // перевірка на існуючу пошту       
      -> rule('phone', 'phone', array(':value', 10));  
       
    if($post -> check()) 
{
$users = ORM::factory('user');       
$users->initials = $_POST['initials'];
$users->login = $_POST['login'];
$users->password = $_POST['password'];
$users->email = $_POST['email'];
$users->phone = $_POST['phone'];
$users->save();
}       
else
{
    echo "Дані введено не коректно!";
   $errors = $post -> errors();    
}  
}
}
    public function deleteUser(){
        
        if(isset($_POST['delete'])){
        ORM::factory('user', $_POST['id'])
        ->delete();
        }  
    }
    
    
}