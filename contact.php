<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CONTACT</title>

<!-- Stylesheets -->
<link href="css\style.css" rel="stylesheet">
<link href="css\responsive.css" rel="stylesheet">
<link rel="icon" href="images\favicon.ico" type="image/x-icon">
</head>
<!-- page wrapper -->
<body class="boxed_wrapper">
    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->
    <?php include "includes/header.php" ;?>
    <!-- contact section -->
    <section class="contact-section sp-eight">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="contact-info">
                            <figure><img src="images\home\contact.jpeg" alt=""></figure>
                            <div class="lower-content">
                                <div class="title-top centred">
                                    <h3>Contact us</h3>
                                    <div class="text"> Address: Tripoli - Libya <br>
                                    Phone Number : 0910000000</div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form-area">
                            <div class="title-text-two">FILL THE FORM</div>
                            <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-8 col-xs-12">
                                        <input type="text" name="form_name" value="" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-8 col-xs-12">
                                        <input type="email" name="form_email" value="" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Message" name="form_message" required=""></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn-one" data-loading-text="Please wait...">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php include "includes/side-bar.php" ;?>
            </div>
        </div>
    </section>
    <!-- contact section end -->

    <?php include "includes/footer.php"?>
<!--jquery js -->
<script type="text/javascript" src="js\jquery-2.1.4.js"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\owl.carousel.min.js"></script>
<script src="js\wow.js"></script>
<script src="js\validation.js"></script>
<script src="js\jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js\SmoothScroll.js"></script>
<script src="js\html5lightbox\html5lightbox.js"></script>
<script src="js\bootstrap-select.min.js"></script>
<script src="js\nouislider.js"></script>
<script src="js\imagezoom.js"></script>
<script src="js\jquery.bxslider.min.js"></script>
<script src="js\jquery.bootstrap-touchspin.js"></script>
<script src="js\script.js"></script>
</body><!-- End of .page_wrapper -->
</html>
