<?php
$age = 60;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if-elseif-else</title>
</head>
<body>
  <h1>if-elseif-else</h1>
  <?php
  if ($age >= 18 && $age <= 59) {
      echo 'You still have to work and work';
  } elseif ($age > 59) {
      echo 'Its time 4 you to retire';
  } elseif ($age >= 1 && $age <= 17) {
      echo 'Its too early 4 you to work';
  } else {
      echo 'Unknown age';
  }
  ?> 
</body>
</html>

