<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 3.27. ��������, �������� �� cookie - ���. 243
	 */
	 
	// ���������� ������� ��������� ������
	// (http://www.softtime.ru/info/articlephp.php?id_article=23)
	error_reporting(E_ALL & ~E_NOTICE);
	
	if(!isset($_GET['probe']))
	{
		// ������������� cookie � ������ "test"
		if(setcookie("test", "set"));
		// ���������� ��������� ������������� �� ��������, 
		// � ������� ����� ����������� ������� ���������� cookie
		header("Location: $_SERVER[PHP_SELF]?probe=set");
	}
	else
	{
		if(!isset($_COOKIE['test']))
		{
			echo "��� ���������� ������ ���������� ���������� �������� cookies";
		}
		else
		{
			echo "Cookies ��������";
		}
	}
?>