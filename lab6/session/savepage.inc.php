<?php
// Код для всех страниц - сохранение информации о посещенных страницах


/*
ЗАДАНИЕ 1
- Создайте в сессии либо 
	- массив для хранения всех посещенных страниц и сохраните в качестве его очередного элемента путь к текущей странице. 
	- строку с уникальным разделителем и последовательно её дополняйте

*/
if (!isset($_SESSION['visitedPages']) || !is_array($_SESSION['visitedPages'])) {
    $_SESSION['visitedPages'] = [];
}
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];


// if(!isset($_SESSION['visitedPages'])){
// 	$_SESSION['visitedPages'] = '';
// }
// $_SESSION['visitedPages'] .=$_SERVER['PHP_SELF'] . '|';

?>