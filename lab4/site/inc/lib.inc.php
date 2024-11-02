<?php
declare(strict_types=1);

/**
 * Функция для вывода таблицы умножения
 * 
 * @param int $cols - количество столбцов таблицы,
 * @param int $rows - количество строк таблицы,
 * @param string $color - цвет заголовков (первого столбца и первой строки),
 */
function drawTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): void
{

    //echo '<table>';

    echo '<tr>';
    echo '<th style="background-color:' . $color . ';">*</th>';
    for ($i = 1; $i <= $cols; $i++)
        echo '<th style="background-color:' . $color . ';">', $i, '</th>';
    echo '</tr>';

    for ($i = 1; $i <= $rows; $i++) {
        echo '<tr>';

        echo '<th style="background-color:' . $color . ';">', $i, '</th>';
        for ($j = 1; $j <= $cols; $j++)
            echo '<td>', $i * $j, '</td>';
        echo '</tr>';
    }

    //echo '</table>';

}


/**
 * Функция для создания списка (меню).
 * 
 * @param array $menu - массив,содержащий элементы меню (ассоциативные массивы с парами название - ссылка),
 * @param bool $vertical определяет, будет ли меню вертикальным (true) или горизонтальным (false)
 */
function getMenu(array $menu, bool $vertical = true): void
{
    $menuClasses = $vertical ? 'menu' : 'menu vertical';

    echo "<ul class='$menuClasses'>";
    foreach ($menu as $item)
        echo "<li><a href={$item['href']}>{$item['link']}</a></li>";

    echo '</ul>';

}
