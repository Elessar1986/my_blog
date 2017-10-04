<?php

    require_once "config.php";
    require_once "rb.php";

    session_start();


    R::setup( "mysql:host=127.0.0.1;dbname=test_blog",
    'root', '' );

    R::freeze(false);



//        $dblink = mysqli_connect(
//                MYSQL_SERVER,
//                MYSQL_USER_NAME,
//                MYSQL_PASSWORD,
//                MYSQL_DB_NAME
//            );
//
//    if($dblink == false){
//        echo "Error: Fail to connect to DB!<br>";
//        echo mysqli_connect_error();
//        die();
//    }
