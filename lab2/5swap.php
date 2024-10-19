<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping</title>
</head>
<body>
<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 5;
$b = 8;

swap($a, $b);

echo '$a = ' . $a . "\n"; // 8
echo '$b = ' . $b . "\n"; // 5
?>
</body>
</html>