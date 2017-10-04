<div class="row">

    <div class="col s12">
        <div class="card-panel z-depth-3">
            <div class="card yellow darken-3 white-text">
                <h3 class="article_group_header">Регистрация</h3>
            </div>

            <div class="row" id="reg_accept">
                <div class="col l6 offset-l3 m12">
                    <div class="card">
                        <h4>На ваш емайл было выслано письмо с кодом для подтверждения вашей почты. Введите этот код в поле ниже и нажмите кнопку.</h4>
                        <form action="" class="container" id="reg_accept_form">

                            <div class="input-field">
                                <i class="material-icons prefix blue-text text-darken-4">lock</i>
                                <input class="validate color_border_none" type="text" id="Accept_code" name="accept_code" required autofocus>
                                <label  for="Accept_code" class="">Код подтверждения...</label>
                                <p>
                                    <button id="reg_button" class="waves-effect waves-light btn blue darken-4" type="submit">
                                        Подтвердить
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/registration.js"></script>