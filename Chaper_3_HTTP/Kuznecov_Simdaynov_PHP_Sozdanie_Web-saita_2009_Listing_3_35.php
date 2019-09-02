<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 3.35. �������� HTTP-���������� - ���. 253
	 */

	function get_content($hostname, $path)
	{
		$line = "";
		// ������������� ����������, ��� �������� 
		// �������� � ��������� $hostname
		$fp = fsockopen($hostname, 80, $errno, $errstr, 30);
		// ��������� ���������� ��������� ����������
		if(!$fp)
		{
			echo "$errstr ($errno)<br />\n";
		}
		else
		{
			// ��������� HTTP-������ ��� �������� 
			// ��� �������
			$headers = "GET $path HTTP/1.1\r\n";
			$headers .= "Host: $hostname\r\n";
			$headers .= "Connection: Close\r\n\r\n";
			// ���������� HTTP-������ �������
			fwrite($fp, $headers);
			// �������� �����
			while(!feof($fp))
			{
				// ������ ������ �� ������ ������� �� 1024 ����� 
				// �� ��� ���, ���� �� ���������� ������ ����� �����, 
				// ������������ �������� feof()
				$line .= fgets($fp, 1024);
			}
			fclose($fp);
		}
		return $line;
	}
	
	$hostname = "www.php.net";
	$path = "/";
	// ������������� ������� ����� ������ 
	// ������� - ���� ��� �������� �� ���������, 
	// ��� �� ����� ����������
	set_time_limit(180);
	// �������� �������
	$content = get_content($hostname, $path);
	echo strstr($content, '<');
?>