<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Главная страница";
	include_once "blocks/head.php";
	//$articles = getArticles();
	?>
	
</head>
<body>
	<!--шапка сайта-->
	<?php
	require_once "blocks/header.php";
	?>

	<!--основная часть-->
	<div id="wrapper">
		<!--левая колонка - статьи и основная часть-->
		<div id="leftCol">
			<div id="bigArticle">
				<img src="img/articles/allRoads.jpg" alt="image" class="img_Hello" />
				<h3>Приветствую всех посетителей моего сайта «Кофе по-турецки».</h3>
				<p>Ваш возраст и состояние здоровья позволяют Вам пить кофе?</p>
				<p>А строить бизнес на этой привычке миллионов людей? Если Вы два раза ответили утвердительно, этот сайт для Вас! И, ну-таки, здравствуйте! </p>
				<p>
					Давайте знакомиться.
					<br />
					<a href="article.php">
						<div class="more">Далее</div>
					</a>
			</div>
			<div class="clear">
				<br />
			</div>
			<div class="article">
				<img src="img/articles/77_coffee_facts.jpg" alt="image" class="img_Hello" />
				<h3>75 кофе-фактов</h3>
				<p>
					«Кофе должен быть черным как ад, сильным как смерть, сладким как любовь» — турецкая поговорка.
					<p>52% американцев регулярно пьют кофе.</p>
					<p>1 акр (~ 40 соток) кофейных деревьев могут дать до 5 тонн кофейных зерен, которые после обработки превратятся в тонну молотого кофе.</p>
					<a href="article.php">
						<div class="more">Далее</div>
					</a>
			</div>
			<div class="article">
				<img src="img/articles/5_diseases.jpg" alt="image" class="img_Hello" />
				<h3>5 болезней от которых помогает уберечься ароматный кофе...</h3>
				<p>
					Экспертами Гарвардского университета было проведено крупномасштабное «кофейное» исследование:
				в течение нескольких лет изучали состояние здоровья более 130 тысяч добровольцев любителей кофе.
				</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
		</div>
		<!--правая колонка - меню и банера-->
		<?php
		require_once "blocks/rightBlock.php";
		?>
	</div>
	<!--подвал сайта - footer-->
	<?php
	require_once "blocks/footer.php";
    ?>

</body>
</html>