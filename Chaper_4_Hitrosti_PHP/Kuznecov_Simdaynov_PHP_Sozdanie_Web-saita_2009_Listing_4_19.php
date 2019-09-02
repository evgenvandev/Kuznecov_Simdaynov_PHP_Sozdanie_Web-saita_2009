<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 4.19. Копирование содержимого одной директории в другую - стр. 314
	 */

	// Копируем содержимое директории home в home2
	//lowering("home", "home2");
	lowering("c:/xampp/htdocs/admin", "c:/xampp/htdocs/Kuznecov_Simdaynov_PHP_Sozdanie_Web-saita_2009/Chaper_4_Hitrosti_PHP");
	//////////////////////////////////////////////////////////
	// Рекурсивная функция спуска
	//////////////////////////////////////////////////////////
	function lowering($dirname, $dirdestination)
	{
		// Открываем директорию
		$dir = opendir($dirname);
		// Выводим её содержимое в цикле
		while (($file = readdir($dir)) !== false)
		{
			echo $file."<br>";
			if (is_file("$dirname/$file"))
			{
				copy("$dirname/$file.", "$dirdestination/$file");
			}
			// Если это имя директория - создаём её
			if (is_dir("$dirname/$file") && $file != "." && $file != "..")
			{
				// Создаём директорию
				if (!mkdir($dirdestination."/".$file))
				{
					echo "Can't create $dirdestination/$file";
				}
				// Вызываем рекурсивно функцию lowering
				lowering("$dirname/$file", "$dirdestination/$file");
			}
		}
		// Закрываем директорию
		closedir($dir);
	}
?>