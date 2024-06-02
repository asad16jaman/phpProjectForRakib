<?php

// for send email 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


function varifyme($email,$username,$messages, $subject){
    try{

        $senderMail = 'asaduzzaman15-4330@diu.edu.bd';//this variable contain sender mail-
        $mail = new PHPMailer(true);             
        $mail->isSMTP();                                     //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';               //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                            //Enable SMTP authentication
        $mail->Username   = $senderMail;                     //SMTP username
        $mail->Password   = 'yyxp uatg kxtt xblj';//SMTP password
        $mail->SMTPSecure = 'lts';                           //Enable implicit TLS encryption
        $mail->Port       = 587;
        $mail->setFrom($senderMail,'admin');                          //add sender
        $mail->addAddress($email,$username);                            //Add a recipient
        $mail->isHTML(true);   
        $mail->Subject =  $subject;  //subject of this email

        $mail->Body    =  $messages;
        $mail->send();

        return true;

    }catch(Exception $e){
        
        return false;
    }
    
 }




