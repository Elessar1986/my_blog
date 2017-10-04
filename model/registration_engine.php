<?php

function sendActivationCode($mail, $login, $code){
    $subject = "Регистрация на IvanArepjev/BLOG";
    $message = "
                <html>
                    <head>
                        <title>Приветствую, '$login'!</title>
                    </head>
                    <body>
                        <p>Приветствую, $login!</p>
                        <br>
                       <p>Вы получили это письмо потому что на вашу почту был зарегистрирован аккаунт на сайте ivanarepjev.netne.net/blog!</p>
                       <p>Если вы этого не делали то просто удалите это письмо.</p>
                       <p>Либо скопируйте этот код активации:</p>
                       <br>
                       <p><b>$code</b></p>
                       <br>
                       <p>И вставте его в поле для кода подтверждения вашей почты!</p>
                        <p>Спасибо что зарегистрировались на моем блоге! </p>
                    </body>
                </html>";
    sendMail($mail, $subject, $message);
}



function sendMail($mail, $subject, $message){
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <ivan.arepjev@gmail.com>\r\n";
    mail($mail, $subject, $message, $headers);
}



//if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
//    $to = 'ivan.arepjev@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
//    $subject = 'Обратный звонок'; //Загаловок сообщения
//    $message = '
//                <html>
//                    <head>
//                        <title>'.$subject.'</title>
//                    </head>
//                    <body>
//                        <p>Имя: '.$_POST['name'].'</p>
//                        <p>Телефон: '.$_POST['phone'].'</p>
//                    </body>
//                </html>'; //Текст нащего сообщения можно использовать HTML теги
//    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
//    $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
//    $res = mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
//    echo $res;
//}
