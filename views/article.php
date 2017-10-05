<div class="row">
  
  <div class="col s12">
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
          
      </div>
    </div>
</div>

<script src="js/main.js"></script>