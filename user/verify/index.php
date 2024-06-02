<?php
include './../template/header.php';


if(!isset($_SESSION['isLogin'])){
    header('Location: ./../../');
}


if(isset($_SESSION['varified']) && $_SESSION['varified']== 1){
    $_SESSION['messages'] = "you are varified person";
    header('Location: ./dashboard/');
}

$dbserver = 'localhost';
$dbusername = 'root';
$dbpassword = "";
$db = 'mml';

$cnn = new mysqli($dbserver,$dbusername,$dbpassword,$db);
    if($cnn->connect_error){
        die("There is an error".$cnn->connect_error);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $code = $_POST['varificationCode'];
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM users where email='$email'";
        $data = $cnn->query($sql);
        $data = $data->fetch_assoc();

        if($code == $data['varify_code']){
            
            //update user table
            $sql = "UPDATE users SET varified=true WHERE id=".$data['id'];
            if($cnn->query($sql)== true){
                $_SESSION['varified'] = 1;
                header('Location: ./../dashboard/');
            }
        }else{
            $_SESSION['messages'] = "You have entered incorrect verification code.";
            
        }
        
    }

?>
<div class="container mt-1">
    <div class="row">
        <div class="col-md-12">
        <?php
                    if(isset($_SESSION['messages'])){
                        echo '
                        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                            '.$_SESSION['messages'].'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        unset($_SESSION['messages']);
                    }
                ?>
        </div>
    </div>
</div>

<div class="varification-container">
        <div class="varify">
            <div class="leftimg">
                <img src="./img/varify.svg" alt="">
            </div>
            <div class="inputright">
                <h4>Please check your email</h4>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="varifyInput"> 
                        <input type="text" required class="form-control" name="varificationCode" placeholder="Enter the verification code" id="">
                        <div class="btndiv">
                            <button class="submitBtn canclebtn">CANCLE</button>
                            <input type="submit" class="submitBtn btn-primary" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include './../template/footer.php';
$cnn->close();
?>

