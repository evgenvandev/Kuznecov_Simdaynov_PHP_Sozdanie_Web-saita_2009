<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 1.8. ������������� �������� ������� ��� ������� � ��������� ����� ������ - ���. 16
	 */
	 
	class employee
	{
		// �������� �����
		public $surname;
		public $name;
		public $patronymic;
		
		// �������� ������
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
		
		// �������� �����
		private $age;
	}
?>