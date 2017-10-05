<div id="personal_info_div" class="card-panel z-depth-3 ">
    <a href="#">
        <div class="card   yellow darken-3 white-text">
            <h3 class="article_group_header_2">Личный кабинет</h3>
        </div>
    </a>
    <div class="user_info">
        <img src="../static/img/<?=$_SESSION['logined_user']->img;?>" alt="" class="responsive-img ava_img">
        <p><h5 class="blue-text text-darken-4">Login:</h5>
        <h5 class="grey-text text-darken-1"><?=$_SESSION['logined_user']->login;?></h5></p>
        <p>
            <!--               <h5 class="blue-text text-darken-4">e-Mail:</h5>-->
        <h5 class="grey-text text-darken-1"><?=$_SESSION['logined_user']->email;?></h5></p>
        <p><h5 class="blue-text text-darken-4">IP:</h5>
        <h5 class="grey-text text-darken-1"><?php echo $_SERVER['REMOTE_ADDR']?></h5></p>
        <p class="exit_button" id="exit_button"><b>Выход</b></p>
    </div>

</div>