<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 3.7. ������������� ������� headers_list() - ���. 224
	 */
	 
	header("X-my-header: Hello world!");
	
	$arr = headers_list();
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
?>