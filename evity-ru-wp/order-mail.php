<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Cообщение</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="3;url=http://www.evity.ru/">
    <style>
.mywindow{
    padding: 50px;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="mywindow">
        <?php
            if (isset($_POST['ordername'])) {$ordername = $_POST['ordername'];}
            if (isset($_POST['ordermail'])) {$ordermail = $_POST['ordermail'];}
            if (isset($_POST['orderphone'])) {$orderphone = $_POST['orderphone'];}
            if (isset($_POST['orderarea'])) {$orderarea = $_POST['orderarea'];}

            $address = "manager@evity.ru";
            $sub = "Заказ услуги с сайта evity.ru";
            $mes = "Имя: $ordername \nE-mail: $ordermail \nТема: $sub \nНомер телефона: $orderphone \nТекст сообщения: $orderarea";
            $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$ordermail");

            if ($send == 'true'){
                echo "Сообщение отправлено, теперь Вы можете вернуться обратно и продолжить работу с <a href=\"/\">evity.ru</a>";
            }
            else{
                echo "Сообщение не отправлено, проверьте правильность заполнения полей и попробуйте снова";
            }
        ?>
    </div>
</body>
</html>