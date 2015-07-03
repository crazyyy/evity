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
            if (isset($_POST['backcallname'])) {$backcallname = $_POST['backcallname'];}
            if (isset($_POST['backcallmail'])) {$backcallmail = $_POST['backcallmail'];}
            if (isset($_POST['backcallphone'])) {$backcallphone = $_POST['backcallphone'];}
            if (isset($_POST['backcallarea'])) {$backcallarea = $_POST['backcallarea'];}

            $address = "manager@evity.ru";
            $sub = "Обратный звонок с сайта evity.ru";
            $mes = "Имя: $backcallname \nE-mail: $backcallmail \nТема: $sub \nНомер телефона: $backcallphone \nТекст сообщения: $backcallarea";
            $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$backcallmail");

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