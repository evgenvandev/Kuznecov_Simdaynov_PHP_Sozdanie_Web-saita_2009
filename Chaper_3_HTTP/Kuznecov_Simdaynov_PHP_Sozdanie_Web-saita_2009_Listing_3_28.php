<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 3.28. �������� ������ � ��������������� ������ $_SESSION - ���. 246
	 */
	 
	// ���������� ������
	session_start();
	// �������� �������� � ������
	$_SESSION['name'] = "value";
	// �������� ������ � ������
	$arr = array("first", "second", "third");
	$_SESSION['arr'] = $arr;
	// ������� ������ �� ������ ��������
	echo "<a href=other.php>������ ��������</a>"
?>