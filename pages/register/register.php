<?php
session_start();


include './../email/sndmail.php';


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
$db = "mml"; //database name

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
    
    if($username == "" || $email == "" || $password == ""){
        echo 'ata vitore...';
        $_SESSION['messages'] = 'username , email , password are required';
        header('Location: ./../../');
        
    }else{
        $sql = "SELECT * FROM users WHERE email='$email'";
    $isExist = $cnn->query($sql);

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
                $template = "
                    <hl>Varify Yourself</h1><br>
                        <h3>Your varification code is '$varifyToken' </h3>
                        <p>inter it into the input and varify yourself</p>
                    ";
                if(varifyme($email,$username,$template)){
                    header('Location: ./../../user/varify/');
                }else{
                    header('Location: ./../../');
                }
                
            }


         }
    }
  
}


$cnn->close();