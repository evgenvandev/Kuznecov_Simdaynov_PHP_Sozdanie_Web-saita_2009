<form method=post>
<input type=text name=number value="8">
<input type=submit value="������������">
</form><br><br>
<?php
	/*
		�������� �.�., �������� �.�. - PHP. �������� �������� Web-������ (2-� �������) - 2009
		������� 5.17. ��������� ������� - ���. 344
	 */
	 
	// �������� $number ��������� ����������
	// �������� � ������
	echo htmlspecialchars(generate_password($_POST['number']));
	
	function generate_password($number)
	{
		$arr = array('a', 'b', 'c', 'd', 'e', 'f', 
					'g', 'h', 'i', 'j', 'k', 'l', 
					'm', 'n', 'o', 'p', 'q', 'r', 's', 
					't', 'u', 'v', 'w', 'x', 'y', 'z', 
					'A', 'B', 'C', 'D', 'E', 'F', 
					'G', 'H', 'I', 'J', 'K', 'L', 
					'M', 'N', 'O', 'P', 'Q', 'R', 'S', 
					'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
					'1', '2', '3', '4', '5', '6', 
					'7', '8', '9', '0', '.', ',', 
					'(', ')', '[', ']', '!', '?', 
					'&', '^', '%', '@', '*', '$', 
					'<', '>', '/', '|', '+', '-', 
					'{', '}', '`', '~');
		// ���������� ������
		$pass = "";
		for ($i = 0; $i < $number; $i++)
		{
			// ��������� ��������� ������ �������
			$index = rand(0, count($arr) - 1);
			$pass .= $arr[$index];
		}
		return $pass;
	}
?>