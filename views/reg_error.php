<div class="row">

    <div class="col s12">
        <div class="card-panel z-depth-3">
            <div class="card yellow darken-3 white-text">
                <h3 class="article_group_header">Регистрация</h3>
            </div>
            <?php foreach ($errors as $e){ ?>
            <div class="row" id="reg_accept">
                <div class="col l6 offset-l3 m12">
                    <div class="card">
                        <h4 class="red-text"><?=$e?></h4>

                    </div>
                </div>
            </div>
            <?php } ?>
            <? if($activation) {?>
            <a href="/"> <button id="to_main" class="waves-effect waves-light btn blue darken-4">На главную</button></a>
            <? }else { ?>
            <button id="reg_back" class="waves-effect waves-light btn blue darken-4">Назад</button>
            <? } ?>
        </div>
    </div>
</div>

<script src="js/registration.js"></script>