<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 1.12. ����� ������������ ������ ������ � �� �������� ���� - ���. 25
	 */
	 
	class cls
	{
		private $var;
		private $count = 0;
		public function __construct()
		{
			$this->count++;
			echo "����� ������������ $this->count-� ���<br>";
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