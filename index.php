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


$articles = getAllArticles();
$top_art = getTopArticles();

include_once "views/header.php";

include_once "views/main.php";

include_once "views/footer.php";