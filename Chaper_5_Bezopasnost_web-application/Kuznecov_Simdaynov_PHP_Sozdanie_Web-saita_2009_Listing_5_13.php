<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 5.13. Использование функции md5() - стр. 339
	 */
	 
	$maks_password = "gfkjxrb99"; // Сохранённый пароль пользователя
	$maks_cipher = md5($maks_password); // Сохранённый хэш-код пароля
	// Пароль пользователя, вводимый при посещении странички
	$user_password = "gfkjxrb99";
	// Хэш-код пароля пользователя, вычисляемый при посещении странички
	$user_cipher = md5($user_password);
	// Если хэш-коды совпадают, то пароль верный
	if ($maks_cipher == $user_cipher)
	{
		echo "Hello, Maks"."<br>"."md5 пароля равен : ".$maks_cipher;
		echo "<br>ковш - MD5 : ".md5("ковш")."<br>";
		echo "Село - MD5 : ".md5("Село")."<br>";
		echo "Лира - MD5 : ".md5("Лира")."<br>";
		echo "Слон - MD5 : ".md5("Слон")."<br>";
		
		/*echo "Hello, Maks"."<br>"."md5 пароля равен : ".$maks_cipher;
		echo "<br>kovs - MD5 : ".md5("kovs")."<br>";
		echo "selo - MD5 : ".md5("selo")."<br>";
		echo "lira - MD5 : ".md5("lira")."<br>";
		echo "slon - MD5 : ".md5("slon")."<br>";*/
	}
	else
	{
		echo "Введён неверный пароль";
	}
?>