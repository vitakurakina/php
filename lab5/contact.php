<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Фильтрация введенных данных
    //$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    //$body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);

    $subject = htmlspecialchars(trim($_POST['subject']), ENT_QUOTES, 'UTF-8');
    $body = htmlspecialchars(trim($_POST['body']), ENT_QUOTES, 'UTF-8');


    // Проверка, что поля не пусты
    if (!empty($subject) && !empty($body)) {
        // Отправка письма
        $to = 'vitaliia.kurakina@ya.ru';
        $headers = "From: talina.krina@gmail.com";

        if (mail($to, $subject, $body, $headers)) {
            echo '<p>Сообщение отправлено успешно!</p>';
        } else {
            echo '<p>Ошибка при отправке сообщения.</p>';
        }
    } else {
        echo '<p>Пожалуйста, заполните все поля.</p>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section>
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <address>123456 Москва, Малый Американский переулок 21</address>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br>
      <input name='subject' type='text' size="50">
      <br>
      <label>Содержание: </label>
      <br>
      <textarea name='body' cols="50" rows="10"></textarea>
      <br>
      <br>
      <input type='submit' value='Отправить'>
    </form>
    <!-- Область основного контента -->
  </section>

</body>

</html>