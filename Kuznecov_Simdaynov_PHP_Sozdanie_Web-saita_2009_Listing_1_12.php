<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 1.12. Вызов конструктора внутри класса и из внешнего кода - стр. 25
	 */
	 
	class cls
	{
		private $var;
		private $count = 0;
		public function __construct()
		{
			$this->count++;
			echo "Вызов конструктора $this->count-й раз<br>";
			$this->var = 100;
		}
		
		public function anarhist()
		{
			$this->__construct();
		}
	}
	
	$obj = new cls();
	$obj->__construct();
	$obj->anarhist();
?>