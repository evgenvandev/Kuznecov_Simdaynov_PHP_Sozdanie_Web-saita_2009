<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 5.19. ������ ������������� - ���. 346
	 */
	 
	// ������������� ���������� � ����� ������
	require_once("config.php");
	// ����������� ������ ���� �������������
	$query = "SELECT * FROM userslist ORDER BY name";
	$usr = mysql_query($query);
	if (!$usr)
	{
		exit ("������ - ".mysql_error());
	}
	while ($user = mysql_fetch_array($usr))
	{
		echo "<a href=user.php?id_user=$user[id_user]>$user[name]</a><br>";
	}
?>