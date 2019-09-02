<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 3.33. Пример использования функции fsockopen() - стр. 250
	 */

	function get_content($hostname, $path)
	{
		$line = "";
		// Устанавливаем соединение, имя которого 
		// передано в параметре $hostname
		$fp = fsockopen($hostname, 80, $errno, $errstr, 30);
		// Проверяем успешность установки соединения
		if(!$fp)
		{
			echo "$errstr ($errno)<br />\n";
		}
		else
		{
			// Формируем HTTP-запрос для передачи 
			// его серверу
			$headers = "GET $path HTTP/1.1\r\n";
			$headers .= "Host: $hostname\r\n";
			$headers .= "Connection: Close\r\n\r\n";
			// Отправляем HTTP-запрос серверу
			fwrite($fp, $headers);
			// Получаем ответ
			while(!feof($fp))
			{
				// Чтение ответа из сокета блоками по 1024 байта 
				// до тех пор, пока не встретится символ конца файла, 
				// определяемый функцией feof()
				$line .= fgets($fp, 1024);
			}
			fclose($fp);
		}
		return $line;
	}
	
	$hostname = "www.php.net";
	$path = "/";
	// Устанавливаем большее время работы 
	// скрипта - пока вся страница не загружена, 
	// она не будет отображена
	set_time_limit(180);
	// Вызываем функцию
	echo get_content($hostname, $path);
?>