<div id="personal_info_div" class="card-panel z-depth-3 ">
    <a href="#">
        <div class="card yellow darken-3 ">
            <a href="user_panel.php"><h4 class="white-text">Личный кабинет</h4></a>
        </div>
    </a>
    <div class="row">
        <img src="../static/img/<?=$_SESSION['logined_user']->img;?>" alt="" class="responsive-img ava_img">
        <h5 class="blue-text text-darken-4">Login:
            <teg class="grey-text text-darken-1"><?=$_SESSION['logined_user']->login;?></teg>
        </h5>
<!--         <h5 class="blue-text text-darken-4">e-Mail:-->
<!--             <tag class="grey-text text-darken-1"> --><?//=$_SESSION['logined_user']->email;?><!--</tag>-->
<!--         </h5>-->
       <h5 class="blue-text text-darken-4">IP:
        <tag class="grey-text text-darken-1"> <?php echo $_SERVER['REMOTE_ADDR']?></tag>
       </h5>

    </div>
    <div class="row">
        <a class="exit_button right"><b>Выход</b></a>
    </div>

</div>

<!--<script src="js/main.js"></script>-->