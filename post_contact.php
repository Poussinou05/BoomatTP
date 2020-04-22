<?php

//$errors = [];
//
//
//if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == '') {
//    $errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
//}
//
//if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
//    $errors['name'] = "Vous n'avez pas renseigné votre nom";
//}
//
//if(!array_key_exists('email', $_POST) || $_POST['email'] == '') {
//    $errors['email'] = "Vous n'avez pas renseigné votre email";
//}
//
//if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
//    $errors['message'] = "Vous n'avez pas renseigné votre message";
//}
//
//if(!empty($errors)){
//    session_start();
//    $_SESSION['errors'] = $errors;
//    header('Location: contact.php');
//}else{
//    $message = $_POST['message'];
//    $headers = 'FROM = pixelleart@gmail.com';
//    mail('lola@netcourrier.com', 'Formulaire de contact', $message, $headers);
//
//}


// load composer packages
require __DIR__ . '/vendor/autoload.php';


// SMTP server configuration
$smtp_server = 'smtp.netcourrier.com';
$username = 'lola@netcourrier.com';
$password = 'ben0807';
$port = '587';
$encryption = 'tls';


$firstname = $_POST['firstname'];
$name = $_POST['name'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$message = $_POST['message'];
//$mailboumat = 'lola@netcourrier.com';
if($reason = 1 || $reason = 2)
{
//    $mailboumat = 'a.mathieu@boumattp.fr';
    $mailboumat = 'lola@netcourrier.com';
}else{
//    $mailboumat = 'dimitri.mathieu@boumattp.fr';
    $mailboumat = 'helene.telliez@gmail.com';

}
// create message
$message = new Swift_Message();
$message->setSubject('Test Message Using SMTP Protocol!')
    ->setFrom([$email => 'Admin'])
    ->setTo([$mailboumat => 'Normal User'])
    ->setBody('This is Message body from Swift mailer SMTP test script!');

// create transport
$transport = new Swift_SmtpTransport($smtp_server, $port, $encryption);
$transport->setUsername($username)
    ->setPassword($password);

// pass transport to the swift mailer
$mailer = new Swift_Mailer($transport);

// send email
$result = $mailer->send($message);

if ($result) {
    echo "Votre message a été envoyé avec succès!";
}else{
    echo "yo";
}




//// create message
//$message = new Swift_Message();
//$message->setSubject('Test Message Using SMTP Protocol!')
//    ->setFrom([$mailboumat => 'Admin'])
//    ->setTo([$mailboumat => 'Normal User'])
//    ->setBody('This is Message body from Swift mailer SMTP test script!');
//
//// create transport
//$transport = new Swift_SmtpTransport($smtp_server, $port, $encryption);
//$transport->setUsername($username)
//    ->setPassword($password);
//
//// pass transport to the swift mailer
//$mailer = new Swift_Mailer($transport);
//
//// send email
//$result = $mailer->send($message);
//
//if ($result) {
//    echo "Message has been successfully sent!";
//}





