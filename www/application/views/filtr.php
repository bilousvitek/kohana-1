
  <?php   
 /*  $region = ORM::factory('region', $_POST['region']);
$citys = $region->citys->find_all();
foreach($citys as $city)
{
    echo $city->id .' - '. $city->name .'<br />';
}    */
?>
<div class="row" data-equalizer>
 <br>
     <div class="large-3 columns " data-equalizer-watch>
         <div class="sidebar">
        <ul class="side-nav">
           
         <li>
    <label>Регіон
        <select id="sel1" name="sel1">
            <option value="0">Пусто</option>
          <option value="1">Захід</option>
          <option value="2">Схід</option>
          <option value="3">Північ</option>
          <option value="4">Південь</option>
            <option value="5">Центр</option>
        </select>
      </label>
             </li>
         
         <li><label id="lbl2" hidden="true">Область
        <select id="sel2" name="sel2">
            <option value="0">Пусто</option>
          <option value="5">Івано-Франківська</option>
          <option value="1">Львівська</option>
          <option value="2">Луганська</option>
          <option value="3">Донецька</option>
            <option value="4">Київська</option>
        </select>
      </label>
        </li>
          
            <li> <label id="lbl3" hidden>Місто
        <select>
            <option value="0">Пусто</option>
          <option value="5">Івано-Франківськ</option>
          <option value="1">Коломия</option>
          <option value="2">Бурштин</option>
          <option value="3">Калуш</option>
            <option value="4">Галич</option>
        </select>
      </label>
                </li>
            
            <li class="divider"></li>
            
            <li><label>Ціна</label> 
            
            <div class="row">
    <div class="large-6 columns">
       <input type="text" name="" placeholder="Від"/>
    </div>
    <div class="large-6 columns" >
        <input type="text" name="" placeholder="До" />
    </div></div>
                
            </li>
            <li class="divider"></li>
           
            
            <li> <label>Кількість кімнат</label> 
                
               <div class="row">
    <div class="large-6 columns">
       <input type="text" name="" placeholder="Від"/>
    </div>
    <div class="large-6 columns" >
        <input type="text" name="" placeholder="До" />
    </div></div></li>
            <li class="divider"></li>
            <li><input id="checkbox1" type="checkbox"><label for="checkbox1">з фотографіями</label></li>
            <li class="divider"></li>
         </ul>         
  </div>
         </div> 
    </div>



   
 <form method="post">
       

<select name="region" size="1">
<option value="0">Виберіть область</option>
<option value="1">Івано-Франківськ</option>
<option value="2">Львів</option> 
</select>     
<input type="submit" name="search" value="->" > 
    <select name="city" size="1"> 
        
       
 <?php  
 if(isset($_POST['search'])){
             $citys = ORM::factory('city')
            ->where('region_id', '=', $_POST['region'])
            ->find_all();
      foreach($citys as $city) 
      {
    echo '<option value="'.$city->id.'">'.$city->name.'</option>' ;
       } 
    }
      ?>  
         <option value="0"> Виберіть місто </option>     
     </select> 
     
     
    <input type="submit" name="search2" value="->" > <br><br> 
     
     
     <?php
 if(isset($_POST['search2'])){
      $apartments = ORM::factory('apartment')
            ->where('city_id', '=', $_POST['city'])
            ->find_all();
      foreach($apartments as $apartment) 
      {
      echo '<br>Вулиця:'. $apartment->street.'<br> Будинок:'. $apartment->house. '<br>Поверх:'. $apartment->floor.'<br> Кількість кімнат:'. $apartment->numberRoom.'<br> Ціна:'. $apartment->price.'<br> Опис:'. $apartment->description.'<br> Дата посту:'. $apartment->date. "<br>----------------------------------------------------" ;
       } 
    }
?>
     
     
<br><br>     
ціна  від <input type="text" name="price1"> до  <input type="text" name="price2"><br><br>

