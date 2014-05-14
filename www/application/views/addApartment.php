<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

$add = new Controller_Apartment();
$add->addApartment();


?>  
    <!doctype html>
<html class="no-js" lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Додавання квартири</title>
        <link rel="stylesheet" href="css/normalize.css"/>    
        <link rel="stylesheet" href="css/foundation.css"/>
        <link rel="stylesheet" href="css/main.css"/>
       <style type="text/css">
      

    </style>

      <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
     
      <section class="scroll-container" role="main">  
      <div class="row">
    <div class="large-3 medium-4 columns">
        <div class="hide-for-small">
      <div class="sidebar">
    
    Тут якась крута фігня
    </div>
    </div>
        </div>
      
    
      <div class="large-9 medium-8 columns">
          
          
        <form> 
            <fieldset>
                
                <legend>Додавання нової квартири:</legend> 
            
                <div class="medium-10 columns">    
            <label>Вулиця <input type="text"  name="street"> </label> </div>
                <div class="medium-10 columns">
                <label>Номер будинку <input type="text"  name="house"> </label> </div>
                
                
                    <div class="medium-10 columns">
                <label>Поверх <input type="text"  name="floor"> </label> </div>
                    <div class="medium-10 columns">
                <label>Номер квартири <input type="text"  name="number"> </label> </div>
                    
                    <div class="medium-10 columns">
                <label>Кількість кімнат <input type="text"  name="numberRoom"> </label> </div>
                    <div class="medium-10 columns">
                <label>Ціна <input type="text"  name="price"> </label> </div> 
                <div class="medium-10 columns">
                <label>Опис <textarea name="description"></textarea>
                    </label> </div>
                    <div class="small-5 columns">
                    <a class="button" href="#">Додати</a>
                        </div>
      </label>
                
            </fieldset> 
          </form>  
          
          </div>
      
     
      </div>
      </section>
      
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
