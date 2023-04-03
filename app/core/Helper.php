<?php 
require '../vendor/autoload.php';
class Helper {
    public static function setUpMailConfiguration()
    {
      $phpmailer = new PHPMailer\PHPMailer\PHPMailer();
      $phpmailer->isSMTP();
      $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
      $phpmailer->SMTPAuth = true;
      $phpmailer->Port = 2525;
      $phpmailer->Username = '8744f8defe263c';
      $phpmailer->Password = 'bcded7ff644db1';
      return $phpmailer;
    }
}