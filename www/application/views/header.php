 <!doctype html>
<html class="no-js" lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Диплом</title>
      
        
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" tpe="text/css" />
<?php endforeach; ?>   
     
       
    <?php foreach($scripts as $script)         


    { echo HTML::script($script, NULL, TRUE), "\n"; }?>
      
      
  </head>
  <body>
<nav class="top-bar" data-topbar>
      <ul class="title-area"> 
          <li class="name"> 
              <h1><a href="<?php echo URL::site(); ?>">Flat for Sale!</a></h1> 
          </li> 
          
      </ul> 
      <section class="top-bar-section"> <!-- Right Nav Section --> 
          <ul class="right">
              <li class="divider"></li>
              <li class="active"><a href="<?php echo URL::site('entry/entry'); ?>">Вхід</a></li>
              <li class="divider"></li>
              <li class="active"><a href="<?php echo URL::site('home/registration'); ?>">Реєстрація</a></li>                 
              <li class="divider"></li>           
          </ul> <!-- Left Nav Section --> 
          <ul class="left"> 
            <li><a href="#">About</a></li>
              
          </ul>
      </section> 
      </nav> 
      <div class="content"><?php echo $content; ?></div>

      </body>
    </html>

