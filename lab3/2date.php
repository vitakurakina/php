<?php
	$now = time();
	
	$birthday = strtotime(date("Y") . "-11-10");
	
	if ($birthday < $now) {
		$birthday = strtotime('+1 year', $birthday);
	}
	
	$hour = getdate()['hours'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php

	if ($hour >= 0 && $hour < 6) {
		$welcome = 'Доброй ночи';
	} elseif ($hour >= 6 && $hour < 12) {
		$welcome = 'Доброе утро';
	} elseif ($hour >= 12 && $hour < 18) {
		$welcome = 'Добрый день';
	} elseif ($hour >= 18 && $hour < 23) {
		$welcome = 'Добрый вечер';
	} else {
		$welcome = 'Доброй ночи';
	}

	echo "<p>$welcome</p>";
	
	setlocale(LC_TIME, 'ru_RU.UTF-8');
	
	$current_date = strftime("Сегодня %e %B %Y года, %A %H:%M:%S", $now);
	echo "<p>$current_date</p>";

	/*$formatter = datefmt_create(
        'ru_RU',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Europe/Moscow',
        IntlDateFormatter::GREGORIAN,
        'Сегодня d MMMM Y года, EEEE HH:mm:ss'
    );
    echo "<p>" . datefmt_format($formatter, $now) . "</p>";*/ //у меня intl расширение работать не хочет
	
	$time_until_birthday = $birthday - $now;
	
	$days = floor($time_until_birthday / 86400);
	$hours = floor(($time_until_birthday % 86400) / 3600);
	$minutes = floor(($time_until_birthday % 3600) / 60);
	$seconds = $time_until_birthday % 60;
	
	echo "<p>До моего дня рождения осталось $days дней, $hours часов, $minutes минут и $seconds секунд.</p>";
	?>
</body>
</html>
