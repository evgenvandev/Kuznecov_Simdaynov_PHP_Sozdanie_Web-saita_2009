<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 1.13. Передача параметров конструктору - стр. 26
	 */
	 
	class point
	{
		public function __construct($x, $y)
		{
			$this->X = $x;
			$this->Y = $y;
		}
		
		public function get_x()
		{
			return $this->X;
		}
		
		public function get_y()
		{
			return $this->Y;
		}
		
		private $X;
		private $Y;
	}
?>