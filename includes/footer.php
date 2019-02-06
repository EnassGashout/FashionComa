 <!-- main footer -->
 <footer class="footer-style-one main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="logo-wideget footer-wideget">
                        <div class="footer-logo">
                            <a href="index.php"><figure><img src="images\logo\logo2.png" alt="" width="200" height="70"></figure></a>
                        </div>
                        <div class="text">
                            <p>Fashion Coma is a Fashion and beauty blog where girls from all over the world can introduce their beauty and fashion tips but they can also write about music and travel experiences . </p>
                        </div>
                        <ul class="social-style-one">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-post-wideget footer-wideget">
                        <div class="footer-title">RECENT POST</div>
                        <?php 
                                        $sql = "
                                            SELECT * FROM blogs ORDER BY ID DESC LIMIT 5;
                                             ";
                                        global $con;
                                        $query = $con->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll();
                                        foreach($results as $result) { ?>
                                            <div class="single-post">
                                            <div class="img-box"><a href="post1.php?id=<?php echo $result['ID']; ?>"><figure><img src="images\home\p1.jpeg" alt=""></figure></a></div>
                                            <h6><a href="post1.php/blogId=<?php echo $result['ID']; ?>"> <?php
                                                        $title = ""; 
                                                            if(strlen($result['blogTitle']) > 27) {
                                                                $title = substr($result['blogTitle'], 0, 33) . " ... ";
                                                            } else {
                                                                $title = $result['blogTitle'];
                                                            }
                                                            $title = strtolower($title);
                                                            $title = ucfirst($title);
                                                        echo $title; ?></a></h6>
                                            <div class="text"><?php echo $result['addDate']; ?></div>
                                            </div>
                                        <?php } ?> 
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-categories-wideget footer-wideget">
                        <div class="footer-title">CATEGORIES</div>
                        <ul class="categories-list"> 
                            <li><a href="./music.php">Music</a></li>
                            <li><a href="./fashion.php">Fashion</a></li>
                            <li><a href="./travel.php">Travel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main footer end -->

    <!-- footer bottom -->
    <section class="footer-bottom footer-bottom-one centred">
        <div class="container">
            <div class="copyright">CopyrightS © 2019 -  All rights reserved</div>
        </div>
    </section>
    <!-- footer bottom -->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>