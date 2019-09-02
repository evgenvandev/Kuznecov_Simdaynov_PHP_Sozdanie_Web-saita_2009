<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 1.6. Обращение к членам класса employee - стр. 13
	 */
	 
	// Подключаем объявление класса
	require_once("class.employee.php");
	
	// Объявляем объект класса employee
	$emp = new employee();
	
	// Присваиваем значения членам класса
	$emp->surname = "Борисов";
	$emp->name = "Игорь";
	$emp->patronymic = "Иванович";
	//$emp->age = 23; // Ошибка
	
	// Выводим члены класса
	echo $emp->surname." ".$emp->name." ".$emp->patronymic."<br>";
?>