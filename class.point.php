<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 1.13. �������� ���������� ������������ - ���. 26
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