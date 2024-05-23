<?php
    include './../template/header.php';
    if(isset($_SESSION['isLogin'])){
        header('Location: ./../../');
    }
?>
           <div class="container">
            <div class="row my-5">
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
                <div class="col-md-6 offset-md-3">

                 <div class="card py-3 my-5 border-none shadow" style="border:none;">
                    <div class="card-title text-center">
                        <h3>Login</h3>
                        <hr>
                    </div>
                    <div class="card-body">
                    <form class="g-3" method="post" action="./../../pages/login/auth.php">
                <div class="col-12">
                    <div class="form-group my-3">
                      <label for="email" class="form-label d-inln">Email</label>
                        <input type="email" id="email" name="email" class="form-control custom-width" placeholder="Enter Your Email">
                        <button class="btn btn-primary formIcon">
                            <i class="fa-regular fa-envelope"></i>
                        </button>
                    </div>

                    <div class="form-group my-3">
                      <label for="password"  class="form-label  d-inln">Password</label>
                        <input type="password" id="password" name="password" class="form-control custom-width" placeholder="Password">
                        <button class="btn btn-primary formIcon">
                            <i class="fa-solid fa-lock"></i>
                        </button>
                    </div>
                </div>                
                <!-- <input type="submit" value="Sign Up" class="btn btn-primary btn-block"> -->
                <div class="d-grid">
                  <input type="submit" value="Login" class="btn btn-primary">
                </div>
            </form>
                    </div>
                 </div>
                </div>
            </div>
           </div>


<?php
    include './../template/footer.php'
?>