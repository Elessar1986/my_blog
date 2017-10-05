<?php


    require_once "registration_engine.php";

function getAllArticles(){

    $art = R::find( 'articles', 'ORDER BY id DESC LIMIT 5');

    return $art;

}

function getTopArticles(){

    $art = R::find( 'articles', 'ORDER BY views DESC LIMIT 5');

    return $art;

}

    function articles_intro($text, $len = 520){
        return mb_substr($text,0, $len);
    }

function getArticleById($id){

    $art = R::findOne( 'articles', "id = ?", array( $id));
    return $art;

}

function addViewToArticle($id){

    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $res = R::count( 'views', 'ip = ? AND article_id = ?', array($ip, $id));
    if($res == 0){
        $view = R::dispense('views');
        $view->article_id = $id;
        $view->ip = $ip;
        R::store($view);
        $art = R::findOne( 'articles', "id = ?", array( $id));
        $art->views = $art->views + 1;
        R::store($art);
        return true;
    }else{
        return false;
    }
}

function getUserCountByLogin( $login){
    $users = R::count( 'users', 'login = ?', array($login));
    return $users;
}

function addNonAceptedUser($login, $password, $email, $photo = 'meIcon.png')
{
    $password = password_hash($password, PASSWORD_DEFAULT);
    $activation_code = password_hash($email . $login, PASSWORD_DEFAULT);
    $user = R::dispense('users');
    $user -> login = $login;
    $user -> password = $password;
    $user -> email = $email;
    $user -> img = $photo;
    $user -> activation_code = $activation_code;
    $user -> auth_done = false;
    R::store($user);
    sendActivationCode($email, $login, $activation_code);
    return true;
}