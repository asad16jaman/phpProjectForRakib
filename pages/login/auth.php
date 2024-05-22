<?php
 session_start();
 $dbserver = 'localhost';
 $dbusername = 'root';
 $dbpassword = "";
 $db = 'mml';

$cnn = new mysqli($dbserver,$dbusername,$dbpassword,$db);
    if($cnn->connect_error){
        die("there is error".$cnn->connect_error);
    }

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email='$email'";
    $myuser = $cnn->query($sql);
    if($myuser->num_rows > 0 ){
        $user = $myuser->fetch_assoc();
        if(password_verify($password,$user['password'])){
            $_SESSION['isLogin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['varified'] = $user['varified'];
            header('Location: ./../../');
        }else{
            $messages = "given creadential is incurrect...";
            $_SESSION['messages'] = $messages;
            header('Location: ./../../user/login/');
        }
    }else{
        $messages = "You are not registered";
        $_SESSION['messages'] = $messages;
        header('Location: ./../../user/login/');
    }
        
}

$cnn->close();

