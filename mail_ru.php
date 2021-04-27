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
$mail->addAddress('med_germany@mail.ru');   
$mail->isHTML(true);                   

$mail->Subject = 'Заявка с med-or';
$mail->Body = "Заявка с сайта Med-Or <br> Имя: $name <br> Номер телефона: $phone <br> Email: $email <br> Тема обсуждения: $text";

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>