<div class="row">
  
  <div class="col l9 m12 s12">
       <div class="card-panel z-depth-3">

           <div class="card article_div">
               <div class="row">
                   <h1 class="blue-text text-darken-4"><?=$art['title']?></h1>
               <h5 class="blue-text text-darken-4"><?=$art['pubdate']?></h5>
               <p><img src="<?=$art['img']?>" alt="" class="responsive-img article_img"><?=$art['text']?></p>
               </div>
                <div class="row">
                    <div class="col l6 m4 s6"><a href="/"><h4 class="blue-text text-darken-4 back_button">Назад</h4></a></div>
                    <div class="col l4 offset-l2 m4 offset-m3 s6"><p>Просмотров: <?=$art['views']?></p></div>
                </div>
           </div>

           <div class="card green darken-2 white-text">
               <h3 class="article_group_header">Коментарии:</h3>
           </div>


           <div class="card  light-blue lighten-5 comment_item">
               <div class="row comment_item_marg">
                   <div class="col s2">
                       <img src="/img/meIcon.png" alt="" class="responsive-img ava_img_comment">
                   </div>
                   <div class="col s10">
                       <div>
                           <h5 class="blue-text text-darken-4">Username</h5>
                           <h6 class="blue-text text-darken-4">12.12.12 23:23:23</h6>
                       </div>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid autem deleniti dolorem dolores fugit hic incidunt itaque minus mollitia, necessitatibus nemo numquam reprehenderit repudiandae rerum similique temporibus vel! Aliquam aliquid at dignissimos eligendi eveniet facilis incidunt iure nesciunt nihil nulla omnis quo repellat, reprehenderit sint, tempora veniam voluptatum?</p>
                   </div>
               </div>

           </div>

           <div class="card light-blue lighten-5 comment_item">
               <div class="row comment_item_marg">
                   <div class="col s2">
                       <img src="/img/meIcon.png" alt="" class="responsive-img ava_img_comment">
                   </div>
                   <div class="col s10">
                       <div>
                           <h5 class="blue-text text-darken-4">Username</h5>
                           <h6 class="blue-text text-darken-4">12.12.12 23:23:23</h6>
                       </div>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid autem deleniti dolorem dolores fugit hic incidunt itaque minus mollitia, necessitatibus nemo numquam reprehenderit repudiandae rerum similique temporibus vel! Aliquam aliquid at dignissimos eligendi eveniet facilis incidunt iure nesciunt nihil nulla omnis quo repellat, reprehenderit sint, tempora veniam voluptatum?</p>
                   </div>
               </div>

           </div>

           <div class="card light-blue lighten-5 comment_item">
               <div class="row comment_item_marg">
                   <div class="col s2">
                       <img src="/img/meIcon.png" alt="" class="responsive-img ava_img_comment">
                   </div>
                   <div class="col s10">
                       <div>
                           <h5 class="blue-text text-darken-4">Username</h5>
                           <h6 class="blue-text text-darken-4">12.12.12 23:23:23</h6>
                       </div>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquid autem deleniti dolorem dolores fugit hic incidunt itaque minus mollitia, necessitatibus nemo numquam reprehenderit repudiandae rerum similique temporibus vel! Aliquam aliquid at dignissimos eligendi eveniet facilis incidunt iure nesciunt nihil nulla omnis quo repellat, reprehenderit sint, tempora veniam voluptatum?</p>
                   </div>
               </div>

           </div>

           <?php if(!$log_user) { ?>
               <div class="card light-green lighten-5">
                   <div class="container">
                       <div class="row">
                           <div class="card-panel">
                               <h4>Комментарии могут оставлять только зарегистрированные пользователи!</h4>
                               <a href="reg.php"><h5 class="">Регистрация</h5></a>
                           </div>
                       </div>
                   </div>
               </div>

           <? } ?>


           <?php if($log_user){ ?>
               <div class="card light-green lighten-5">
                   <div class="container">
                       <div class="row">
                           <form action="">

                               <div class="input-field">
                                   <textarea name="comment" id="Comment" class="materialize-textarea"></textarea>
                                   <label for="Comment">Your comment here...</label>
                               </div>
                               <button id="reg_button" class="waves-effect waves-light btn blue darken-4" type="submit">
                                   Отправить комментарий
                               </button>

                           </form>

                       </div>
                   </div>
               </div>
           <?php } ?>

           <?php if($log_admin){ ?>

           <?php } ?>


           

           <div class="card">
               
           </div>

      </div>



    </div>

    <div class="col l3 hide-on-med-and-down">


        <?php if(!$log_user) { ?>
            <?php include_once "login_form.php"; ?>
        <? } ?>


        <?php if($log_user){ ?>
            <?php include_once "personal_info.php"; ?>
        <?php } ?>

        <?php if($log_admin){ ?>
            <?php include_once "admin_bar.php"; ?>
        <?php } ?>

    </div>
</div>

<script src="js/main.js"></script>