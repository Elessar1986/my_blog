<?php

require_once "includes/db.php";
require_once "model/db_engine.php";

$articles = getAllArticles($dblink);

include_once "views/header.php";

include_once "views/main.php";

include_once "views/footer.php";