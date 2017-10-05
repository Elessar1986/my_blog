<?php

    require_once "config.php";
    require_once "rb.php";

    session_start();


    R::setup( "mysql:host=127.0.0.1;dbname=test_blog",
    'root', '' );

    R::freeze(false);




