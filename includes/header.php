<?php include "includes/connect.php"?>

 <!-- main-header -->
 <header class="main-header">
        <!-- header upper -->
        <div class="header-top">
            <div class="container">
                <ul class="social-top">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                </ul>
                <div class="right-info">
                    <div class="search-box-area">
                        <div class="search-toggle"><i class="fa fa-search"></i></div>
                        <div class="search-box">
                            <form method="post" action="index.php">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php
                      if(isset($_SESSION['userid']) && $_SESSION['userid'] > 0) { ?>
                        <a href="post-a-blog.php"><button type="submit" class="btn-one" style="width: 120px ;">new post</button></a>
                        <a href="logout.php"><button type="submit" class="btn-one" style="width: 120px ;">Logout</button></a>
                      <?php
                    } else { ?>
                      <a href="login.php"><button type="submit" class="btn-one" style="width: 120px ;">Log in</button></a>
                      <a href="signup.php"><button type="submit" class="btn-one" style="width: 120px ;">Sign Up</button></a>
                    <?php
                    }

                    ?>

                </div>
            </div>
        </div><!-- end header upper -->

        <div class="logo-area">
            <div class="container">
                <div class="logo-box">
                    <a href="index.php"><figure><img src="images\logo\logo2.png" alt="" width="400" height="100" ></figure></a>
                </div>
            </div>
        </div>


        <!-- main-menu -->
        <div class="theme_menu menu-area stricky centred">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu border-top">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php">Home</a></li>
                                       <?php if(isset($_SESSION['userid']) && $_SESSION['userid'] > 0) { 
                                            $sql = " 
                                            SELECT 
                                            ID FROM users ";
                                             global $con;
                                             $query = $con->prepare($sql);
                                             $query->execute(array($_SESSION['userid']));
                                           $result = $query->fetch();
                                       echo '<li><a href="about.php?userId=' . $result['ID'] . '"> Profile </a></li>'; ?>
                                        <li><a href="popular.php">Popular</a></li>
                                        <li><a href="travel.php">Travel</a></li>
                                        <li><a href="Fashion.php">Fashion</a></li>
                                        <li><a href="music.php">Music</a></li>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                    <?php 
                                        }
                                    ?>

                                    <!-- mobile menu -->
                                    <ul class="mobile-menu clearfix">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">Profile</a></li>
                                            <li><a href="popular.php">Popular</a></li>
                                            <li><a href="travel.php">Travel</a></li>
                                            <li><a href="Fashion.php">Fashion</a></li>
                                            <li><a href="music.php">Music</a></li>
                                            <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
           </div>
        </div><!-- end main-menu -->
    </header>
    <!-- end main-header -->
