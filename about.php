
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Profile</title>

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
    <?php
    if(isset($_GET['userid'])){
        $id = $_GET['userid'];
        $sql = "
        SELECT FullName, favoriteQuote, workfield, bio, userIMG, ID as userId
         FROM users WHERE users.ID = ?";

         global $con;
         $query = $con->prepare($sql);
         $query->execute(array($id));
         $result = $query->fetch();
    }
    ?>

    <!-- about section -->
    <section class="about-section sp-seven">
        <div class="container">
            <div class="img-box">
                <figure><img src="images/users/<?php echo $result['userIMG'] ?>" alt=""></figure>
            </div>
            <div class="about-content">
                <div class="title centred">
                    <h3> <?php echo $result['FullName']; ?></h3>
                    <div class="text"><?php echo $result['workfield']; ?></div>
                </div>
                <div class="about-content-one">
                    <div class="text-style-one">
                        <div class="bold-text">B</div>
                        <p><?php echo $result['bio'] ?> </p>
                    </div>
                   
                    <div class="quote-text">
                       <?php echo $result['favoriteQuote']; ?>
                    </div>
                </div>
                <div class="about-content-two">
                    <?php
                    $sql = "
                    SELECT blogs.ID, blogTitle 
                    FROM blogs 
                    WHERE userID = ?;
                    ";
                    global $con;
                    $query = $con->prepare($sql);
                    $query->execute( array($_GET['userId']) );
                    $results = $query->fetchAll();
                    foreach($results as $result) {
                    ?>
                    <div class="title-text"></div>
                    <div class="text">
                        <p>some of my posts</p>
                    </div>
                    <ul class="list">
                        <li><a href="post1.php?blogID=<?php echo $result['ID']; ?>"> <?php echo $result['blogTitle']; ?> </a></li>
                        
                        
                    </ul>
                    <?php } ?>
                    <div class="text">
                        <p>That is the way we all be came the Brady Bunch these to days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the artist kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill the movie star the professor and Mary Ann here on Gilligans Isle these days are all Happy and Free these days are all share them with me oh baby as long as we live its you and me baby these men promptly escaped from a maximum security stock ade to the Los Angeles underground the movie star the professor and Mary Ann here on Gilligans Isle the need no welfare states starship enterprise the Brady Bunch that's the way we all be  these days came the Brady Bunch.</p>
                    </div>
                </div>
                <div class="about-content-three">
                    <div class="signature"><figure><img src="images\about\signature.png" alt=""></figure></div>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
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
