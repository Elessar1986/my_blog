<div class="row">
  
  <div class="col l3 m4 s12">
       <div class="card-panel z-depth-3">
           <div class="card green darken-2 white-text">
               <h3 class="article_group_header">Популярное</h3>
           </div>
           <div class="card">
               <h3 class="blue-text text-darken-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
               <h5 class="blue-text text-darken-4">Понедельник 20.11.2017 / 20:33</h5>
               <p><img src="../img/coding.jpg" alt="" class="responsive-img article_img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, nemo ipsum ratione pariatur, quibusdam corporis, repellat esse tempore voluptatum excepturi quam architecto. Fugiat illum velit tenetur excepturi et maiores voluptates necessitatibus magnam aut illo magni natus expedita vitae fuga, suscipit laborum corporis! Praesentium iusto incidunt ducimus quod, commodi, dolor aliquid nulla consectetur adipisci dicta impedit! </p>
               <div class="article_open"><a href="article.php"><h4 class="blue-text text-darken-4">Подробнее</h4></a></div>
           </div>
           
           <div class="card">
               <h3 class="blue-text text-darken-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
               <h5 class="blue-text text-darken-4">Понедельник 20.11.2017 / 20:33</h5>
               <p><img src="../img/resources.png" alt="" class="responsive-img article_img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, nemo ipsum ratione pariatur, quibusdam corporis, repellat esse tempore voluptatum excepturi quam architecto. Fugiat illum velit tenetur excepturi et maiores voluptates necessitatibus magnam aut illo magni natus expedita vitae fuga, suscipit laborum corporis! Praesentium iusto incidunt ducimus quod, commodi, dolor aliquid nulla consectetur adipisci dicta impedit! </p>
               <div class="article_open"><a href="#"><h4 class="blue-text text-darken-4">Подробнее</h4></a></div>
           </div>
           
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
<!--           <div class="card">-->
<!--               <h3 class="blue-text text-darken-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>-->
<!--               <h5 class="blue-text text-darken-4">Понедельник 20.11.2017 / 20:33</h5>-->
<!--               <p><img src="../img/bookcase-resources.jpg" alt="" class="responsive-img article_img">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, nemo ipsum ratione pariatur, quibusdam corporis, repellat esse tempore voluptatum excepturi quam architecto. Fugiat illum velit tenetur excepturi et maiores voluptates necessitatibus magnam aut illo magni natus expedita vitae fuga, suscipit laborum corporis! Praesentium iusto incidunt ducimus quod, commodi, dolor aliquid nulla consectetur adipisci dicta impedit! Tenetur eum vero similique sed maxime voluptate repudiandae accusamus doloribus, iure, nulla praesentium asperiores, odio assumenda modi cumque ex, laborum sequi. Est voluptas adipisci sit, illo fuga. Quidem optio suscipit odio commodi dolorum, ipsa laborum recusandae? Cumque repudiandae fuga dolor eaque assumenda laudantium aliquam natus.</p>-->
<!--               <div class="article_open"><a href="#"><h4 class="blue-text text-darken-4">Подробнее</h4></a></div>-->
<!--           </div>-->
    

    </div>
   </div>
   
    
   <div class="col l3 hide-on-med-and-down">
       <div id="login_div" class="card-panel z-depth-3">
           <div class="card   yellow darken-3 white-text">
               <h3 class="article_group_header">Войти</h3>
           </div>
           <form action="">
               <div class="input-field ">
                   <i class="material-icons prefix blue-text text-darken-4">account_circle</i>
                   <input class="validate invalid color_border_none" pattern="[A-Z,a-z,А-Я,а-я, ]*" type="text" id="Login" name="login" required>
                   <label data-error="wrong" data-success="right" for="Name" class="">Login...</label>
               </div>
               <div class="input-field ">
                <i class="material-icons prefix blue-text text-darken-4">lock</i>
                <input class="validate invalid color_border_none" type="password" id="Password" name="password" required>
               <label data-error="wrong" data-success="right" for="Password" class="">Password...</label>
               </div>
               <p><button class="waves-effect waves-light btn blue darken-4" type="submit">
              Login
          </button></p>
           </form>
    </div>
    
    <div id="personal_info_div" class="card-panel z-depth-3">
           <a href="#">
               <div class="card   yellow darken-3 white-text">
               <h3 class="article_group_header_2">Личный кабинет</h3>
           </div>
           </a>
           <div class="user_info">
              <img src="../img/meIcon.png" alt="" class="responsive-img ava_img">
               <p><h4>Login:</h4>
               <h4 class="thin_h4">login</h4></p>
               <p><h4>e-Mail:</h4>
               <h5>e-mail</h5></p>
               <p><h4>IP:</h4>
               <h5><?php echo $_SERVER['REMOTE_ADDR']?></h5></p>
           </div>
           
    </div>
   </div>
   


</div>