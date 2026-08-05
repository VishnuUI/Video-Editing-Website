<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>Konark</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Passion One' rel='stylesheet'>

    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" href="assets/css/revolution/settings.css">
    <!-- Revolution Layers Styles -->
    <link rel="stylesheet" href="assets/css/revolution/layers.css">
    <!-- Revolution Navigation Styles -->
    <link rel="stylesheet" href="assets/css/revolution/navigation.css">
</head>
<body>
<main>
    <header class="style1 w-100">
       
        <div class="menubar w-100">
            <div class="container">
                <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="assets/images/logo.png" alt="Logo" class="logo-img"></a></h1></div><!-- Logo -->
                    <nav>
                        <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
							<li><a href="ourwork.html" title="">Our Work</a></li>
							<li><a href="pricing.html" title="">Pricing</a></li>
                            <li><a href="contact.php" title="">Schedule A Call</a></li>
                        </ul>
                    </nav>
                  
                </div>
            </div>
        </div><!-- Menubar -->
    </header><!-- Header -->
    <div class="sticky-header style1 w-100">
        <div class="container">
            <div class="menubar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img width="185" src="assets/images/logo.png" class="responsive-logo" alt="Logo"></a></h1></div><!-- Logo -->
                <nav>
                       <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
							<li><a href="ourwork.html" title="">Our Work</a></li>
							<li><a href="pricing.html" title="">Pricing</a></li>
                            <li><a href="contact.php" title="">Schedule A Call</a></li>
                        </ul>
                </nav>
                
            </div>
        </div>
    </div><!-- Sticky Header -->
   
    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container d-flex flex-wrap align-items-center justify-content-between">
                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.png"  alt="Logo"></a></h1></div><!-- Logo -->
                <div class="header-btns d-inline-flex flex-wrap align-items-center">
                    <a class="res-menu-btn d-inline-block" href="javascript:void(0);" title=""><i class="fas fa-align-justify"></i></a>
                 
                </div>
            </div>
        </div><!-- Responsive Topbar -->
        <div class="responsive-menu w-100">
            <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.png"  alt="Logo"></a></h1></div><!-- Logo -->
            <ul class="d-inline-flex flex-wrap align-items-center mb-0 list-unstyled">
							<li><a href="ourwork.html" title="">Our Work</a></li>
							<li><a href="pricing.html" title="">Pricing</a></li>
                            <li><a href="contact.php" title="">Schedule A Call</a></li>
                        </ul>
        </div><!-- Responsive Menu -->
    </div><!-- Responsive Header -->
	

	
	<section>
        <div class="w-100 position-relative">
            <div class="pb-80 position-relative w-100 mouse_anim scroll_anim contact-banner">
                <img class="img-fluid position-absolute inner-bg" src="assets/images/banner-inner.png" alt="Title Background Shape" height="329" width="1920" >
                <div class="container">
                    <div class="pg-title-inner text-center position-relative w-100">
										<div class="inner-page-title">
                        <h1 class="contact-banner-title text-center">Contact Us</h1>
                       <p class="contact-des">Have any queries regarding our service? Get in touch with us today and let us know your concerns. We will get back to you at the earliest.</p>
                       </div>                   
				   </div>
                </div>
            </div><!-- Page Title Wrap -->
        </div>
    </section>
	
	
	
	<section>
        <div class="w-100 pb-100 position-relative">
            <div class="container">
                <div class="contact-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-12 col-lg-6 ">
                          <img class="img-fluid contact-img" src="assets/images/about.jpg" alt="" height="450" width="100%">
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="contact-form-wrap mt-40 w-100">
                                
										
												 <?php
						if (isset($_POST["submit"]))
						{ 
							//ini_set('smtp_port', '25');
                        $toemail = "madhavi@codingflic.com"; 
                        $emailsubject = "Contacts List";                         
                        $message_body = "Dear Admin, This Message From Konark website Contacts List<br>";						
						$message_body .= "Name: ".$_POST["name"]."<br>";
						$message_body .= "Email ID: ".$_POST["email"]."<br>";                                			
						$message_body .= "Phone Number: ".$_POST["phone"]."<br>"; 
						$message_body .= "Message: ".$_POST["message"]."<br>";                             			
						
						$headers =  "MIME-Version: 1.0"."\r\n".
						$headers = 	"From: support@abcd.org" . "\r\n" .
						$headers = 	"Reply-To: support@abcd.org" . "\r\n" .
						$headers = 	"content-type:text/html;charset=UTF-8"."\r\n";				
						mail($toemail,$emailsubject,$message_body,$headers) or die ("Failure");
						
						?>
						 <script>
                                alert("Thank you for your request, we will be in contact with you shortly.");
                                window.location="thank-you.html";
                            </script>
					<?php }?>
								
                                <form action="contact.php" method="post">
                                 
                                    <div class="row mrg10">
                                        <div class="col-md-6 col-sm-6 col-lg-12">
                                            <div class="field-box w-100">
                                                <input class="fname" type="text" id="contact-name" name="name" placeholder="Name " required="">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6 col-sm-6 col-lg-12">
                                            <div class="field-box w-100">
                                                <input class="email" type="email" id="contact-email" name="email" placeholder="Email " required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-12">
                                            <div class="field-box w-100">
                                                <input class="phone" type="tel" id="contact-Phone" name="phone" placeholder="Phone" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box w-100">
                                                <textarea class="contact_message" id="contact-message" name="message" placeholder="Message" required=""></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12 field-btn w-100">
                                                <button class="thm-btn2 rounded-pill d-inline-block contact-submit" type="submit" data-complete-text="Well Done!">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Wrap -->
                
            </div>
        </div>
    </section>
    
    <footer>
        <div class="w-100 pt-40 bg-color27 position-relative">
	
            <div class="container">
                <div class="footer-data position-relative w-100">
                    <div class="row">
                          <div class="col-md-4 col-sm-12 col-lg-4">
						<div class="footer-logo-center">
						<a href="index.html" title="Logo">
						<img src="assets/images/logo.png" class="responsive-logo" alt="Logo White">
						</a>
						</div>
						
                           <div class="footer-des">Follow our social media handles to get latest updates on our services.</div>
						   
                            <div class="social-links2 icons-center w-100 mt-20">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank">
                                       <div class="footer-social"> <i class="flaticon-facebook"></i></div>
                                    </a>
                                    <a href="https://twitter.com/" title="Twitter" target="_blank">
                                        <div class="footer-social"><i class="flaticon-twitter"></i></div>
                                    </a>
                                    <a href="https://youtube.com/" title="Youtube" target="_blank">
                                       <div class="footer-social"> <i class="flaticon-youtube"></i></div>
                                    </a>
                                    <a href="https://linkedin.com/" title="Linkedin" target="_blank">
                                       <div class="footer-social"> <i class="flaticon-linkedin"></i></div>
                                    </a>
                                </div>

					
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget w-100 mt-20 footer-text">
                              <ul class=" flex-wrap align-items-center mb-0 list-unstyled">
							<li><a href="index.html" title="">Recreate Plan</a></li>
							<li><a href="ourwork.html" title="">Our Work</a></li>
							<li><a href="pricing.html" title="">Pricing</a></li>
                            <li><a href="contact.php" title="">Careers</a></li>
						 </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="widget w-100 mt-25">
                                <h4 class="footer-title"><b>Schedule A Call</b></h4>
                           
                                 <form class="newsletter position-relative w-100" id="subscribe-form" method="post" action="#">
                                        <input class="brd-rd10 email w-100" type="text" name="name" placeholder="Name" required="">
                                        <input class="brd-rd10 email w-100 mt-10" type="email" name="email" placeholder="Email" required="">
                                        <div class="response w-100"></div>
								<a class="thm-btn2 brd-rd10 submit d-inline-block mt-20" href="contact.php" title="">Let's Discuss</a>

                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- Footer -->

</main><!-- Main Wrapper -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/aos.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/perfect-scrollbar.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/scroll-up-bar.min.js"></script>
<script src="assets/js/custom-scripts.js"></script>

<script src="assets/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/revolution/jquery.themepunch.revolution.min.js"></script>

<script src="assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/revolution/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/revolution/revolution-init.js"></script>
</body>

</html>