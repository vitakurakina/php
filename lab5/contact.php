<?php
declare(strict_types=1);

$message = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input using FILTER_SANITIZE_FULL_SPECIAL_CHARS
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Basic Input Validation
    if (empty($subject) || empty($body)) {
        $message = 'Please fill in all fields.';
    } else {
        // Headers for email
        $headers = [
            'From' => 'talina.krina@gmail.com',
            'Reply-To' => 'talina.krina@gmail.com',
            'X-Mailer' => 'PHP/' . phpversion(),
        ];

        // Attempt to send email
        if (mail('talina.krina@gmail.com', $subject, $body, implode("\r\n", $headers))) {
            $message = 'Message sent successfully!';
        } else {
            $message = 'Error sending message. Please try again later.';
        }
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
    <form method='post'>
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

    <? echo $message ?>
    <!-- Область основного контента -->
  </section>

  <footer>
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 20xx
    <!-- Нижняя часть страницы -->
  </footer>
</body>

</html>