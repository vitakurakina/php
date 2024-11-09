<?php
/* ЗАДАНИЕ 1
- Подключитесь к серверу MySQL, выберите базу данных
- Установите кодировку по умолчанию для текущего соединения
- 
- Проверьте, была ли корректным образом отправлена форма
- Если она была отправлена: отфильтруйте полученные данные 
  с помощью функций trim(), htmlspecialchars() и mysqli_real_escape_string(),
  сформируйте SQL-оператор на вставку данных в таблицу msgs и выполните его с помощью функции mysqli_query(). 
  После этого с помощью функции header() выполните перезапрос страницы, 
  чтобы избавиться от информации, переданной через форму
*/
$hostname = 'localhost';
$username = 'f1035909_login_db';
$password = 'vAB7p8YY';
$database = 'f1035909_login_db';
$tablename = 'msgs';
$mysqli = new mysqli($hostname, $username, $password, $database);
if($mysqli->connect_error) { die('Connect error ' . $mysqli->connect_error); }

$mysqli->set_charset('utf8');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = trim(htmlspecialchars($mysqli->real_escape_string( $_POST['name'])));
    $email = trim(htmlspecialchars($mysqli->real_escape_string( $_POST['email'])));
    $msg = trim(htmlspecialchars($mysqli->real_escape_string( $_POST['msg'])));

/*     $mysqli->execute_query(
      'INSERT INTO $tablename(name, email, msg) VALUES(?, ?, ?)',
      [$name, $email, $msg]
    ); */

    $queryINSERT = "INSERT INTO $tablename(name, email, msg) VALUES('$name', '$email', '$msg')";
    $mysqli->query($queryINSERT);
    if($mysqli->errno) { die('Error query insert: ' . $mysqli->error); }
    header('Location:'. $_SERVER['PHP_SELF']);
}

/*
ЗАДАНИЕ 3
- Проверьте, был ли запрос методом GET на удаление записи
- Если он был: отфильтруйте полученные данные,
  сформируйте SQL-оператор на удаление записи и выполните его.
  После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной методом GET
*/

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $id = intval($_GET['id']);
    // $stmt = $mysqli->prepare("DELETE FROM $tablename WHERE id = ?");
    // $stmt->bind_param('i', $id);
    // $stmt->execute();
    $queryDELETE = "DELETE FROM $tablename WHERE id = $id";
    $mysqli->query($queryDELETE);
    if($mysqli->errno) { die('Error query delete: ' . $mysqli->error); }
    header('Location:' . $_SERVER['PHP_SELF']);
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br>
<input type="text" name="name"><br>
Ваш E-mail:<br>
<input type="email" name="email"><br>
Сообщение:<br>
<textarea name="msg" cols="50" rows="5"></textarea><br>
<br>
<input type="submit" value="Добавить!">

</form>

<?php
/*
ЗАДАНИЕ 2
- Сформируйте SQL-оператор на выборку всех данных из таблицы
  msgs в обратном порядке и выполните его. Результат выборки
  сохраните в переменной.
- Закройте соединение с БД
-	С помощью функции mysqli_num_rows() получите количество рядов результата выборки и выведите его на экран
- В цикле функцией mysqli_fetch_assoc() получите очередной ряд результата выборки в виде ассоциативного массива.
  Таким образом, используя этот цикл, выведите на экран все сообщения, а также информацию
  об авторе каждого сообщения. После каджого сообщения сформируйте ссылку для удаления этой
  записи. Информацию об идентификаторе удаляемого сообщения передавайте методом GET.
*/

$querySELECT = "SELECT * FROM $tablename ORDER BY id DESC";
$resultSELECT = $mysqli->query($querySELECT) or die('Error query select: ' . $mysqli->error);

$rows = $resultSELECT->num_rows;
echo 'Записей в гостевой книге: ' . $rows . '<br>';
  while($row = $resultSELECT->fetch_assoc()){
    echo "<hr><p><b><a href='mailto:{$row['email']}'>{$row['name']}</a></b></p>";
    echo "<p>{$row['msg']}</p>";
    echo "<div align='right'><a href='gbook.php?id=" . $row['id'] . "'>Удалить</a></div>";
    // echo 'Сообщение: ' . $row['msg'] . '<br>';  
    // echo 'Автор: ' . $row['name'] . '<br>Почта: ' . $row['email'];
    // echo "<a href='gbook.php?id=" . $row['id'] . "'>Удалить</a><hr>";  
  }

$mysqli->close();
?>

</body>
</html>