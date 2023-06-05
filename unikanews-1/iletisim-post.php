<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;




if ($_POST)
{

  $adi_soyadi =$_POST ['adi_soyadi'];
  $telefon = $_POST ['telefon'];
  $email = $_POST [' email'];
  $mesaj = $_POST [ 'mesaj'];





  $mail_icerik = "Merhaba Yönetici Mail Gönderildi, Bilgiler Aşağıdadır";

  $mail_icerik .= "Adı Soyadı: $adi_soyadi";

  $mail_icerik .= "Tel: $telefon";

  $mail_icerik .= "Mail: $email";

  $mail_icerik .= "Mesaj: $mesaj";







  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';



  $mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = 0;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host = 'mail.furkanduzen.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth = true;                                   //Enable SMTP authentication
  $mail->Username = 'unikanews@furkanduzen.com';                     //SMTP username
  $mail->Password = 'unikanews';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port = 465;




  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );



  //Recipients
  $mail->setFrom('unikanews@furkanduzen.com', 'İLETİŞİM FORMU');
  $mail->addAddress('unikanews@furkanduzen.com', 'ADMİN');     //Add a recipient


  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Subject = 'Unikanews ten Mesaj Var';
  $mail->Body = 'Gönderildi!';
  $mail->AltBody = $mail_icerik;

  $mail->send();
  echo "MESAJ GÖNDERİLDİ, ANA SAYFAYA YÖNLENDİRİLİYORSUNUZ!";
  header("Refresh: 5; index.php");

} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  die();
}





}







?>

