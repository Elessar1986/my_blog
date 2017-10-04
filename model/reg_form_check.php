<?php

require_once "../includes/db.php";

if(isset($_POST)){

    $login = htmlentities(strip_tags(trim($_POST["login"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $password1 = htmlentities(strip_tags(trim($_POST["password1"])));

    $answer = array(
        "login" => false,
        "email" => false,
        "pas_to_pas" => false,
        "pas_lenght" => false
    );

    $result = R::count( 'users', 'login = ?',array($login));
    if ($result > 0) {
        $answer["login"] = true;
    }

    $result = R::count( 'users', 'email = ?',array($email));
    if ($result != 0) {
        $answer["email"] = true;
    }

    if(strlen($password) < 8){
        $answer["pas_lenght"] = true;
    }

    if ($password1 != $password) {
        $answer["pas_to_pas"] = true;
    }

    echo json_encode($answer);

}