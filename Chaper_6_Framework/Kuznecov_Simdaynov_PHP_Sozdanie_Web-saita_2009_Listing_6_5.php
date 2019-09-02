<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 6.4. ���������� HTML-����� (���� handler.php) - ���. 376
	 */
	
	// ���������� HTML-�����
	$error = array();
	if (!empty($_POST))
	{
		// ���� ���� first �� ���������, ������� ��������� 
		// �� ������
		if (empty($_POST['first'])) $error[] = "��������� ���� �� ���������";
		
		// ���� ��� ������, �������� ��������� ������
		if (empty($error))
		{
			// ��������� ���� text.txt �� ��������
			$fd = fopen("text.txt", "a");
			if (!$fd) exit("���������� ������� ����");
			// ���������� �������� ������������� ������ 
			// � ��������� ����
			fwrite($fd, "$_POST[first]\r\n");
			// ��������� ����
			fclose($fd);
			// ����������� ������� ��������
			@header("Location: $_SERVER[PHP_SELF]");
			// ������������� ������ �������, ����� ����� 
			// ��������������� �� ��������� HTML-�����
			exit();
		}
	}
	
	// ������� ��������� �� �������, ���� ��� �������
	if (!empty($error))
	{
		foreach($error as $err)
		{
			echo "<span style=\"color:red\">$err</span><br>";
		}
	}
	
	// HTML-�����
?>
<form method=post>
  <input type=text name=first>
  <input type=submit value="���������">
</form>