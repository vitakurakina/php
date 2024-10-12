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
		echo 'Значение константы FIRST: ' . FIRST . '<br>';
	} else {
		echo 'Константа FIRST не определена.<br>';
	}
  
	if (defined('SECOND')) {
		echo 'Значение константы SECOND: ' . SECOND . '<br>';
	} else {
		echo 'Константа SECOND не определена.<br>';
	}


	echo 'Текущая версия PHP: ' . phpversion() . '<br>'; // Вывод текущей версии PHP
	echo 'Директория скрипта: ' . __DIR__ . '<br>'; // Вывод директории скрипта
	?>
</body>
</html>