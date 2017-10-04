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
                       <p>Что бы завершить регистрацию вашего аккаунта перейдите по ссылке ниже:</p>
                       <br>
                       <p><b>http://myfirstblog/activation.php?login=$login&code=$code</b></p>
                       <br>
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

