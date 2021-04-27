<?php 
$method = $_SERVER['REQUEST_METHOD'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

//$mail->SMTPDebug = 3;                         

$mail->isSMTP();                                  
$mail->Host = 'smtp.gmail.com';  																						
$mail->SMTPAuth = true;                          
$mail->Username = 'olricomedical@gmail.com';
$mail->Password = 'olricomedical2021'; 
$mail->SMTPSecure = 'ssl';                       
$mail->Port = 465; // 

$mail->setFrom('olricomedical@gmail.com'); 
$mail->addAddress('post@med-or.de');   
$mail->isHTML(true);                   

$mail->Subject = 'Bewerbung von der Med-Or-Website';
$mail->Body = "<strong>Med-Or</strong><br> Name: $name <br> Email: $email <br> Nachricht: $text";

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: main.html');
}
?>