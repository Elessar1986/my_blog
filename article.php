<?php

require_once "includes/db.php";
require_once "model/db_engine.php";

if(isset($_SESSION['logined_user'])){
    $log_user = true;
}else{
    $log_user = false;
}

if(isset($_SESSION['logined_administrator'])){
    $log_admin = true;
}else{
    $log_admin = false;
}


if(isset($_GET['id'])) {
    $id = htmlentities(strip_tags(trim($_GET['id'])));

    addViewToArticle($id);

    $art = getArticleById($id);

    include_once "views/header.php";

    include_once "views/article.php";

    include_once "views/footer.php";
}