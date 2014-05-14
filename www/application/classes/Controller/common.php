<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'header';
 
    public function before()
    {
        parent::before();
        View::set_global('title', 'Мой сайт');				
        View::set_global('description', 'Самый лучший сайт');
        $this->template->content = '';
        $this->template->styles = array('foundation', 'main', 'normalize');
        $this->template->scripts = array('public/vendor/js/placeholder.js','public/vendor/js/modernizr.js', 'public/vendor/js/jquery.cookie.js','public/vendor/js/jquery.js','public/vendor/js/fastclick.js', 'public/vendor/js/foundation.min.js' );
        
       
    }
 
} // End Common