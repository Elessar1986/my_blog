<?php


require_once "includes/db.php";

if(isset($_SESSION['logined_user'])) {

    header("Location: index.php");
    exit;
}

include_once "views/header.php";

include_once "views/login_form.php";

include_once "views/footer.php";