<?php
    require_once "../includes/db.php";
    require_once "db_engine.php";

    if(!isset($_POST)){
        echo "Error: No data!";
        die();
    }

    $login = htmlentities(strip_tags(trim($_POST["login"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $photo = htmlentities(strip_tags(trim($_POST["photo"])));

    $resp = array(
        'login' => $login,
        'password' => $password,
        'email' => $email,
        'photo' => $photo
    );

    echo json_encode($resp);

