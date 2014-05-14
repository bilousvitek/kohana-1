<div class="content"> 
<div class="large-9 medium-8 columns">     
<form data-abide  method="post"> 
            <fieldset>
                
                 <legend>Реєстрація забудовника:</legend> 
            
                
                <div class="medium-10 columns">
                <label>Назва компанії <input type="text"  name="initials" > </label> 
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
                    <button type="submit" name="add">Зареєструвати</button>
                        </div>
                
            </fieldset> 
          </form>  
    </div>
    </div>