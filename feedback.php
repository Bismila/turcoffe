<?php
//методом POST через ajax передали //сюда данные и обрабатываем их с помощью ф-ции htmlspecialchars //если будут какие либо html тэги - они в этом случае ничему не повредят

if(isset ($_POST['name']))
$name = ($_POST['name']);
//if(isset ($_POST['email']))
//$email = htmlspecialchars($_POST['email']);
//if(isset ($_POST['sbj']))
//$sbj = htmlspecialchars($_POST['sbj']);
//if(isset ($_POST['msg']))
//$msg = htmlspecialchars($_POST['msg']);

//if($name=='' || $email=='' || $subject=='' || $message=='')
//{
//    echo 'Заполните все поля';
//    exit;//вообще выходим из кода
//}
//отправка ответа с сервера (отсюда)
/*зашифруем наше сообщение*/
//$subject = "=?utf-8?B?".base64_encode($subject)."?=";
//$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
//если смс отправилось
if($name != "")
////if(mail("bismiladance@gmail.com",$sbj, $msg." ".$name))//тут вставляем свой адрес - если мэил отправляют нам
{
//выводим пользователю смс что смс отправлено
	$str = $name;
	echo $str;
//echo json_encode($str);//"Сообщение отправлено";
// echo "<div id=\"msgShow\"".$str."</div>";
}
else //если ф-ция не сработала то отправляем смс
{
    $str = "Сообщение не отправлено";
    echo ($str);//"Сообщение не отправлено";
    //echo "<div id=\"msgShow\"".$str."</div>";

}
?>