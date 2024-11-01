<?php
	
	$login = ' User ';
	$password = 'megaP@ssw0rd';
	$name = 'иван';
	$email = 'ivan@petrov.ru';
	$code = '<?=$login?>';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>

<?php
	$login = trim(strtolower($login));
	echo "<p>Логин: $login</p>";

	function checkPasswordComplexity($password) {
		
		if (preg_match('/[A-Z]/', $password) &&
			preg_match('/[a-z]/', $password) &&
			preg_match('/\d/', $password) &&
			strlen($password) >= 8) {
			return true;
		}
		return false;
	}


	if (checkPasswordComplexity($password)) {
		echo "<p>Пароль соответствует требованиям безопасности.</p>";
	} else {
		echo "<p>Пароль не соответствует требованиям безопасности.</p>";
	}

	$name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
	echo "<p>Имя: $name</p>";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<p>Email корректен: $email</p>";
	} else {
		echo "<p>Email некорректен</p>";
	}

	echo "<p>Code: $code</p>";
?>
</body>
</html>
