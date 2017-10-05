<div class="row">
  
  <div class="col l3 m4 s12">
       <div class="card-panel z-depth-3">
           <div class="card green darken-2 white-text">
               <h3 class="article_group_header">Популярное</h3>
           </div>
           <?php foreach ($top_art as $ta){ ?>
           <div class="card">
               <h3 class="blue-text text-darken-4"><?=$ta['title']?></h3>
               <h5 class="blue-text text-darken-4"><?=$ta['pubdate']?></h5>
               <p><img src="../img/<?=$ta['img']?>" alt="" class="responsive-img article_img"><?=articles_intro($ta['text'], 100)."...";?></p>
               <div class="article_open"><a href="article.php?id=<?=$ta['id']?>"><h4 class="blue-text text-darken-4">Подробнее</h4></a></div>
           </div>
           <?php } ?>
           
       </div>
       
   </div>
  
   <div class="col l6 m8 s12">
       <div class="card-panel z-depth-3">
           <div class="card  red darken-2 white-text">
               <h3 class="article_group_header">Последние новости</h3>
           </div>
           <?php foreach ($articles as $a){ ?>
           <div class="card">
               <h3 class="blue-text text-darken-4"><?=$a['title']?></h3>
               <h5 class="blue-text text-darken-4"><?=$a['pubdate']?></h5>
               <p><img src="../img/<?=$a['img']?>" alt="" class="responsive-img article_img"><?=articles_intro($a['text'])?></p>
               <div class="article_open"><a href="article.php?id=<?=$a['id']?>"><h4 class="blue-text text-darken-4">Подробнее</h4></a></div>
           </div>
           <?php }?>
    

    </div>
   </div>
   
    
   <div class="col l3 hide-on-med-and-down">


       <?php if(!$log_user) { ?>
            <?php include_once "login_form.php"; ?>
        <? } ?>


<!--       <div id="load_img" class="card-panel z-depth-3">-->
<!--           <div class="card   yellow darken-3 white-text">-->
<!--               <h3 class="article_group_header">Войти</h3>-->
<!--           </div>-->
<!--           <form action="loadimg.php" method="post" enctype="multipart/form-data">-->
<!---->
<!--                   <i class="material-icons prefix blue-text text-darken-4">photo</i>-->
<!--                   <input class=" color_border_none" accept="image/jpeg,image/png"  type="file" name="userfile">-->
<!---->
<!---->
<!---->
<!--               <p><button class="waves-effect waves-light btn blue darken-4" type="submit">-->
<!--                       Login-->
<!--                   </button></p>-->
<!--           </form>-->
<!--       </div>-->


    <?php if($log_user){ ?>
        <?php include_once "personal_info.php"; ?>
       <?php } ?>

       <?php if($log_admin){ ?>
           <?php include_once "admin_bar.php"; ?>
       <?php } ?>

   </div>
   


</div>

<script src="js/main.js"></script>