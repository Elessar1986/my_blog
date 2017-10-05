<?php

require_once "includes/db.php";
require_once 'model/db_engine.php';

include_once "views/header.php";

if(isset($_POST) && $_GET['action'] == 'registration'){


    $login = htmlentities(strip_tags(trim($_POST["login"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));
    $password1 = htmlentities(strip_tags(trim($_POST["password1"])));
    if(isset($_POST['photo']))     {$userfile = $_POST['photo'];}
    if(isset($_POST['submit']))     {$submit = $_POST['submit'];}
    if(($_FILES['photo']['error'] == 0 && $_FILES['photo']['size'] > 0)) {
        $filename = $_FILES['photo']['name'];
        $sizefile = getimagesize($_FILES['photo']['tmp_name']);
        $size = filesize($_FILES['photo']['tmp_name'])/1024;
        $size = ceil($size);
        $upload_path = "static/img/";
        if(isset($filename)){
            move_uploaded_file( $_FILES['photo']['tmp_name'], $upload_path.$filename);
            //echo "<p>Файл <strong>".$filename."</strong> успешно загружен</p>";
        }else {
            //echo "<p>Файл <strong>".$filename."</strong>  не загружен</p>";
        }
        $new_name = "img_".date("YmdHis").".jpg";
        rename($upload_path.$filename, $upload_path.$new_name);
        $filename = $new_name;

    }

    $errors = array();

    $result = R::count( 'users', 'login = ?',array($login));
    if($result > 0){
        //echo "111";
        $errors[] = 'Пользователь с таким логином уже существует!';
    }

    $result = R::count('users', 'email = ?', array($email));
    if($result > 0){
        //echo "222";
        $errors[] = 'Пользователь с таким E-mail уже существует!';
    }

    if($password != $password1){
        $errors[] = 'Пароли не совпадают!';
    }


    if(!empty($errors)){
        //echo "333";
        include_once "views/reg_error.php";
    }
    else {
        //echo "444";
        if(isset($filename)){
            addNonAceptedUser($login, $password, $email, $filename );
        }else {
            addNonAceptedUser($login, $password, $email);
        }
        include_once "views/reg_accept.php";
    }

}else {


    include_once "views/registration.php";
}

include_once "views/footer.php";