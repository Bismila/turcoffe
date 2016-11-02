<?php
require_once "connectDB.php";
//берет из БД наши статьи, а мы потом будем выводить их на экран
function getArticles(){

//    $news = mysql_query("SELECT * FROM news";
//while($news_result = mysql_fetch_assoc($news))
//{
//        echo "$news_result[title_news]";
//        echo "<br>";
//        echo "$news_result[text_news]";
//}




	global $link;
	connectDBTurcoffee();
	$result = $link->query("SELECT * FROM articles
							ORDER BY articles_id DESC
							");
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