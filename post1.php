﻿<?php include "includes/connect.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>POST DETAILS</title>

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

    <?php if(isset($_GET['id'])){
        $id= $_GET['id'];
        $sql = " SELECT blogs.blogIMG , catName , blogs.blogTitle , blogs.addDate , FullName , blogs.blogDesc from blogs
        INNER JOIN users ON blogs.userID = users.ID
        INNER JOIN categories ON blogs.specID = categories.ID where blogs.ID = ? " ;
        global $con ;
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $result = $query->fetch();


     ?>
    <!-- blog side -->
    <section class="blog-side sp-seven blog-style-one standard-post sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <figure><img src="images\blog\<?php echo $result['blogIMG']; ?>" alt=""></figure>
                        <div class="blog-content-one sp-three">
                            <div class="top-content centred">
                                <div class="meta-text"><?php echo $result['catName'] ; ?></div>
                                <div class="title"><h3><?php echo $result['blogTitle'];?></h3></div>
                                <div class="date"><?php echo $result['addDate'] ?>&nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp; <?php echo $result['FullName'] ; ?></div>
                            </div>
                            <div class="text-style-one">
                                
                                <p> <?php echo $result['blogDesc'] ;?>
                                </p>
                            </div>
                            
                            <div class="about-content-two">
                            </div>
                            <hr>
                            <ul class=" centred">
                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 37</a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; 20</a></li>
                                <hr>
                            </ul>
                            
                        </div>
    <?php } ?>
                       <ul id="myUL">
                        <div class="comment-area"id="li">
                            
                            <div class="single-comment">
                                
                            </div>
                            <div class="single-comment">
                               
                            </div>
                            <div class="single-comment">
                               
                            </div>
                        </div>
                        <div class="comment-form">
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                        <div class="sidebar-content">
                            <div class="sidebar-about centred">
                                <div class="sidebar-title">ABOUT THE BLOG </div>
                                <figure class="img-box"><img src="images\logo\logo2.png" alt=""></figure>
                                <div class="name"><a href="about.php">Fashion Coma</a></div>
                                <div class="text"><p>Fashion Coma is a Fashion and beauty blog where girls from all over the world can introduce their beauty and fashion tips but they can also write about music and travel experiences .</p></div>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-post">
                                <div class="sidebar-title">RECENT POST</div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.php"><figure><img src="images\home\p1.jpeg" alt=""></figure></a></div>
                                    <h6><a href="post1.php">Fleeing from the Cylon tyre</a></h6>
                                    <div class="text">JULY 09, 2018</div>
                                </div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.php"><figure><img src="images\home\p2.jpeg" alt=""></figure></a></div>
                                    <h6><a href="post1.php">Life support systems return</a></h6>
                                    <div class="text">MAY 19, 2018</div>
                                </div>
                                <div class="single-post">
                                    <div class="img-box"><a href="post1.php"><figure><img src="images\home\p3.jpeg" alt=""></figure></a></div>
                                    <h6><a href="post1.php">Eoner on a crusade</a></h6>
                                    <div class="text">AUGUST 09, 2018</div>
                                </div>
                                <div class="single-post">
                                        <div class="img-box"><a href="post1.php"><figure><img src="images\home\p4.jpeg" alt=""></figure></a></div>
                                        <h6><a href="post1.php">Aboard were expecting you</a></h6>
                                        <div class="text">SEPTEMBER 10, 2018</div>
                                    </div>
                                    <div class="single-post">
                                        <div class="img-box"><a href="post1.php"><figure><img src="images\home\p5.jpeg" alt=""></figure></a></div>
                                        <h6><a href="post1.php">Our dreams come true</a></h6>
                                        <div class="text">OCTOBER 09, 2018</div>
                                </div>
                            </div>
                            <div class="sidebar-newsletter centred">
                                <div class="title"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;NEWSLETTER</div>
                                <div class="text">These days are all share them wit us</div>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Email Address" required="">
                                        <button type="submit" class="btn-one">SUBSCRIBE</button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-categories">
                                <div class="sidebar-title">CATEGORIES</div>
                                <ul class="categories-list"> 
                                    <li><a href="#">Music<span>(19)</span></a></li>
                                    <li><a href="#">Fashion<span>(30)</span></a></li>
                                    <li><a href="#">Travel<span>(28)</span></a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog side end --> 
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
<script src="js\script.js"></script>
</body><!-- End of .page_wrapper -->
</html>
