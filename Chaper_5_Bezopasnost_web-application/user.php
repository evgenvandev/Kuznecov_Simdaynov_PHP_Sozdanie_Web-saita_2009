<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 5.20. ���������� ����� user.php - ���. 347
	 */
	 
	// ������������� ���������� � ����� ������
	require_once("config.php");
	// ����������� ������ ���� �������������
	$query = "SELECT * FROM userslist WHERE id_user = $_GET[id_user]";
	$usr = mysql_query($query);
	if (!$usr)
	{
		exit ("������ - ".mysql_error());
	}
	$user = mysql_fetch_array($usr);
	echo "��� ������������ - $user[name]<br>";
	if (!empty($user['email'])) echo "e-mail - $user[email]<br>";
	if (!empty($user['url'])) echo "URL - $user[url]<br>";
?>