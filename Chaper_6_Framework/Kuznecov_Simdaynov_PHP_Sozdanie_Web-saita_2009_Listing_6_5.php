<?php
	/*
		Êóçíåöîâ Ì.Â., Ñèìäÿíîâ È.Â. - PHP. Ïğàêòèêà ñîçäàíèÿ Web-ñàéòîâ (2-å èçäàíèå) - 2009
		Ëèñòèíã 6.4. Îáğàáîò÷èê HTML-ôîğìû (ôàéë handler.php) - ñòğ. 376
	 */
	
	// îáğàáîò÷èê HTML-ôîğìû
	$error = array();
	if (!empty($_POST))
	{
		// Åñëè ïîëå first íå çàïîëíåíî, âûâîäèì ñîîáùåíèå 
		// îá îøèáêå
		if (empty($_POST['first'])) $error[] = "Òåêñòîâîå ïîëå íå çàïîëíåíî";
		
		// Åñëè íåò îøèáîê, íà÷èíàåì îáğàáîòêó äàííûõ
		if (empty($error))
		{
			// Îòêğûâàåì ôàéë text.txt íà äîçàïèñü
			$fd = fopen("text.txt", "a");
			if (!$fd) exit("Íåâîçìîæíî îòêğûòü ôàéë");
			// Çàïèñûâàåì ââåä¸ííóş ïîëüçîâàòåëåì ñòğîêó 
			// â òåêñòîâûé ôàéë
			fwrite($fd, "$_POST[first]\r\n");
			// Çàêğûâàåì ôàéë
			fclose($fd);
			// Ïåğåãğóæàåì òåêóùóş ñòğàíèöó
			@header("Location: $_SERVER[PHP_SELF]");
			// Îñòàíàâëèâàåì ğàáîòó ñêğèïòà, ÷òîáû ïîñëå 
			// ïåğåíàïğàâëåíèÿ íå ãğóçèëàñü HTML-ôîğìà
			exit();
		}
	}
	
	// Âûâîäèì ñîîáùåíèÿ îá îøèáêàõ, åñëè îíè èìåşòñÿ
	if (!empty($error))
	{
		foreach($error as $err)
		{
			echo "<span style=\"color:red\">$err</span><br>";
		}
	}
	
	// HTML-ôîğìà
?>
<form method=post>
  <input type=text name=first>
  <input type=submit value="îòïğàâèòü">
</form>