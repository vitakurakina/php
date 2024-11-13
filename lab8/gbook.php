<?php
require_once 'config.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_error) {
    die('Connect error ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim(htmlspecialchars($mysqli->real_escape_string($_POST['name'])));
    $email = trim(htmlspecialchars($mysqli->real_escape_string($_POST['email'])));
    $msg = trim(htmlspecialchars($mysqli->real_escape_string($_POST['msg'])));

    // Проверка на пустые поля
    if (empty($name)) {
        $errors['name'] = "Please fill out this field";
    }
    if (empty($email)) {
        $errors['email'] = "Please fill out this field";
    }
    if (empty($msg)) {
        $errors['msg'] = "Please fill out this field";
    }

    if (empty($errors)) {
        $queryINSERT = "INSERT INTO " . DB_TABLE . "(name, email, msg) VALUES('$name', '$email', '$msg')";
        $mysqli->query($queryINSERT);
        if ($mysqli->errno) {
            die('Error query insert: ' . $mysqli->error);
        }
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $queryDELETE = "DELETE FROM " . DB_TABLE . " WHERE id = $id";
    $mysqli->query($queryDELETE);
    if ($mysqli->errno) {
        die('Error query delete: ' . $mysqli->error);
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Гостевая книга</title>
  <style>
    .error {
      color: red;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  Ваше имя:<br>
  <input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
  <?php if (isset($errors['name'])) : ?>
    <span class="error"><?php echo $errors['name']; ?></span>
  <?php endif; ?>
  <br>

  Ваш E-mail:<br>
  <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
  <?php if (isset($errors['email'])) : ?>
    <span class="error"><?php echo $errors['email']; ?></span>
  <?php endif; ?>
  <br>

  Сообщение:<br>
  <textarea name="msg" cols="50" rows="5"><?php echo isset($_POST['msg']) ? htmlspecialchars($_POST['msg']) : ''; ?></textarea>
  <?php if (isset($errors['msg'])) : ?>
    <span class="error"><?php echo $errors['msg']; ?></span>
  <?php endif; ?>
  <br>
  <br>

  <input type="submit" value="Добавить!">

</form>

<?php

$querySELECT = "SELECT * FROM " . DB_TABLE . " ORDER BY id DESC";
$resultSELECT = $mysqli->query($querySELECT) or die('Error query select: ' . $mysqli->error);

$rows = $resultSELECT->num_rows;
echo 'Записей в гостевой книге: ' . $rows . '<br>';
while ($row = $resultSELECT->fetch_assoc()) {
    echo "<hr><p><b><a href='mailto:{$row['email']}'>{$row['name']}</a></b></p>";
    echo "<p>{$row['msg']}</p>";
    echo "<div align='right'><a href='gbook.php?id=" . $row['id'] . "'>Удалить</a></div>";
}

$mysqli->close();
?>

</body>
</html>
