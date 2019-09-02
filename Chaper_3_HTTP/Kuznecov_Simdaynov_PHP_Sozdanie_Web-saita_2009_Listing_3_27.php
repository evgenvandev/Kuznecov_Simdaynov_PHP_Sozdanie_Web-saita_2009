<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 3.27. Проверка, включены ли cookie - стр. 243
	 */
	 
	// Выставляем уровень обработки ошибок
	// (http://www.softtime.ru/info/articlephp.php?id_article=23)
	error_reporting(E_ALL & ~E_NOTICE);
	
	if(!isset($_GET['probe']))
	{
		// Устанавливаем cookie с именем "test"
		if(setcookie("test", "set"));
		// Отправляем заголовок переадресации на страницу, 
		// с которой будет предпринята попытка установить cookie
		header("Location: $_SERVER[PHP_SELF]?probe=set");
	}
	else
	{
		if(!isset($_COOKIE['test']))
		{
			echo "Для корректной работы приложения необходимо включить cookies";
		}
		else
		{
			echo "Cookies включены";
		}
	}
?>