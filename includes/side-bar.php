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
                        <div class="sidebar-newsletter centred">
                            <div class="title"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;NEWSLETTER</div>
                            <div class="text">Subscribe to us</div>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email Address" required="">
                                    <button type="submit" class="btn-one">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-categories">
                            <div class="sidebar-title">ACTIVE CATEGORIES</div>
                            <ul class="categories-list">
                              <?php
                                global $con;
                                $query = "SELECT catName, count(blogs.ID) as numberOfBlogs FROM categories  INNER JOIN blogs ON blogs.specID = categories.ID";
                                $stmt = $con->prepare($query);
                                $stmt->execute();
                                $results = $stmt->fetchAll();

                                foreach($results as $result) { ?>
                                  <li><a href="./<?php echo $result['catName']; ?>.php"><?php echo $result['catName']; ?><span>(<?php echo $result['numberOfBlogs']; ?>)</span></a></li>
                                <?php
                                }
                              ?>
                            </ul>
                        </div>
                    </div>
                </div>
