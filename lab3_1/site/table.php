<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Таблица умножения</title>
  <link rel="stylesheet" href="style.css">
  <style>
    table {
      border: 2px solid black;
      border-collapse: collapse;
      width: auto;
    }
    th, td {
      padding: 10px;
      border: 1px solid black;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <img src="logo.png" width="130" height="80" alt="Наш логотип" class="logo">
    <span class="slogan">приходите к нам учиться</span>
  </header>

  <section>
    <h1>Таблица умножения</h1>

    <form action="table.php" method="get">
      <label>Количество колонок: </label><br>
      <input name="cols" type="number" value="5" min="1"><br>
      <label>Количество строк: </label><br>
      <input name="rows" type="number" value="5" min="1"><br>
      <label>Цвет: </label><br>
      <input name="color" type="color" value="#ff0000" list="listColors">
      <datalist id="listColors">
        <option value="#ff0000">Красный</option>
        <option value="#00ff00">Зелёный</option>
        <option value="#0000ff">Синий</option>
      </datalist><br><br>
      <input type="submit" value="Создать">
    </form>
    <br>

    <?php
    include 'inc\lib.inc.php';
    $cols = isset($_GET['cols']) ? (int)$_GET['cols'] : 5;
    $rows = isset($_GET['rows']) ? (int)$_GET['rows'] : 5;
    $color = isset($_GET['color']) ? $_GET['color'] : '#ff0000';

    getTable($cols, $rows, $color);
    ?>
  </section>

  <nav>
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href="index.php">Домой</a></li>
      <li><a href="about.php">О нас</a></li>
      <li><a href="contact.php">Контакты</a></li>
      <li><a href="table.php">Таблица умножения</a></li>
      <li><a href="calc.php">Калькулятор</a></li>
    </ul>
  </nav>

  <footer>
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 20xx
  </footer>
</body>
</html>
