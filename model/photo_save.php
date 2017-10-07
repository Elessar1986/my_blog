<?php


function saveMinPhotoToServer(){

    $filename = $_FILES['photo']['name'];
    $sizefile = getimagesize($_FILES['photo']['tmp_name']);
    //$size = filesize($_FILES['photo']['tmp_name']) / 1024;
    //$size = ceil($size);
    $upload_path = "static/img/";
    if (isset($filename)) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path . $filename);
        echo "<p>Файл <strong>".$filename."</strong> успешно загружен</p>";
    } else {
        echo "<p>Файл <strong>".$filename."</strong>  не загружен</p>";
    }
    $new_name = "img_" . date("YmdHis") . ".jpg";
    rename($upload_path . $filename, $upload_path . $new_name);
    $filename = $new_name;

    $smwidth = 250;
    $smheight = 350;

    if ($sizefile[0] > $smwidth or $sizefile[1] > $smheight){

        $smallfoto="$filename";
        require_once "includes/tumbmaker.php";

        if (img_resize("static/img/$filename", "static/img/crop/$smallfoto", $smwidth, $smheight)){
            echo "<p>Масштабирование прошло успешно</p>";
        }
        else {
            echo "<p>Ошибка обрезки фото</p>";
        }
    }
    else {
        copy($upload_path.$filename, $upload_path."crop/".$filename);
    }

    return $filename;

}