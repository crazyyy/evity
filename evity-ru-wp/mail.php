<?php

    //Название страницы
    $pageTitle = "Заказ с сайта evity.ru";

    //Счетчик перезагрузки страницы
    $refreshCounter = 3;

    // Адрес страницы, с которой посетитель пришёл на данную страницу
    $referer = $_SERVER['HTTP_REFERER'];

    // Content-Type:
    $contenttype = 'text/html; charset=utf-8';

    // Куда отправлять сообщения
    $address = "manager@evity.ru";

    // Тема сообщения
    $sub = "Заказ с сайта evity.ru";

?>
<!DOCTYPE HTML>
<html lang="<?=$_SERVER['HTTP_ACCEPT_LANGUAGE']?>">
<head>
    <meta http-equiv="Content-Type" content="<?=$contenttype?>">
    <title><?=$pageTitle?></title>
    <?php echo "<meta http-equiv='refresh' content='".$refreshCounter.";url=".$referer."'>"; ?>
    <style>
        .mywindow{ padding: 50px; text-align: center }
    </style>
</head>
<body>
    <div class="mywindow">
    <?php
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['mail'])) {$email = $_POST['mail'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['sumDataall'])) {$sumDataall = $_POST['sumDataall'];}
    if (isset($_POST['area'])) {$body = $_POST['area'];}
    if (isset($_POST['htmlDataall'])) {$bodyList = $_POST['htmlDataall'];}

    $mes = "Имя: $name \nE-mail: $email \nТема: $sub \nНомер телефона: $phone \nВы заказали услуг на сумму: $sumDataall руб. \nПеречень заказанных вами услуг: $bodyList \nКомментарий к заказу: $body";
    $send = mail ($address,$sub,$mes,"Content-type:text/html; charset = UTF-8\r\nFrom:$email");
    if ($send == 'true')
    {
    echo "Сообщение отправлено, теперь Вы можете вернуться обратно и продолжить работу с <a href=\"/\">evity.ru</a>";
    }
    else
    {
    echo "Сообщение не отправлено, проверьте правильность заполнения полей и попробуйте снова";
    }
    ?>
    </div>
</body>
</html>