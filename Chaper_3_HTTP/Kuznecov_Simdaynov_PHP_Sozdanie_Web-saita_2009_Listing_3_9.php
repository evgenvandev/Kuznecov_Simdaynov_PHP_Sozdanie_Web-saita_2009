<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 3.9. ����������� ������ - ���. 227
	 */
	 
	// ���� ����� ���������� � �����
	ob_start();
	
	// ������� ���������� ��������
	echo "Hello world";
	
	// ���������� HTTP-���������
	header("X-my-header: Hello world!");
	
	// ���������� ���������� ������ ������ �������
	ob_end_flush();
?>