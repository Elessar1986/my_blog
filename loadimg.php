<?php
if(isset($_POST['userfile']))     {$userfile = $_POST['userfile'];}
if(isset($_POST['submit']))     {$submit = $_POST['submit'];}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Результаты обработки</title>
    <meta http-equiv="content-type"  content="text/html; charset=windows-1251">
</head>
<body>

<?php
if(isset($_FILES) && isset($_FILES['userfile'])) {

    echo $_FILES['userfile']['tmp_name'];
    var_dump($_FILES);
}
?>

Результаты обработки
<?php
if(isset($_FILES)){
    $maxwidth = 1600; //Максимальная ширина загружаемого изображения
    $maxheight = 1200; //Максимальная высота загружаемого изображения
    $allowed_filetypes = array('.jpg','.JPG'); //Поддерживаемые форматы
    $maxs = 2048; // Максимальный размер файла в байтах
    $upload_path = "static/img/";
    $filename = $_FILES['userfile']['name']; //Имя файла
    $sizefile = getimagesize($_FILES['userfile']['tmp_name']);//Параметры изображения
    $size = filesize($_FILES['userfile']['tmp_name'])/1024; //Переводим размер изображения в Кбайты
    $size = ceil($size); //	округляем размер файла до целого числа

    $ext = substr($filename,strpos($filename,'.'),strlen($filename)-1);
    if(!in_array($ext,$allowed_filetypes)){
        echo "<p>Вы <strong>не выбрали изображение</strong> для загрузки или данный <strong>формат файлов не поддерживается</strong></p>";
    }
    else{


        if($size > $maxs or $size == 0){ //Если размер файла больше максимального или равен 0 выдаем ошибку
            echo "<p>Разрешается загружать файлы не более 2 Мб</p>";
        }
        else{
            if ($sizefile[0] > $maxwidth or $sizefile[1] > $maxheight) {// Если разрешение не соответствуют выдаем ошибку
                echo "<p>Файл, который ва пытаетесь загрузить, имее разрешение <strong>$sizefile[0] x $sizefile[1]</strong>. Разрешается загружать фото не боле чем <strong>$maxwidth х $maxheight</strong> пикселей</p>";
            }
            else{
                if(isset($filename)){// Если имя файла существует производим загрузку
                    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_path.$filename)){
                        echo "<p>Файл <strong>".$filename."</strong> успешно загружен</p>";
                    }
                }
                else {
                    echo "<p>Файл <strong>".$filename."</strong>  не загружен</p>";
                }

                $new_name = "img_".date("YmdHis").".jpg";
                //Переименуем файл на всякий случай что бы не было совпадений
                rename($upload_path.$filename, $upload_path.$new_name);
                //Запомним новое имя
                $filename = $new_name;




                echo "<p>Ok $filename</p>";
            }

        }


    }

}
else{
    echo "<p>Неверный формат запроса</p>";
}
?>

</body>
</html>
