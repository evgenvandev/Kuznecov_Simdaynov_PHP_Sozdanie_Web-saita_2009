<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 3.20. Подсчёт количества обращений к странице - стр. 240
	 */
	 
	// Выставляем уровень обработки ошибок
	// (http://www.softtime.ru/info/articlephp.php?id_article=23)
	error_reporting(E_ALL & ~E_NOTICE);
	
	// Увеличиваем значение cookie
	$_COOKIE['counter']++;
	// Устанавливаем cookie
	setcookie("counter", $_COOKIE['counter']);
	// Выводим значение cookie
	echo "Вы посетили эту страницу $_COOKIE[counter] раз";
?>