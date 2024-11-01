<?php

/**
 * Отрисовывает меню в зависимости от переданных параметров.
 *
 * @param array $menu Массив с элементами меню, где каждый элемент содержит 'link' и 'href'.
 * @param bool $vertical Если true, меню будет вертикальным, иначе горизонтальным.
 */
function getMenu(array $menu, bool $vertical = true) {
    $class = $vertical ? "menu vertical" : "menu horizontal";
    
    echo "<ul class='{$class}'>";
    foreach ($menu as $item) {
        echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo "</ul>";
}

// Массив с пунктами меню
$leftMenu = [
    ['link' => 'Home', 'href' => 'index.php'],
    ['link' => 'Contact', 'href' => 'contact.php'],
    ['link' => 'About', 'href' => 'about.php'],
    ['link' => 'Project', 'href' => 'project.php'],
    ['link' => 'Map', 'href' => 'map.php']
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <style>
        .menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        .horizontal li {
            display: inline;
            padding: 5px;
        }
        
        .vertical li {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Меню</h1>
    <?php
    getMenu($leftMenu);
    echo '<hr/>';
    getMenu($leftMenu, false);
    ?>
</body>
</html>
