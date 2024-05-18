<?php
include './../template/header.php';
if(!isset($_SESSION['isLogin']) || $_SESSION['varified'] != '1'){
    header('Location: ./../../');
}


?>


<h1>this is dashboard and unvarified user cannot see this page</h1>


<?php

include './../template/footer.php';
?>
