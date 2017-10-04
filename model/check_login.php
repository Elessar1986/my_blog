<?php
require_once "../includes/db.php";
require_once "db_engine.php";

if(!isset($_POST)){
    echo "Error: No data!";
    die();
}

if(isset($_POST['login'])) {
    $login = htmlentities(strip_tags(trim($_POST["login"])));
    $ans = array('answer' => 0, 'res' => $login);

    $result = getUserCountByLogin($login);

    if ($result != 0) {
        $ans["answer"] = 1;
    }

    echo json_encode($ans);
}

if(isset($_POST['email'])) {
    $mail = htmlentities(strip_tags(trim($_POST["email"])));
    $ans = array('answer' => 0, 'res' => $mail);

    $result = R::count( 'users', 'email = ?',array($mail));

    if ($result != 0) {
        $ans["answer"] = 1;
    }

    echo json_encode($ans);
}