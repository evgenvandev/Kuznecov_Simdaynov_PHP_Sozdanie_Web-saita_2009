<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 3.18. Файл security_mod.php - стр. 237
	 */
	 
	// Устанавливаем соединение с базой данных
	require_once("config.php");
	// Если пользователь не авторизовался - авторизуемся
	if(!isset($_SERVER['PHP_AUTH_USER']))
	{
		Header("WWW-Authenticate: Basic realm=\"Admin Page\"");
		Header("HTTP/1.0 401 Unauthorized");
		exit();
	}
	else
	{
		// Проверяем переменные $_SERVER['PHP_AUTH_USER']
		// и $_SERVER['PHP_AUTH_PW'], чтобы предотвратить
		// SQL-инъекцию
		if(!get_magic_quotes_gpc())
		{
			$_SERVER['PHP_AUTH_USER'] = mysql_escape_string($_SERVER['PHP_AUTH_USER']);
			$_SERVER['PHP_AUTH_PW'] = mysql_escape_string($_SERVER['PHP_AUTH_PW']);
		}
		
		$query = "SELECT pass, name FROM userslist WHERE name='{$_SERVER['PHP_AUTH_USER']}'";
		$lst = @mysql_query($query);
		// Если найдена ошибка в SQL-запросе - 
		// открываем диалоговое окно ввода пароля
		if(!$lst)
		{
			Header("WWW-Authenticate: Basic realm=\"Admin Page\"");
			Header("HTTP/1.0 401 Unauthorized");
			exit();
		}
		// Если такого пользователя нет - 
		// открываем диалоговое окно ввода пароля
		if(mysql_num_rows($lst) == 0)
		{
			Header("WWW-Authenticate: Basic realm=\"Admin Page\"");
			Header("HTTP/1.0 401 Unauthorized");
			exit();
		}
		// Если все проверки пройдены, сравниваем хэши паролей
		$pass = @mysql_fetch_array($lst);
		if(md5($_SERVER['PHP_AUTH_PW']) != $pass['pass'])
		{
			Header("WWW-Authenticate: Basic realm=\"Admin Page\"");
			Header("HTTP/1.0 401 Unauthorized");
			exit();
		}
		else
		{
			echo "Вы вошли под login-ом: ".$_SERVER['PHP_AUTH_USER']."<br>пароль: ". $_SERVER['PHP_AUTH_PW'];
			echo "<br>Ответ на запрос к таблице userslist: \$lst=".$lst;
			echo "<pre>";
			print_r($pass);
			echo "</pre>";
		}
	}
?>