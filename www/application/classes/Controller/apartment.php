<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Apartment  {
    
    public function addapartment(){
       
       if(isset($_POST['add'])){

$post = Validation::factory($_POST);      
$post -> rule(TRUE, 'max_length', array(':value', 200))
      ->rule('street', 'not_empty')
      ->rule('price', 'not_empty');
       
    if($post -> check()) 
{
        
$apartments = ORM::factory('apartment');
      //  $apartments->user_id = $_SESSION['id'];
$apartments->street = $_POST['street'];
$apartments->house = $_POST['house'];
$apartments->floor = $_POST['floor'];
$apartments->number = $_POST['number'];
$apartments->numberRoom = $_POST['numberRoom'];
$apartments->price = $_POST['price'];
$apartments->description = $_POST['description'];      
$apartments->photo = $_POST['photo'];  
$apartments->date = date("y.m.d");
$apartments->save();
}       
else
{  
    echo "Дані введено не коректно!";
    $errors = $post -> errors();    
}  
}   
        
    }
}