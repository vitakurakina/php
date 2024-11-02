<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="logo.png" width="130" height="80" alt="Наш логотип" class="logo">
    <span class="slogan">приходите к нам учиться</span>
  </header>
  
  <section>
    <h1>Калькулятор школьника</h1>
    
    <?php
    $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $operator = $_POST['operator'];
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);

        if ($num1 === false || $num2 === false) {
            $result = "Ошибка: введите допустимые числа.";
        } else {
            switch ($operator) {
                case '+':
                    $calcResult = $num1 + $num2;
                    $result = "Результат: $num1 + $num2 = $calcResult";
                    break;
                case '-':
                  $calcResult = $num1 - $num2;
                  $result = "Результат: $num1 - $num2 = $calcResult";
                    break;
                case '*':
                  $calcResult = $num1 * $num2;
                  $result = "Результат: $num1 * $num2 = $calcResult";
                    break;
                case '/':
                    if ($num2 == 0) {
                        $result = "Ошибка: на ноль делить нельзя.";
                    } else {
                      $calcResult = $num1 / $num2;
                      $result = "Результат: $num1 / $num2 = $calcResult";
                    }
                    break;
                default:
                    $result = "Ошибка: неверный оператор.";
                    break;
            }
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label>Число 1:</label>
      <br>
      <input name="num1" type="text" required>
      <br>
      <label>Оператор: </label>
      <br>
      <select name="operator" id="operator">
          <option value="+" selected>+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
      </select>
      <br>
      <label>Число 2: </label>
      <br>
      <input name="num2" type="text" required>
      <br><br>
      <input type="submit" value="Считать">
    </form>

    <!-- Результат вычисления -->
    <?php if ($result !== ''): ?>
      <p><?= htmlspecialchars($result) ?></p>
    <?php endif; ?>
    
  </section>

  <nav>
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href='index.php'>Домой</a></li>
      <li><a href='about.php'>О нас</a></li>
      <li><a href='contact.php'>Контакты</a></li>
      <li><a href='table.php'>Таблица умножения</a></li>
      <li><a href='calc.php'>Калькулятор</a></li>
    </ul>
  </nav>
  
  <footer>
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 20xx
  </footer>
</body>
</html>
