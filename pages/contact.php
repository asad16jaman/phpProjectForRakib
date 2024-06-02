<?php

    if(isset($_POST['contact'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];

       //this messages will get admin
       $clintmessage = "
        <p>You have got one message</p>
        <span>Name : $name</span> <br> <span>Email : $email</span><br><br>
        <h4>Subject : $subject</h4>
       <p>Meaageg : $message</p>
       ";

        //admin email id .. this email id will get message of client
       $email = 'engineer.rakibrizan@gmail.com';

       $subject = 'Magikal - Contact form subscriber';

        //invoc imail function
       if(varifyme($email,null, $clintmessage, $subject)){
         header('thanks.php');
       }
    }

?>



<div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="#contact">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">    


                    <div class="icondiv">
                        
                        <div class="pt-2 socialIcon">
                            <p class="">Follow Us:</p>
                            <div class="iconController">
                                <a class="btn btn-square btn-primary me-2" href="https://www.x.com/MagikalApp/"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/people/Magikal/61558922415276/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary me-2" href="https://www.youtube.com/@Magikalapp/"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/magikal.app/"><i class="fab fa-instagram"></i></a>
                            </div>
                            
                            <div class="iconController">
                                <a class="btn btn-square btn-primary me-2" href="https://www.tiktok.com/@magikal.app/"><i class="fa-brands fa-tiktok"></i></a>
                                <a class="btn btn-square btn-primary me-2" href="https://www.threads.net/@magikal.app/"><i class="fa-brands fa-threads"></i></a>
                                <a class="btn btn-square btn-primary me-2" href="https://www.snapchat.com/add/magikal.app/"><i class="fa-brands fa-snapchat"></i></a>
                                <a class="btn btn-square btn-primary me-2" href="https://www.tumblr.com/blog/magikalapp/"><i class="fa-brands fa-tumblr"></i></a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                   
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email"  name="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" name="contact" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>