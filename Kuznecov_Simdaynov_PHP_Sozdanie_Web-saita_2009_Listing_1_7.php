<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 1.7. Объявление метода класса - стр. 15
	 */
	 
	class cls_mth
	{
		public function show_message()
		{
			echo "Hello world!";
		}
	}
	
	$obj = new cls_mth();
	$obj->show_message();
?>