<div class="row">
  
  <div class="col l9 m12 s12">
       <div class="card-panel z-depth-3">

           <div class="card article_div">
               <div class="row">
                   <h3 class="blue-text text-darken-4"><?=$art['title']?></h3>
               <h5 class="blue-text text-darken-4"><?=$art['pubdate']?></h5>
               <p><img src="../img/<?=$art['img']?>" alt="" class="responsive-img article_img"><?=$art['text']?></p>
               </div>
                <div class="row">
                    <div class="col l2 s2 m2"><div class="article_open"><a href="/"><h4 class="blue-text text-darken-4 back_button">Назад</h4></a></div></div>
                    <div class="col l2 offset-l8"><p>Просмотров: <?=$art['views']?></p></div>
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