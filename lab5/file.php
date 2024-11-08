<?php
declare(strict_types=1);
const FILE_NAME = 'guestBook.txt';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstName = !empty($_POST["fname"]) ? htmlspecialchars(trim($_POST['fname'])) : '';
    $lastName = !empty($_POST["lname"]) ? htmlspecialchars(trim($_POST['lname'])) : '';
    $strForFile = "$firstName $lastName\n";
    file_put_contents(FILE_NAME, $strForFile, FILE_APPEND);
    header('Location:'. $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Работа с файлами</title>
</head>
<body>

<h1>Заполните форму</h1>

<form method="post" action="<?=$_SERVER['PHP_SELF']?>">

Имя: <input type="text" name="fname"><br>
Фамилия: <input type="text" name="lname"><br>

<br>

<input type="submit" value="Отправить!">

</form>

<?php
if(file_exists(FILE_NAME))
    { 
        $inFile = file(FILE_NAME, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
        echo '<br>';
        foreach ($inFile as $key => $value) {
            echo ($key+1) . '). ' . $value . '<br>';
        }
        echo '<br>Размер файла ' . FILE_NAME . ': ' . filesize(FILE_NAME) . ' байт';
}
?>
</body>
</html>