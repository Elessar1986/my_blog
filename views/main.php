<div class="row">
  
  <div class="col l3 m4 s12">
       <div class="card-panel z-depth-3">
           <div class="card green darken-2 white-text">
               <h4 class="article_group_header">Популярное</h4>
           </div>
           <?php foreach ($top_art as $ta){ ?>
           <div class="card">
               <h5 class="blue-text text-darken-4"><?=$ta['title']?></h5>
               <h6 class="blue-text text-darken-4"><?=$ta['pubdate']?></h6>
               <p><img src="<?=$ta['img']?>" alt="" class="responsive-img article_img_min"><?=articles_intro($ta['text'], 100)."...";?></p>
               <div class="row">
                   <div class=" right-align">
                       <a href="article.php?id=<?=$ta['id']?>">
                           <h6 class="blue-text text-darken-4">Подробнее</h6>
                       </a>
                   </div>
               </div>
           </div>
           <?php } ?>
           
       </div>
       
   </div>
  
   <div class="col l6 m8 s12">
       <div class="card-panel z-depth-3">
           <div class="card  red darken-2 white-text">
               <h4 class="article_group_header">Последние новости</h4>
           </div>
           <?php foreach ($articles as $a){ ?>
           <div class="card">
               <h4 class="blue-text text-darken-4"><?=$a['title']?></h4>
               <h6 class="blue-text text-darken-4"><?=$a['pubdate']?></h6>
               <p><img src="<?=$a['img']?>" alt="" class="responsive-img article_img"><?=articles_intro($a['text'])?></p>
               <div class="row">
                   <div class=" right-align">
                       <a href="article.php?id=<?=$a['id']?>">
                           <h5 class="blue-text text-darken-4">Подробнее</h5>
                       </a>
                   </div>
               </div>
           </div>
           <?php }?>
    

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

<!--<script src="js/main.js"></script>-->