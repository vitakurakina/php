<?php
declare(strict_types=1);
$message = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $body = trim(htmlspecialchars($_POST['body']));
  $subject = trim(htmlspecialchars($_POST['subject']));
  $headers = array(
    'From' => 'talina.krina@gmail.com',
    'Reply-To' => 'talina.krina@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
  );
  if(mail('talina.krina@gmail.com', $subject, $body)){
      $message = true;
  }
  else { $message = false; }

}
?>
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
      <input type='submit' value='Send'>
    </form>
    <!-- Область основного контента -->
     <?=$message ? 'Sent' : 'Not sent';?>