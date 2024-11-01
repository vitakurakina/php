<?php
function getTable(int $cols = 10, int $rows = 10, string $color = "yellow"): int {
    static $count = 0;
    $count++;

    echo "<table>";
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

    return $count;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The multiplication table</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>The multiplication table</h1>

    <?php
    getTable(5, 6, "red");
    echo '<hr/>';
    getTable();
    echo '<hr/>';
    getTable(8, 10);
    echo '<hr/>';
    getTable(5, 5);
    echo '<hr/>';

    echo "<p>getTable function has been called 4 times.</p>";
    ?>
</body>
</html>
