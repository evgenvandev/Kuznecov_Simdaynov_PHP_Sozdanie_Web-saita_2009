<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 1.11. ������������� ������������ - ���. 24
	 */
	 
	class cls
	{
		private $var;
		public function __construct()
		{
			echo "����� ������������<br>";
			$this->var = 100;
		}
	}
	
	$obj = new cls();
	
	// ������� ��������� �������
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
?>