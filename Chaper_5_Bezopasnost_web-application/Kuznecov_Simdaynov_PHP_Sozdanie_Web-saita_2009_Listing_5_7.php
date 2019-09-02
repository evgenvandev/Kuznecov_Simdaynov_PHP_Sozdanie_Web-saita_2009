<form method=post>
	<input size=60 type=text name=name value=<?= $_POST['name']; ?>>
	<input type=submit value='Проверить'>
</form><br>
<?php
	/*
		Кузнецов М.В., Симдянов И.В. - PHP. Практика создания Web-сайтов (2-е издание) - 2009
		Листинг 5.7. Проверка корректности адреса электронной почты - стр. 331
	 */
	 
	// Обработчик HTML-формы
	if (isset($_POST['name']))
	{
		if (preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $_POST['name']))
		{
			echo "e-mail верен";
		}
		else
		{
			echo "e-mail не верен";
		}
	}
?>