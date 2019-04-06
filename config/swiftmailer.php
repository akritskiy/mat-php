<?php
  require_once('../vendor/autoload.php');
  require_once('keys.php');

  // Create the Transport
  $transport = (new Swift_SmtpTransport($SMTP_provider, $SMPT_port, $SMTP_method))
    ->setUsername($SMTP_email)
    ->setPassword($SMTP_password);

  // Create the Mailer using your created Transport
  $mailer = new Swift_Mailer($transport);
?>
