<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 3.20. ������� ���������� ��������� � �������� - ���. 240
	 */
	 
	// ���������� ������� ��������� ������
	// (http://www.softtime.ru/info/articlephp.php?id_article=23)
	error_reporting(E_ALL & ~E_NOTICE);
	
	// ����������� �������� cookie
	$_COOKIE['counter']++;
	// ������������� cookie
	setcookie("counter", $_COOKIE['counter']);
	// ������� �������� cookie
	echo "�� �������� ��� �������� $_COOKIE[counter] ���";
?>