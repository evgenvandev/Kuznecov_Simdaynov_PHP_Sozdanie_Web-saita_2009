<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 1.6. ��������� � ������ ������ employee - ���. 13
	 */
	 
	// ���������� ���������� ������
	require_once("class.employee.php");
	
	// ��������� ������ ������ employee
	$emp = new employee();
	
	// ����������� �������� ������ ������
	$emp->surname = "�������";
	$emp->name = "�����";
	$emp->patronymic = "��������";
	//$emp->age = 23; // ������
	
	// ������� ����� ������
	echo $emp->surname." ".$emp->name." ".$emp->patronymic."<br>";
?>