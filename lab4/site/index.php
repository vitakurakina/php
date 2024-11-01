<?php
$hour = date('G'); // Получаем текущий час в формате от 0 до 23

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

$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'] ?? '')));
switch($id){ 
	case 'about':
		$title = 'О сайте';
		$header = 'О нашем сайте';
		break;
	case 'contact':
		$title = 'Контакты';
		$header = 'Обратная связь';
		break;
	case 'table':
		$title = 'Таблица умножения';
		$header = 'Таблица умножения';
		break;
	case 'calc':
		$title = 'Он-лайн калькулятор';
		$header = 'Калькулятор';
		break; 
}
?>
<?php
include 'inc/lib.inc.php';
include 'inc/data.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>

    <?php include 'inc/top.inc.php'; ?>
  </header>

  <section>
  <h1><?=$header?></h1>
    <?php include 'inc/index.inc.php'; ?>
  </section>

  <nav>
    <?php include 'inc/menu.inc.php'; ?>
  </nav>

  <footer>
    <?php include 'inc/bottom.inc.php'; ?>
  </footer>
</body>
</html>
