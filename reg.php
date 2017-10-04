<?php

require_once "includes/db.php";
require_once "model/db_engine.php";

include_once "views/header.php";

if(isset($_POST) && $_GET['action'] == 'registration'){

    $login = htmlentities(strip_tags(trim($_POST["login"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));

    $errors = array();

    if(R::count('users', 'login = ?', array($login)) > 0){
        $errors[] = 'Пользователь с таким логином уже существует!';
    }

    if(R::count('users', 'email = ?', array($email)) > 0){
        $errors[] = 'Пользователь с таким E-mail уже существует!';
    }



    if(!empty($errors)){
        include_once "views/reg_error.php";
    }
    else {
        addNonAceptedUser($login, $password, $email);
        include_once "views/reg_accept.php";
    }

}else {


    include_once "views/registration.php";
}

include_once "views/footer.php";