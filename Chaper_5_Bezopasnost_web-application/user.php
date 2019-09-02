<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 5.20. Содержимое файла user.php - стр. 347
	 */
	 
	// Устанавливаем соединение с базой данных
	require_once("config.php");
	// Запрашиваем список всех пользователей
	$query = "SELECT * FROM userslist WHERE id_user = $_GET[id_user]";
	$usr = mysql_query($query);
	if (!$usr)
	{
		exit ("Ошибка - ".mysql_error());
	}
	$user = mysql_fetch_array($usr);
	echo "Имя пользователя - $user[name]<br>";
	if (!empty($user['email'])) echo "e-mail - $user[email]<br>";
	if (!empty($user['url'])) echo "URL - $user[url]<br>";
?>