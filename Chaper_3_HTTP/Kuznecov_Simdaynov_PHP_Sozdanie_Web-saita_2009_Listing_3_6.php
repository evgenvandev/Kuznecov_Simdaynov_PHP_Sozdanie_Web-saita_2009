<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 3.6. ������������� ������� headers_sent() - ���. 223
	 */
	 
	echo "Hello<br>";
	
	if(!headers_sent($filename, $linenum))
	{
		header('Location: http://www.softtime.biz/');
		exit;
	}
	else
	{
		echo "�������� HTTP-��������� ������ � ����� 
			$filename � ������ $linenum. ������� 
			��������������� �� ������ ������ ����������.";
		exit;
	}
?>