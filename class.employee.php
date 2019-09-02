<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 1.8. Использование открытых методов для доступа к закрытому члену класса - стр. 16
	 */
	 
	class employee
	{
		// Открытые члены
		public $surname;
		public $name;
		public $patronymic;
		
		// Открытые методы
		public function get_age()
		{
			return $this->age;
		}
		
		public function set_age($val)
		{
			$val = intval($val);
			if($val >= 18 && $val <= 65)
			{
				$this->age = $val;
				return true;
			}
			else return false;
		}
		
		public function get_info()
		{
			return $this->surname." ".$this->name." ".$this->patronymic;
		}
		
		public function get_full_info()
		{
			return "{$this->get_info()} ({$this->get_age()})";
		}
		
		// Закрытые члены
		private $age;
	}
?>