<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Таблица умножения</title>
  <style>
    table {
      border: 2px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 10px;
      border: 1px solid black;
    }

    th {
      background-color: yellow;
    }
  </style>
</head>
<body>
  <h1>Таблица умножения</h1>
  <?php
  $rows = 10;
  $cols = 10;

  echo "<table border='1' cellpadding='5' cellspacing='0'>";
  for ($i = 0; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= $cols; $j++) {
      if ($i == 0 && $j == 0) {
        echo "<th style='background-color: yellow;'></th>";
      } elseif ($i == 0) {
        echo "<th style='text-align: center; background-color: yellow;'>$j</th>";
      } elseif ($j == 0) {
        echo "<th style='text-align: center; background-color: yellow;'>$i</th>";
      } else {
        echo "<td style='text-align: center;'>" . ($i * $j) . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
?>
</body>
</html>

