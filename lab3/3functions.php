<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modules</title>
</head>
<body>
<h1>Загруженные модули</h1>
<?php
    $extensions = get_loaded_extensions();

    foreach ($extensions as $extension) {
        echo "<h2>$extension</h2>";
        
        $functions = get_extension_funcs($extension);

        if ($functions !== false) {
            echo "<pre>";
            print_r($functions);
            echo "</pre>";
        } else {
            echo "<p>Функции не найдены для модуля $extension.</p>";
        }
    }
?>
</body>
</html>
