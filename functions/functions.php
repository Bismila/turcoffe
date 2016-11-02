<?php
require_once "connect.php";
//берет из БД наши статьи, а мы потом будем выводить их на экран
function getArticles($limit){
	global $link;
	connectDBTurcoffee();
	$result = $mysqli->query("SELECT * FROM 'articles'
							ORDER BY 'articles_id' DESC
							LIMIT $limit");
	//тут надо закрыть БД
	return resultToArray($result);
}
function resultToArray($result){
	$arr = array();
	while(($row == $result->fetch_assoc()) != false)//пока в массиве кот-й мы только что сформировали будут данные мы будем его перебирать
	{
		$arr[]=$row;
	}
	return $arr;
}
?>