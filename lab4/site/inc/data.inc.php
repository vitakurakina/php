<?php
declare(strict_types=1);

$cols = $_GET['cols'] ?? 5;
$rows = $_GET['rows'] ?? 5;
//$color = $_GET['color'] ?? '#ffff00';
$color = $_SESSION['color'] ?? '#ffff00';

$leftMenu = [
    ['href' => 'index.php', 'link' => 'Главная'],
    ['href' => 'index.php?id=about', 'link' => 'О нас'],
    ['href' => 'index.php?id=contact', 'link' => 'Контакты'],
    ['href' => 'index.php?id=table', 'link' => 'Таблица умножения'],
    ['href' => 'index.php?id=calc', 'link' => 'Калькулятор'],
];
?>
