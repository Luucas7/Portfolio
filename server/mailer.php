<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../lib/PHPMailer/src/Exception.php';
require '../lib/PHPMailer/src/PHPMailer.php';
require '../lib/PHPMailer/src/SMTP.php';
require '../config/config.php';

/*
    Fonction d'envoi de mail
        Paramètres :
            - $name : nom de l'utilisateur
            - $email : email de l'utilisateur
            - $token : token de vérification
    Retour :
        - true si le mail a été envoyé
        - false si le mail n'a pas été envoyé
        
    */
function sendMail($name, $email, $body)
{
    $newMail = new PHPMailer(true);

    try {
        //Paramètres du serveur SMTP
        $newMail->isSMTP();
        $newMail->SMTPDebug = 0;
        $newMail->SMTPSecure = 'tls';
        $newMail->Host = 'smtp.gmail.com';
        $newMail->SMTPAuth = true;
        $newMail->Username = SMTP_HOST;
        $newMail->Password = SMTP_PASS;
        $newMail->Port = 587;

        //Destinataire
        $newMail->setFrom(SMTP_HOST, $name);
        $newMail->addAddress("merlin.lucas99@gmail.com", "Lucas");

        //Contenu du mail
        $newMail->isHTML(true);
        $newMail->Subject = $email."a envoyé un message";   
        $newMail->Body = $body;
        $newMail->send();

        return true;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
echo $name;
echo $email;
echo $message;
sendMail($name, $email, $message);