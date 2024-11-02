<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The multiplication table</title>
</head>
<body>
  <h1>The multiplication table</h1>
  <?php
  $rows = 10;
  $cols = 10;
  $color = '#FFD700';

  static $count = 0;
  $count++;

  echo "<table border='1' cellpadding='5' cellspacing='0'>";
  for ($r = 1; $r <= $rows; $r++) {
      echo "<tr>";
      for ($c = 1; $c <= $cols; $c++) {
          if ($r == 1 || $c == 1) {
              echo "<th style='background-color: $color'>" . $r * $c . "</th>";
          } else {
              echo "<td>" . $r * $c . "</td>";
          }
      }
      echo "</tr>";
  }
  echo "</table>";
  ?>
</body>
</html>
