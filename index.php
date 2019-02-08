<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fashion Coma</title>
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
    <!-- slider-style-four -->
    <section class="slider-style-four">
        <div class="container-fluid">
            <div class="two-column-carousel nav-style-one owl-dots-none">
                <div class="single-item">
                    <figure class="img-box"><img src="images\home\14.jpeg" alt=""></figure>
                    <div class="inner-box">
                        <div class="content blog-content-one">
                            <div class="meta-text"><a href="#">Fashion</a></div>
                            <div class="title"><h3><a href="post2.php">Took a whole lotta trying just to get up</a></h3></div>
                            <div class="date"><span>On</span> JANUARY 07, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <figure class="img-box"><img src="images\home\15.jpeg" alt=""></figure>
                    <div class="inner-box">
                        <div class="content blog-content-one">
                            <div class="meta-text"><a href="#">Fashion</a></div>
                            <div class="title"><h3><a href="post2.php">Star the professor and mary on gilligans</a></h3></div>
                            <div class="date"><span>On</span>JANUARY 19, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-style-four end -->
    <!-- slider content -->
    <section class="slider-content centred sp-one">
        <div class="container">
            <div class="four-column-carousel owl-dots-none owl-nav">
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.php"><figure><img src="images\home\1.jpeg" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Travel</a></div>
                        <div class="title"><h6><a href="post2.php">Love Boat soon will be making another run</a></h6></div>
                    </div>
                </div>
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.php"><figure><img src="images\home\2.jpeg" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Music</a></div>
                        <div class="title"><h6><a href="post2.php">Call him flipper flipper faster than lightning</a></h6></div>
                    </div>
                </div>
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.php"><figure><img src="images\home\3.jpeg" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Fashion</a></div>
                        <div class="title"><h6><a href="post2.php">East side to a deluxe apartment in the sky</a></h6></div>
                    </div>
                </div>
                <div class="carousel-style-one">
                    <div class="img-box"><a href="post2.php"><figure><img src="images\home\4.jpeg" alt=""></figure></a></div>
                    <div class="lower-content">
                        <div class="meta-text"><a href="#">Music</a></div>
                        <div class="title"><h6><a href="post2.php">A maximum security stockade to Los Angeles</a></h6></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider content -->
    <!-- blog side -->
    <section class="blog-side blog-style-one sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="blog-content-three sp-four">
                            <div class="single-item">
                                <div class="single-item-overlay">
                                    <div class="img-box">
                                        <img src="images\home\7.jpeg" alt="">
                                        <div class="overlay">
                                            <div class="inner-box">
                                                <div class="content blog-content-one">
                                                    <div class="meta-text"><a href="#">FASHION</a></div>
                                                    <div class="title"><h3><a href="post1.php">Flying away on a wing and a prayer</a></h3></div>
                                                    <div class="date"><span>On</span> February 10, 2018 &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> PAUL JOHN HEYMAN</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php
                            global $con;
                            $query = "SELECT blogs.ID as blogID, blogIMG,addDate, FullName,blogTitle, blogDesc,catName
                             FROM blogs
                              INNER JOIN users ON blogs.userID = users.ID
                              INNER JOIN categories ON blogs.specID = categories.ID
                              ORDER BY blogs.ID DESC LIMIT 4";
                            $stmt = $con->prepare($query);
                            $stmt->execute();
                            $results = $stmt->fetchAll();

                            if($stmt->rowCount() > 0) {
                              foreach($results as $result) {
                                 ?>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="content-box overlay-item">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="images\blog\<?php echo $result['blogIMG']; ?>" alt=""></figure>
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="content">
                                                            <a href="post1.php?id=<?php echo $result['blogID']; ?>"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content-one blog-content-two sp-three">
                                            <div class="top-content centred">
                                                <div class="meta-text"><a href="#"><?php echo $result['catName']; ?></a></div>
                                                <div class="title"><h4><a href="post1.php?id=<?php echo $result['blogID']; ?>"><?php echo $result['blogTitle']; ?></a></h4></div>
                                                <div class="date"><span>On</span> <?php echo $result['addDate']; ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php echo $result['FullName']; ?></div>
                                            </div>
                                            <div class="text" style="height: 103px; overflow: hidden; wrap-text: wrap">
                                            <?php
                                                $desc = "";
                                                if(strlen($result['blogDesc']) > 250) {
                                                    $desc = substr($result['blogDesc'], 0, 250) . "...";
                                                } else {
                                                    $desc = $result['blogDesc'];
                                                }
                                                $desc = strtolower($desc);
                                                $desc = ucfirst($desc);
                                                echo $desc; ?>
                                            </div>
                                            <ul class="meta-list centred">
                                              <?php
                                                $commentsQuery = "SELECT * FROM comments WHERE blogID = :id";
                                                $stmt = $con->prepare($commentsQuery);
                                                $stmt->bindParam(":id", $result['blogID']);
                                                $stmt->execute();
                                                $comments = $stmt->rowCount();

                                                $likesQuery = "SELECT * FROM likes WHERE blogID = :id";
                                                $stmt = $con->prepare($likesQuery);
                                                $stmt->bindParam(":id", $result['blogID']);
                                                $stmt->execute();
                                                $likes = $stmt->rowCount();
                                              ?>
                                                <li>
                                                  <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> &nbsp; <?php echo $comments; ?> &nbsp; Comments </a> &nbsp;

                                                </li>
                                                <li><i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo $likes; ?> &nbsp; Likes </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              <?php } } ?>
                            <br>
                        </div>
                    </div>
                </div>
               <?php include "includes/side-bar.php" ;?>
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
