<?php

    require_once "config.php";

    $dblink = mysqli_connect(
        $config[db][server],
        $config[db][user],
        $config[db][password],
        $config[db][database]
    );

    if($dblink == false){
        echo "Error: Fail to connect to DB!<br>";
        echo mysqli_connect_error();
        die();
    }
