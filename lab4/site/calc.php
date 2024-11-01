     <?php
    $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $operator = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_STRING);
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
    