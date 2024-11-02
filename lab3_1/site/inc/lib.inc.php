<?php

declare(strict_types=1);

/**
 * Генерирует таблицу умножения с указанными цветом, количеством строк и столбцов.
 *
 * @param int $cols 
 * @param int $rows 
 * @param string $color 
 */
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

function getMenu($menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo "</ul>";
}
