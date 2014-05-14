<script         src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script>
     $(document).ready(function(){
  $("#hide").click(function(){
    $("#lbl2").hide();
  });
  $("#show").click(function(){
    $("#lbl2").show();
  });
         
    $("#sel1").change(function(){
         if($("#sel1 :selected").text()=="Захід") { $("#lbl2").show();}
        });
 
  
  $("#sel1").change(function(){
         if($("#sel1 :selected").text()!="Захід") { $("#lbl2").hide();}
        });
           
 
  $("#sel2").change(function(){
         if($("#sel2 :selected").text()=="Івано-Франківська") { $("#lbl3").show();}
        });
    
           
  $("#sel2").change(function(){
         if($("#sel2 :selected").text()!="Івано-Франківська") { $("#lbl3"). hide();}
        });
  });
  </script>

<!-- ОТУТ ПОЧИНАЄТЬ ХТМЛ!!!!!! А ТАМ ВИЩЕ ДЖАВА СКРІПТ, ВИПАДАЮЧІ СПИСКИ НЕ ПРАЦЮВАТИМУТЬ БЕЗ ТОГО ДЖАВА СКРІПТА-->

<section class="scroll-container" role="main">  
          <div class="row" data-equalizer>
 <br>
     <div class="large-3 medium-3 small-3 columns " data-equalizer-watch>
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
    </section>