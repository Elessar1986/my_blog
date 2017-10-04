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
                        <h4><?=$e?></h4>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>