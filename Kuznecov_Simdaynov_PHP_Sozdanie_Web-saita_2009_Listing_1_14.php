<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 1.12. ����� ������������ ������ ������ � �� �������� ���� - ���. 25
	 */
	 
	// ���������� ���������� ������ point
	require_once("class.point.php");
	//$obj = new point(); // ����� ��������������
	$obj = new point(10, 20);
	echo $obj->get_x()." ".$obj->get_y(); // 10 20
?>