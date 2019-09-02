<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 4.6. Файл gettime.php - стр. 293
	 */

	function gettime()
	{
		$part_time = explode(' ', microtime());
		$real_time = $part_time[1].substr($part_time[0], 1);
		return $real_time;
	}
?>