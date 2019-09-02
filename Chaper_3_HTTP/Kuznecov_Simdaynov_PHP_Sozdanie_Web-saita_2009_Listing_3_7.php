<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 3.7. Использование функции headers_list() - стр. 224
	 */
	 
	header("X-my-header: Hello world!");
	
	$arr = headers_list();
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
?>