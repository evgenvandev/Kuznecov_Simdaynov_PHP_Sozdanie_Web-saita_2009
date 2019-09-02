<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 4.7. Профилируем различные способы преобразования типов - стр. 293
	 */

	include "gettime.php";
	$var = "5";
	
	// Профилируем преобразование типа с помощью функции settype()
	$start_time = gettime();
	@settype($var, integer);
	$stop_time = gettime();
	$diff_time = bcsub($stop_time, $start_time, 6);
	echo ("Преобразование типа функцией settype: ".$diff_time."<br>");
	
	// Профилируем преобразование типа в стиле C
	$start_time = gettime();
	$var = (int)$var;
	$stop_time = gettime();
	$diff_time = bcsub($stop_time, $start_time, 6);
	echo ("Преобразование типа в стиле C : ".$diff_time."<br>");
?>