<?php

    require_once "config.php";


    $dblink = mysqli_connect(
        'localhost',
        'root',
        '',
        'test_blog'
    );
    if($dblink == false){
        echo "Error: Fail to connect to DB!<br>";
        echo mysqli_connect_error();
        die();
    }
