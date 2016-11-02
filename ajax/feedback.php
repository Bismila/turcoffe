<?php
header("Content-type: text/html; charset=UTF-8");
//методом POST через ajax передали //сюда данные и обрабатываем их с помощью ф-ции htmlspecialchars //если будут какие либо html тэги - они в этом случае ничему не повредят
//if(isset($_POST['done']))
if(isset($_POST['users_id']))
	$users_id = htmlspecialchars($_POST['users_id']);
if(isset ($_POST['users_name']))
	$users_name = htmlspecialchars($_POST['users_name']);
if(isset ($_POST['users_email']))
	$users_email = htmlspecialchars($_POST['users_email']);
if(isset ($_POST['users_sbj']))
	$users_sbj = htmlspecialchars($_POST['users_sbj']);
if(isset ($_POST['users_msg']))
	$users_msg = htmlspecialchars($_POST['users_msg']);

$to = "bismiladance@gmail.com";
if(mail($to, $users_sbj, $users_msg))
{
	error_reporting(0);
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = '';
	$db_name = 'turcoffee';
	$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$link)
	{
		die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
	}
	mysqli_query($link, "SET NAMES utf8");
	if($link->query("INSERT INTO users(users_id, users_name, users_email, users_sbj, users_msg)
	                     VALUES ('$users_id','$users_name', '$users_email', '$users_sbj', '$users_msg')"))
	{
		$str = "Сообщение отправлено";
		echo "<div id='all_send-msg'><a href='../index.php'>".$str."</a></div>";
	}
}
else
{
	$str = "Сообщение не отправлено";
	echo $str;
}

?>