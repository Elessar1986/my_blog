
    <div id="login_div" class="card-panel z-depth-3">
           <div class="card yellow darken-3 white-text">
               <h4 class="article_group_header">Войти</h4>
           </div>
            <div class="login_error">

            </div>
           <form method="post" id="login_form">
               <div class="input-field ">
                   <i class="material-icons prefix blue-text text-darken-4">account_circle</i>
                   <input class="validate invalid color_border_none" pattern="[A-Z,a-z,А-Я,а-я,0-9 ]*" type="text" id="Login" name="login" required>
                   <label data-error="wrong" data-success="right" for="Name" class="">Login...</label>
               </div>
               <div class="input-field ">
                <i class="material-icons prefix blue-text text-darken-4">lock</i>
                <input class="validate invalid color_border_none" type="password" id="Password" name="password" required>
               <label data-error="wrong" data-success="right" for="Password" class="">Password...</label>
               </div>
               <button class="waves-effect waves-light btn blue darken-4" type="submit">
                    Войти
          </button>
           </form>
           <a href="#">Забыли пароль?</a>
    </div>

    <script src="js/logining.js"></script>