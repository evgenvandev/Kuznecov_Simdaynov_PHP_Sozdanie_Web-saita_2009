<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 4.6. ���� gettime.php - ���. 293
	 */

	function gettime()
	{
		$part_time = explode(' ', microtime());
		$real_time = $part_time[1].substr($part_time[0], 1);
		return $real_time;
	}
?>