<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    
    //importing email sending function
    include './pages/email/sndmail.php';
?>

<head>
    <meta charset="utf-8">
    <title>Magikal - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">  --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51"></body>
<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<?php

if (isset($_SESSION['messages'])) {
    $mess =  $_SESSION['messages'];
    echo "
        <script>
            alert('$mess')
        </script>
    ";
    unset($_SESSION['messages']);
}

?>

<!-- Navbar Start -->
<?php
    include './pages/navbar.php'
?>
<!-- Navbar End -->


<!-- Header Start -->
<?php
    include './pages/home.php'
?>
<!-- Header End -->



<!-- Video Modal Start -->
<?php
    include './pages/videomodal.php'
?>
<!-- Video Modal End -->


<!-- About Start -->
<?php
    include './pages/about.php'
?>
<!-- About End -->


<!-- Expertise Start -->
<?php
    include './pages/experience.php'
?>
<!-- Expertise End -->


<!-- Service Start -->
<?php
    include './pages/service.php'
?>
<!-- Service End -->


<!-- Projects Start -->
<?php
    include './pages/project.php'
?>
<!-- Projects End -->


<!-- Team Start -->
<?php
    include './pages/team.php'
?>
<!-- Team End -->


<!-- Testimonial Start -->
<?php
    include './pages/testimonial.php'
?>
<!-- Testimonial End -->




<!-- Contact Start -->
<?php
    include './pages/contact.php'
?>
<!-- Contact End -->

<!-- Copyright Start -->
<div class="container-fluid bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; 2024 <a class="border-bottom text-secondary" href="#">Magikal.app</a> All Rights Reserved
            </div>
            <div class="col-md-6 text-center text-md-end footerText">
                <span><a href="./terms-of-services">Terms of Services</a></span>
                <span><a href="./privacy-policy">Privacy Policy</a></span>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- Copyright End -->


<!-- user signup modal start -->
<?php
    include './pages/signup.php'
?>
<!-- user signup modal end -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>