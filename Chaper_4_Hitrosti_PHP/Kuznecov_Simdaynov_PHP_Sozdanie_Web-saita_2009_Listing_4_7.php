<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 4.7. ����������� ��������� ������� �������������� ����� - ���. 293
	 */

	include "gettime.php";
	$var = "5";
	
	// ����������� �������������� ���� � ������� ������� settype()
	$start_time = gettime();
	@settype($var, integer);
	$stop_time = gettime();
	$diff_time = bcsub($stop_time, $start_time, 6);
	echo ("�������������� ���� �������� settype: ".$diff_time."<br>");
	
	// ����������� �������������� ���� � ����� C
	$start_time = gettime();
	$var = (int)$var;
	$stop_time = gettime();
	$diff_time = bcsub($stop_time, $start_time, 6);
	echo ("�������������� ���� � ����� C : ".$diff_time."<br>");
?>