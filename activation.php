<?php

require_once "includes/db.php";

include_once "views/header.php";

    if(!empty($_GET) && isset($_GET['login']) && isset($_GET['code'])){


        $login = htmlentities(strip_tags(trim($_GET["login"])));
        $code = htmlentities(strip_tags(trim($_GET["code"])));

        $user = R::findOne( 'users', 'login = ?', array($login));

        $activation = true;
        if(!empty($user) && $user->auth_done == 0){
            if(password_verify($user->email . $login, $user->activation_code)){
                $user->auth_done = true;
                R::store($user);
                include_once "views/reg_congrat.php";
            }
            else{
                $errors = array();
                $errors[] = "Не правильный код активации. Обратитесь к администратору!";
                include_once "views/reg_error.php";
            }
        }
        else{
            if(isset($user)){
            $errors = array();
            $errors[] = "Ваш аккаунт уже активирован!";
            include_once "views/reg_error.php";
        }else{
                $errors = array();
                $errors[] = "Ошибка! Пользователь с таким логином не найден";
                include_once "views/reg_error.php";
            }
        }




    }



include_once "views/footer.php";