<?php
/*
ЗАДАНИЕ 1
- Инициализируйте переменную для подсчета количества посещений
- Если соответствующие данные передавались через куки
  сохраняйте их в эту переменную 
- Нарастите счетчик посещений
- Инициализируйте переменную для хранения значения последнего посещения страницы
- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную.
  Для фильтрации используйте функции trim(), htmlspecialchars()
- С помощью функции setcookie() установите соответствующие куки.  Задайте время хранения куки 1 сутки. 
  Для задания времени последнего посещения страницы используйте функцию date()
*/
$visits = 0;
if(isset($_COOKIE['visits'])){
  $visits = (int)$_COOKIE['visits'];
}
$visits += 1;

$lastVisit = '';
if(isset($_COOKIE['lastVisit'])){
    $lastVisit = htmlspecialchars(trim($_COOKIE['lastVisit']));
}
setcookie('lastVisit', date('d-m-Y H:i:s'), time()+(60*60*24));
setcookie('visits', $visits, time() + (60 * 60 * 24));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Последний визит</title>
</head>
<body>

<h1>Последний визит</h1>

<?php
/*
ЗАДАНИЕ 2
- Выводите информацию о количестве посещений и дате последнего посещения
*/
if($visits > 1){
  echo "Вы зашли на страницу $visits раз <br>";
}
else {
  echo 'Добро пожаловать! <br>';
}
echo "Последнее посещение: $lastVisit <br>";

// echo "Количество посещений: $vists\tдата последнего посещения: $lastVisit";

?>

</body>
</html>