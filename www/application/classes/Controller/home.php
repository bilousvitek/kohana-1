<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Home extends Controller_Common{
 
       
   public function action_index()
{      
        $content = View::factory('welcome');
        $this->template->content = $content;  
                     
}    
    public function action_registration()
    {
        $content = View::factory('pages/registration');
        $this->template->content = $content;  
    } 
    
    public function action_addUs()
    {
        $content = View::factory('pages/addUs');
        $this->template->content = $content;
    
    }
    public function action_addRealtor()
    {
        $content = View::factory('pages/addRealtor');
        $this->template->content = $content;
    
    }
    public function action_addCompany()
    {
        $content = View::factory('pages/addCompany');
        $this->template->content = $content;    
    } 
            
} // End Page



 /*
    $locations = ORM::factory('location');
       $locations = $locations->find_all();
              
foreach($locations as $location)
{
    echo $location->id." ";
  
    echo $location->name .'<br />';
} */
      
    //  $view = View::factory('filtr');
       // $this->response->body($view); 