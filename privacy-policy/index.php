<!DOCTYPE html>
<html lang="en">
<?php
    session_start();

    //importing email sending function
    include './../pages/email/sndmail.php';
?>

<head>
    <meta charset="utf-8">
    <title>ProMan - Personal Portfolio HTML Template</title>
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
    <link href="./../lib/animate/animate.min.css" rel="stylesheet">
    <link href="./../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="./../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./../css/style.css" rel="stylesheet">
</head>



<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51"></body>

<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12">

            <h1 class="privacy">PRIVACY POLICY</h1>
            <div class="privacymain">
            <div>
            <p><span class="boaldtext">
                    Last updated June 01, 2024
            </span></p>
            </div>

            <div class="notic">

                <p>
                    This privacy notice for Magikal.app <span>("we," "us," or "our")</span>, describes how and why we might collect,
                    store, use, and/or share ("process") your information when you use our services
                    ("<span>Services</span>"), such as
                    when you:
                </p>
                <p>
                    <span>Questions or concerns?</span> Reading this privacy notice will help you understand your
                    privacy rights and
                    choices. If you do not agree with our policies and practices, please do not use our Services
                </p>

            </div>

            <div class="summary">
                <p>
                    <span class="boaldtext">
                        This summary provides key points from our privacy notice, but you can find out more details
                        about
                        any of these topics by clicking the link following each key point or by using our table of
                        contents
                        below to find the section you are looking for.
                    </span>
                </p>
                <p>
                    <span>What personal information do we process?</span> When you visit, use, or navigate our Services,
                    we may
                    process personal information depending on how you interact with us and the Services, the choices
                    you make, and the products and features you use. Learn more about personal information you disclose
                    to us.
                </p>

                <p>
                    <span>Do we process any sensitive personal information?</span> We do not process sensitive personal
                    information
                </p>

                <p>
                    <span>Do we receive any information from third parties?</span> We may receive information from
                    public
                    databases, marketing partners, social media platforms, and other outside sources. Learn more about
                    information collected from other sources.
                </p>

                <p>
                    <span>How do we process your information?</span> We process your information to provide, improve,
                    and
                    administer our Services, communicate with you, for security and fraud prevention, and to comply with
                    law. We may also process your information for other purposes with your consent. We process your
                    information only when we have a valid legal reason to do so. Learn more about how we process your
                    information.
                </p>

                <p>
                    <span>In what situations and with which parties do we share personal information?</span> We may
                    share
                    information in specific situations and with specific third parties. Learn more about when and with
                    whom we share your personal information.
                </p>

                <p>
                    <span>What are your rights?</span> Depending on where you are located geographically, the applicable
                    privacy law
                    may mean you have certain rights regarding your personal information. Learn more about your privacy
                    rights.
                </p>


                <p>
                    <span>How do you exercise your rights?</span> The easiest way to exercise your rights is by
                    submitting a data
                    subject access request, or by contacting us. We will consider and act upon any request in accordance
                    with applicable data protection laws.

                </p>

                <p>Want to learn more about what we do with any information we collect? Review the privacy notice in
                    full.
                </p>

            </div>

            <div class="tableOfContent">
                <h1>TABLE OF CONTENTS</h1>
                <ol>
                    <li>WHAT INFORMATION DO WE COLLECT? </li>
                    <li>HOW DO WE PROCESS YOUR INFORMATION?</li>
                    <li>WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</li>
                    <li>DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</li>
                    <li>HOW DO WE HANDLE YOUR SOCIAL LOGINS?</li>
                    <li>IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</li>
                    <li>HOW LONG DO WE KEEP YOUR INFORMATION?</li>
                    <li>DO WE COLLECT INFORMATION FROM MINORS?</li>
                    <li>WHAT ARE YOUR PRIVACY RIGHTS?</li>
                    <li>CONTROLS FOR DO-NOT-TRACK FEATURES</li>
                    <li>DO WE MAKE UPDATES TO THIS NOTICE?</li>
                    <li>HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</li>
                    <li>HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</li>
                </ol>
            </div>

            <div class="ol_one">
                <h1>1. WHAT INFORMATION DO WE COLLECT?</h1>
                <p><span>Personal information you disclose to us</span></p>
                <p>
                    <span>In Short:</span> We collect personal information that you provide to us.
                </p>
                <p>We collect personal information that you voluntarily provide to us when you register on the Services,
                    express an interest in obtaining information about us or our products and Services, when you
                    participate in activities on the Services, or otherwise when you contact us.</p>

                <p>
                    <span>Sensitive Information</span>. We do not process sensitive information
                </p>
                <p>All personal information that you provide to us must be true, complete, and accurate, and you must
                    notify us of any changes to such personal information.</p>

                <p><span>Information automatically collected</span></p>
                <p>
                    <span>In Short:</span> Some information such as your Internet Protocol (IP) address and/or browser
                    and device
                    characteristics — is collected automatically when you visit our Services.
                </p>

                <p>We automatically collect certain information when you visit, use, or navigate the Services. This
                    information does not reveal your specific identity (like your name or contact information) but may
                    include device and usage information, such as your IP address, browser and device characteristics,
                    operating system, language preferences, referring URLs, device name, country, location, information
                    about how and when you use our Services, and other technical information. This information is
                    primarily needed to maintain the security and operation of our Services, and for our internal
                    analytics
                    and reporting purposes</p>

                <p>Like many businesses, we also collect information through cookies and similar technologies.</p>
            </div>

            <div class="ol-two">
                <h1>2. HOW DO WE PROCESS YOUR INFORMATION?</h1>
                <p><span>In Short:</span> We process your information to provide, improve, and administer our Services,
                    communicate
                    with you, for security and fraud prevention, and to comply with law. We may also process your
                    information for other purposes with your consent.</p>
                <p><span>We process your personal information for a variety of reasons, depending on how you interact
                        with
                        our Services.</span></p>

            </div>

            <div class="ol-three">
                <h1> 3. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</h1>
                <p><span>In Short:</span> We may share information in specific situations described in this section
                    and/or with the
                    following third parties.</p>
                <p>We may need to share your personal information in the following situations:</p>
                <p><span>• Business Transfers.</span> We may share or transfer your information in connection with, or
                    during
                    negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion
                    of our
                    business to another company.</p>
                <p><span>• Affiliates.</span> We may share your information with our affiliates, in which case we will
                    require those
                    affiliates to honor this privacy notice. Affiliates include our parent company and any subsidiaries,
                    joint
                    venture partners, or other companies that we control or that are under common control with us.</p>
                <p><span>• Business Partners.</span> We may share your information with our business partners to offer
                    you certain
                    products, services, or promotions</p>

            </div>

            <div class="ol-four">
                <h1>4. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</h1>
                <p><span>In Short:</span> We may use cookies and other tracking technologies to collect and store your
                    information.</p>
                <p>We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store
                    information. Specific information about how we use such technologies and how you can refuse certain
                    cookies is set out in our Cookie Notice.</p>
            </div>

            <div class="ol_five">
                <h1>5. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</h1>
                <p><span>In Short:</span> If you choose to register or log in to our Services using a social media
                    account, we may have
                    access to certain information about you.</p>
                <p>Our Services offer you the ability to register and log in using your third-party social media account
                    details (like your Facebook or Twitter logins). Where you choose to do this, we will receive certain
                    profile information about you from your social media provider. The profile information we receive
                    may vary depending on the social media provider concerned, but will often include your name, email
                    address, friends list, and profile picture, as well as other information you choose to make public
                    on
                    such a social media platform.</p>
                <p>We will use the information we receive only for the purposes that are described in this privacy
                    notice
                    or that are otherwise made clear to you on the relevant Services. Please note that we do not
                    control,
                    and are not responsible for, other uses of your personal information by your third-party social
                    media
                    provider. We recommend that you review their privacy notice to understand how they collect, use,and
                    share your personal information, and how you can set your privacy preferences on their sites and
                    apps.</p>
            </div>

            <div class="ol_six">
                <h1>6. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</h1>
                <p><span>In Short:</span> We may transfer, store, and process your information in countries other than
                    your own.</p>
                <p>Our servers are located in. If you are accessing our Services from outside, please be aware that your
                    information may be transferred to, stored, and processed by us in our facilities and by those third
                    parties with whom we may share your personal information (see "WHEN AND WITH WHOM DO WE
                    SHARE YOUR PERSONAL INFORMATION?" above), in and other countries.</p>
                <p>If you are a resident in the European Economic Area (EEA), United Kingdom (UK), or Switzerland, then
                    these countries may not necessarily have data protection laws or other similar laws as comprehensive
                    as those in your country. However, we will take all necessary measures to protect your personal
                    information in accordance with this privacy notice and applicable law.</p>
            </div>

            <div class="ol_seven">
                <h1>7. HOW LONG DO WE KEEP YOUR INFORMATION?</h1>
                <p><span>In Short:</span> We keep your information for as long as necessary to fulfill the purposes
                    outlined in this
                    privacy notice unless otherwise required by law.</p>
                <p>We will only keep your personal information for as long as it is necessary for the purposes set out
                    in
                    this privacy notice, unless a longer retention period is required or permitted by law (such as tax,
                    accounting, or other legal requirements).</p>
                <p>When we have no ongoing legitimate business need to process your personal information, we will
                    either delete or anonymize such information, or, if this is not possible (for example, because your
                    personal information has been stored in backup archives), then we will securely store your personal
                    information and isolate it from any further processing until deletion is possible.</p>
            </div>

            <div class="ol_eight">
                <h1>8. DO WE COLLECT INFORMATION FROM MINORS?</h1>
                <p><span>In short:</span> We do not knowingly collect data from or market to children under 18 years of
                    age.</p>
                <p>We do not knowingly solicit data from or market to children under 18 years of age. By using the
                    Services, you represent that you are at least 18 or that you are the parent or guardian of such a
                    minor
                    and consent to such minor dependent's use of the Services. If we learn that personal information
                    from
                    users less than 18 years of age has been collected, we will deactivate the account and take
                    reasonable
                    measures to promptly delete such data from our records. If you become aware of any data we may
                    have collected from children under age 18, please contact us at</p>
            </div>

            <div class="ol_nine">
                <h1>9. WHAT ARE YOUR PRIVACY RIGHTS?</h1>
                <p><span>In Short:</span> You may review, change, or terminate your account at any time.</p>
                <p><span>Withdrawing your consent:</span> If we are relying on your consent to process your personal
                    information,
                    which may be express and/or implied consent depending on the applicable law, you have the right to
                    withdraw your consent at any time. You can withdraw your consent at any time by contacting us by
                    using the contact details provided in the section "HOW CAN YOU CONTACT US ABOUT THIS NOTICE?"
                    below.</p>
                <p>However, please note that this will not affect the lawfulness of the processing before its withdrawal
                    nor, when applicable law allows, will it affect the processing of your personal information
                    conducted
                    in reliance on lawful processing grounds other than consent.</p>
                <p><span>Account Information</span></p>
                <p>If you would at any time like to review or change the information in your account or terminate your
                    account, you can submit a request.</p>
                <p>Upon your request to terminate your account, we will deactivate or delete your account and
                    information from our active databases. However, we may retain some information in our files to
                    prevent fraud, troubleshoot problems, assist with any investigations, enforce our legal terms and/or
                    comply with applicable legal requirements.</p>

            </div>

            <div class="ol_ten">
                <h1>10. CONTROLS FOR DO-NOT-TRACK FEATURES</h1>
                <p>Most web browsers and some mobile operating systems and mobile applications include a Do-Not-
                    Track ("DNT") feature or setting you can activate to signal your privacy preference not to have data
                    about your online browsing activities monitored and collected. At this stage no uniform technology
                    standard for recognizing and implementing DNT signals has been finalized. As such, we do not
                    currently respond to DNT browser signals or any other mechanism that automatically communicates
                    your choice not to be tracked online. If a standard for online tracking is adopted that we must
                    follow
                    in the future, we will inform you about that practice in a revised version of this privacy notice.
                </p>
            </div>

            <div class="ol_eleven">
                <h1>11. DO WE MAKE UPDATES TO THIS NOTICE?</h1>
                <p><span>In Short:</span> Yes, we will update this notice as necessary to stay compliant with relevant
                    laws.</p>
                <p>We may update this privacy notice from time to time. The updated version will be indicated by an
                    updated "Revised" date and the updated version will be effective as soon as it is accessible. If we
                    make
                    material changes to this privacy notice, we may notify you either by prominently posting a notice of
                    such changes or by directly sending you a notification. We encourage you to review this privacy
                    notice
                    frequently to be informed of how we are protecting your information.</p>
            </div>

            <div class="ol_tweleve">
                <h1>12. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</h1>
                <p>If you have questions or comments about this notice, you may contact us by email or by mail to Hong
                    Kong.</p>
            </div>

            <div class="ol_thirteen">
                <h1>13. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE
                    COLLECT FROM YOU?</h1>
                <p>Based on the applicable laws of your country, you may have the right to request access to the
                    personal
                    information we collect from you, change that information, or delete it. To request to review,
                    update,
                    or delete your personal information, please fill out and submit a data subject access request.</p>
            </div>


            </div>

        </div>
    </div>
</div>


<?php
include './../pages/contact.php'
?>

<!-- Copyright Start -->
<div class="container-fluid bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom text-secondary" href="#">Magikal.app</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end footerText">
                <span><a href="./../terms-of-services">Terms of Services</a></span>
                <span><a href="./../privacy-policy">Privacy Policy</a></span>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- Copyright End -->

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./../lib/wow/wow.min.js"></script>
    <script src="./../lib/easing/easing.min.js"></script>
    <script src="./../lib/waypoints/waypoints.min.js"></script>
    <script src="./../lib/typed/typed.min.js"></script>
    <script src="./../lib/counterup/counterup.min.js"></script>
    <script src="./../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="./../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="./../js/main.js"></script>

</body>

</html>