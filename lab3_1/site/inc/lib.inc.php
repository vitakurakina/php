<?php

declare(strict_types=1);

/**
 * Генерирует таблицу умножения с указанными цветом, количеством строк и столбцов.
 *
 * @param int $cols 
 * @param int $rows 
 * @param string $color 
 * */
function getTable($rows = 10, $cols = 10) {
    echo "<table border='1' cellpadding='5'>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function getMenu($menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo "</ul>";
}
?>
