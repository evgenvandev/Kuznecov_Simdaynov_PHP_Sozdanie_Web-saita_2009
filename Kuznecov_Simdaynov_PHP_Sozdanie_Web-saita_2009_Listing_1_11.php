<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 1.11. Использование конструктора - стр. 24
	 */
	 
	class cls
	{
		private $var;
		public function __construct()
		{
			echo "Вызов конструктора<br>";
			$this->var = 100;
		}
	}
	
	$obj = new cls();
	
	// Выводим структуру объекта
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
?>