<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 4.19. ����������� ����������� ����� ���������� � ������ - ���. 314
	 */

	// �������� ���������� ���������� home � home2
	//lowering("home", "home2");
	lowering("c:/xampp/htdocs/admin", "c:/xampp/htdocs/Kuznecov_Simdaynov_PHP_Sozdanie_Web-saita_2009/Chaper_4_Hitrosti_PHP");
	//////////////////////////////////////////////////////////
	// ����������� ������� ������
	//////////////////////////////////////////////////////////
	function lowering($dirname, $dirdestination)
	{
		// ��������� ����������
		$dir = opendir($dirname);
		// ������� � ���������� � �����
		while (($file = readdir($dir)) !== false)
		{
			echo $file."<br>";
			if (is_file("$dirname/$file"))
			{
				copy("$dirname/$file.", "$dirdestination/$file");
			}
			// ���� ��� ��� ���������� - ������ �
			if (is_dir("$dirname/$file") && $file != "." && $file != "..")
			{
				// ������ ����������
				if (!mkdir($dirdestination."/".$file))
				{
					echo "Can't create $dirdestination/$file";
				}
				// �������� ���������� ������� lowering
				lowering("$dirname/$file", "$dirdestination/$file");
			}
		}
		// ��������� ����������
		closedir($dir);
	}
?>