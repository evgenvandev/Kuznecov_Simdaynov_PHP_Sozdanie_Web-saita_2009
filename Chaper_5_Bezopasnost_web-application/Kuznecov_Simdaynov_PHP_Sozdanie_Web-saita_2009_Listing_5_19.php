<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 5.19. Список пользователей - стр. 346
	 */
	 
	// Устанавливаем соединение с базой данных
	require_once("config.php");
	// Запрашиваем список всех пользователей
	$query = "SELECT * FROM userslist ORDER BY name";
	$usr = mysql_query($query);
	if (!$usr)
	{
		exit ("Ошибка - ".mysql_error());
	}
	while ($user = mysql_fetch_array($usr))
	{
		echo "<a href=user.php?id_user=$user[id_user]>$user[name]</a><br>";
	}
?>