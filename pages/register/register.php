<?php
session_start();

// for send email 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function varifyme($varify_token,$email){
    try{

        $senderMail = 'asaduzzaman15-4330@diu.edu.bd';
        $mail = new PHPMailer(true);             
        $mail->isSMTP();                                     //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';               //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                            //Enable SMTP authentication
        $mail->Username   = $senderMail;                     //SMTP username
        $mail->Password   = 'ffnz xzad fbwj xujs';           //SMTP password
        $mail->SMTPSecure = 'lts';                           //Enable implicit TLS encryption
        $mail->Port       = 587;
        $mail->setFrom($senderMail);                          //add sender
        $mail->addAddress($email);                            //Add a recipient
        $mail->isHTML(true);   
        $mail->Subject = 'This email is for your varification';  //subject of this email

        $template = "
        <hl>Varify Yourself</h1><br>
            <h3>Your varification code is '$varify_token' </h3>
            <p>inter it into the input and varify yourself</p>
        ";

            $mail->Body    =  $template;
            $mail->send();

        return true;

    }catch(Exception $e){
        
        return false;
    }
    
 }

 //generation varification code
 function generateText(){
    $letter = 'abcdefghijklmnopqrstuvwxyz123456789';
    $code = "";
    for($i=0;$i<5;$i++){
        $index = rand(0,34);
        $code = $code . $letter[$index];
    }
    return $code;
}


//for database connection
$dbserver = 'localhost';
$dbusername = 'root';
$dbpassword = "";
$db = 'mml';

$cnn = new mysqli($dbserver,$dbusername,$dbpassword,$db);
    if($cnn->connect_error){
        die("there is error".$cnn->connect_error);
    }

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $first_name = $_POST['first_name'] ?? null;
    $last_name = $_POST['last_name'] ?? null;
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM users WHERE email='$email'";
    $isExist = $cnn->query($sql);
   

    if($username == "" || $email == "" || $password == ""){
        echo 'ata vitore...';
        $_SESSION['messages'] = 'username , email , password are required';
        header('Location: ./../../');
        
    }else{

        if( $isExist->num_rows > 0){
            $_SESSION['messages'] = "this email already taken";
            header('Location: ./../../');
         }else{


            $password = password_hash($password,PASSWORD_DEFAULT);
            $varifyToken = generateText();
            $sql = "INSERT INTO users(username,first_name,last_name,email,password,varify_code)
            VALUES('$username','$first_name','$last_name','$email','$password','$varifyToken')
            ";

            if($cnn->query($sql) == true){

                $_SESSION['email'] = $email;
                $_SESSION['isLogin'] = true;
                $_SESSION['varified'] = 0;
                $_SESSION['username'] = $username;
                if(varifyme($varifyToken,$email)){
                    header('Location: ./../../user/varify/');
                }else{
                    header('Location: ./../../');
                }
                
            }


         }
    }
  
}


$cnn->close();