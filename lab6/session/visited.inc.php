<?php
// Код для всех страниц - вывод информации о посещенных страницах

/*
ЗАДАНИЕ 2
- В случае сохранения данных 
	- в массив, проверьте, существует ли он в сессии
	- в строку, преобразуйте её в массив
- Выводите в цикле список всех посещённых пользователем страниц
*/
echo '<h2>Список посещённых страниц</h2>';
if(isset($_SESSION['visitedPages'])){
	foreach($_SESSION['visitedPages'] as $page){
		echo $page . '<br>';
	}
}

// if(isset($_SESSION['visitedPages'])){
// 	foreach(explode('|', $_SESSION['visitedPages']) as $page)
// 		echo htmlspecialchars($page) . '<br>';
// }

?>