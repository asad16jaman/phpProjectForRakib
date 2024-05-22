    <div class="container-fluid bg-light my-6 mt-0" id="home">

        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">Welcome to</h3>
                    <h1 class="display-3 mb-3">Magikal</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">The Next-Gen Social Media platform</div>




                    <div class="d-flex align-items-center pt-5">
                      

                        <div class="homeService">
                            <h3>Our app is launching soon</h3>
                            <img src="./img/Google Play.jpg" alt="">
                            <img src="./img/App store.jpg" alt="">
                        </div>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>

                <div class="col-lg-6">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                    <img class="img-fluid" src="img/profile.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="home-main">
            <div class="home-left">
                <div class="home-welcome">
                    <h3 class="text-primary mb-3">Welcome to</h3>
                    <h1 class="display-3 mb-3">Magikal</h1>
                    <h2 class="typed-text-output d-inline noticText"></h2>
                    <div class="typed-text d-none ">The Next-Gen Social Media platform</div>
                </div>
                <div class="home-app">
                    <div class="myimg">
                        <h3>Our app is launching soon</h3>
                        <img src="./img/Google Play.jpg" alt="">
                        <img src="./img/App store.jpg" alt="">
                    </div>
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    <h5 class="ms-4 mb-0 d-none d-sm-block plybtn">Play Video</h5>
                    </div>
                </div>
            </div>
            <div class="home-right">
                <?php
                    if(isset($_SESSION['isLogin'])){
                        if($_SESSION['isLogin']){
                            $username = $_SESSION['username'];
                            echo  "<span class='btn btn-primary py-3 px-5 signupBtn'>$username</span>";
                            echo  "<span class='btn btn-primary py-3 px-5 signupBtn'>$username</span>";
                        }
                    }else{
                        echo '<a class="btn btn-primary py-3 px-5 signupBtn"  data-bs-toggle="modal" data-bs-target="#userSignupModel">sign up</a>';
                    }
                ?>
                
            </div>
        </div>
    </div> -->
