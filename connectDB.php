<?php
$link = false;
//подключаемся к базе данных users
function connectDBTurcoffee(){
	global $link;
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
}
function closeDBTurcoffee(){
	global $link;

	$link->close();
}
//mysql_select_db($db_name);

//echo "<p>Вы подключились к MySQL!</p>";
?>