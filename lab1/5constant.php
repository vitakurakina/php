<?php
const FIRST = 1;
define('SECOND', 2);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Constants</title>
</head>
<body>
	<h1>Constants</h1>
	<?php

	if (defined('FIRST')) {
		echo 'constants value FIRST: ' . FIRST . '<br>';
	} else {
		echo 'Const FIRST undefined.<br>';
	}
  
	if (defined('SECOND')) {
		echo 'Constants value SECOND: ' . SECOND . '<br>';
	} else {
		echo 'Const SECOND undefined.<br>';
	}


	echo 'Current PHPs version: ' . phpversion() . '<br>'; // Вывод текущей версии PHP
	echo 'scripts directory: ' . __DIR__ . '<br>'; // Вывод директории скрипта
	?>
</body>
</html>