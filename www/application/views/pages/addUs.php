<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$add = new Controller_Registr();
$add->addUser();
?>
    <form data-abide method="post"> 
            <fieldset>
                
                <legend>Реєстрація користувача:</legend> 
            
             
                <div class="medium-10 columns">
                <label>ПІБ <input type="text"  name="initials" required pattern="[а-яА-Я]+ " > </label> 
                <small class="error">Ви українець</small>
                </div>              
                    <div class="medium-10 columns">
                <label>Логін <input type="text"  name="login"> </label> </div>
                    <div class="medium-10 columns">
                <label>Пароль <input type="password" id="password" name="password" required data-min="password"> </label> 
                <small class="error">Your password must match the requirements</small> </div>
                    
                    <div class="medium-10 columns">
                <label>Повторення пароля <input type="password"  name="password" required pattern="[a-zA-Z]+" data-equalto="password"> </label> 
                <small class="error">Паролі не співпадають</small></div>
                   
                <div class="medium-10 columns">
                   
                <label>Email <input type="email" required  name="email"> </label> 
                <small class="error">Недійсний email</small>
                </div> 
                 
                <div class="medium-10 columns">
                <label>Контактний телефон <input type="text"  name="phone" required pattern="[-+]?[1-9]\d*">
                    </label> 
                <small class="error">це не номер телефону</small></div> 
                    <div class="small-6 columns">
                    <button type="submit" name="add">Зареєструватися</button>
                        </div>
      
                
            </fieldset> 
          </form> 
