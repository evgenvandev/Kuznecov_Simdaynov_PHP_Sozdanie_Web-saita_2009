<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 5.13. ������������� ������� md5() - ���. 339
	 */
	 
	$maks_password = "gfkjxrb99"; // ���������� ������ ������������
	$maks_cipher = md5($maks_password); // ���������� ���-��� ������
	// ������ ������������, �������� ��� ��������� ���������
	$user_password = "gfkjxrb99";
	// ���-��� ������ ������������, ����������� ��� ��������� ���������
	$user_cipher = md5($user_password);
	// ���� ���-���� ���������, �� ������ ������
	if ($maks_cipher == $user_cipher)
	{
		echo "Hello, Maks"."<br>"."md5 ������ ����� : ".$maks_cipher;
		echo "<br>���� - MD5 : ".md5("����")."<br>";
		echo "���� - MD5 : ".md5("����")."<br>";
		echo "���� - MD5 : ".md5("����")."<br>";
		echo "���� - MD5 : ".md5("����")."<br>";
		
		/*echo "Hello, Maks"."<br>"."md5 ������ ����� : ".$maks_cipher;
		echo "<br>kovs - MD5 : ".md5("kovs")."<br>";
		echo "selo - MD5 : ".md5("selo")."<br>";
		echo "lira - MD5 : ".md5("lira")."<br>";
		echo "slon - MD5 : ".md5("slon")."<br>";*/
	}
	else
	{
		echo "����� �������� ������";
	}
?>