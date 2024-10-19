<?php
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
	<title>Menu</title>
</head>
<body>
	<h1>Menu</h1>
	<nav>
		<ul class="menu">
			<?php
				foreach ($leftMenu as $item) {
					echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
				}
			?>
		</ul>
	</nav>
</body>
</html>
