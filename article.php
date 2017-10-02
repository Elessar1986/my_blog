<?php

require_once "includes/db.php";
require_once "model/db_engine.php";

if(isset($_GET['id'])) {
    $id = htmlentities(strip_tags(trim($_GET['id'])));

    addViewToArticle($dblink, $id);

    $art = getArticleById($dblink, $id);

    include_once "views/header.php";

    include_once "views/article.php";

    include_once "views/footer.php";
}