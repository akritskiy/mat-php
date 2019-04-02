<?php
  require_once('../vendor/autoload.php');

  // Create the Transport
  $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('matchisuru@gmail.com')
    ->setPassword('Lunch@01');

  // Create the Mailer using your created Transport
  $mailer = new Swift_Mailer($transport);
?>
