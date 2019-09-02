<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 3.6. Использование функции headers_sent() - стр. 223
	 */
	 
	echo "Hello<br>";
	
	if(!headers_sent($filename, $linenum))
	{
		header('Location: http://www.softtime.biz/');
		exit;
	}
	else
	{
		echo "Передача HTTP-документа начата в файле 
			$filename в строке $linenum. Поэтому 
			перенаправление на другой ресурс невозможно.";
		exit;
	}
?>