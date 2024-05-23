<?php
include './../template/header.php';
if(!isset($_SESSION['isLogin']) || $_SESSION['varified'] != '1'){
    header('Location: ./../../');
}



?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>this is dashboard and unvarified user cannot see this page</h1>
        </div>
        <div class="coll">
            <a href="./../logout/" class="btn btn-primary">Logout</a>
        </div>
    </div>
</div>




<?php

include './../template/footer.php';
?>
