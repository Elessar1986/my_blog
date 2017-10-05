<?php

require_once "../includes/db.php";

if(isset($_POST) && $_POST['login'] != '' && $_POST['password']){

    $login = htmlentities(strip_tags(trim($_POST['login'])));
    $password = htmlentities(strip_tags(trim($_POST['password'])));

    $user = R::findOne( 'users', "login = ?" , array( $login));
    if($user &&  password_verify( $password, $user->password)) {
            $_SESSION['logined_user'] = $user;
            if($user->admin == 1) $_SESSION['logined_administrator'] = $user;
            echo json_encode(array("succes" => true));

    }else {

        echo json_encode(array("succes" => false));

    }
}else {

    if (isset($_POST) && $_POST['exit'] != '') {
        if(isset($_SESSION['logined_administrator'])) unset($_SESSION['logined_administrator']);
        unset($_SESSION['logined_user']);
        echo json_encode(array( "exit" => true));

    }

}