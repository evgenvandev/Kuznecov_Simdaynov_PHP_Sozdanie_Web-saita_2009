<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 2.125. ��������� ���������� � MySQL-�������� (config.php) - ���. 207
	 */
	 
	// ����� ������� MySQL
	$dblocation = "localhost";
	// ��� ���� ������ �� �������� ��� ��������� ������
	$dbname = "forum";
	// ��� ������������ ���� ������
	$dbuser = "root";
	// � ��� ������
	$dbpasswd = "sql12345";
	
	// ������������� ���������� � ����� ������
	$dbcnx = @mysql_connect($dblocation, $dbuser, $dbpasswd);
	if (!$dbcnx) {
		exit("<P>� ��������� ������ ������ ���� ������ �� ��������, 
		������� ���������� ����������� �������� ����������.</P>");
	}
	// �������� ���� ������
	if (!@mysql_select_db($dbname, $dbcnx)) {
		exit("<P>� ��������� ������ ���� ������ �� ��������, 
		������� ���������� ����������� �������� ����������.</P>");
	}
	
	// ������������� ��������� ����������. ������� ������� �� ���������, 
	// � ������� ������ ����� ������������ MySQL-�������
	@mysql_query("SET NAMES 'cp1251'");
	echo("��������� ���������� � ���� MySQL: <i>Windows-1251</i><br>");
?>