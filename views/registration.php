<div class="row">
  
  <div class="col s12">
      <div class="card-panel z-depth-3">
       <div class="card yellow darken-3 white-text">
               <h3 class="article_group_header">Регистрация</h3>
           </div>

           <div class="row">
               <div class="Errors_registration_form container">
                   <ul id="errors_list">
                       <li></li>
                   </ul>
               </div>
               <form class="container col l6 offset-l3 s12" id="reg_form" method="post" action="reg.php" enctype="multipart/form-data">
                   
                <div class="input-field">
                   <i class="material-icons prefix blue-text text-darken-4">account_circle</i>
                   <input class="validate color_border_none" pattern="[A-Z,a-z,А-Я,а-я,0-9 ]*" type="text" id="Login" name="login" required autofocus>
                   <label data-error="не правильно" data-success="правильно" for="Name" class="">Логин...</label>
                   <p><div><span class="hide right red-text error_text" id="wrong_login">Такой логин уже существует</span></div></p>
               </div>
               
               <div class="input-field">
                   <i class="material-icons prefix blue-text text-darken-4">email</i>
                   <input class="validate color_border_none"  type="email" id="Email" name="email" required>
                   <label data-error="не правильно" data-success="правильно" for="Email" class="">Ваш e-mail...</label>
                   <span class="hide right red-text" id="wrong_email">Такой E-Mail уже существует</span>
               </div>
               
               
               <div class="input-field ">
                    <i class="material-icons prefix blue-text text-darken-4">lock</i>
                    <input class="validate color_border_none" type="password" id="Password" name="password" required>
                   <label  for="Password" class="">Пароль...</label>
                   <span class="hide right red-text" id="wrong_pas">Пароль должен быть длинее 8 символов!</span>
               </div>
                  
                  <div class="input-field ">
                    <i class="material-icons prefix blue-text text-darken-4">lock</i>
                    <input class="validate color_border_none" type="password" id="Password1" name="password1" required>
                   <label  for="Password1" class="">Пароль еще раз...</label>
                      <span class="hide right red-text" id="wrong_pas1">Пароль не совпадает</span>
               </div>
                  
               <div class="input-field">
                   <i class="material-icons prefix blue-text text-darken-4">photo</i>
                   <input class="validate color_border_none" accept="image/jpeg,image/png"  type="file" id="Photo" name="photo">
                   
               </div>
                   <p>
                       <button id="reg_button" class="waves-effect waves-light btn blue darken-4" type="submit">
                          Регистрация
                      </button>
                  </p>
               </form>
               
           </div>

      </div> 
    </div>
</div>

<script src="js/registration.js"></script>