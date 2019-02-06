<?php 
include 'includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>POST A BLOG</title>

<!-- Stylesheets -->
<link href="css\style.css" rel="stylesheet">
<link href="css\responsive.css" rel="stylesheet">
<link rel="icon" href="images\favicon.ico" type="image/x-icon">
<link href="css\summernote.css" rel="stylesheet" />
<style>
    .inputfile + label {
  font-size: 1.25em;
  font-weight: 700;
  padding:8px;
  width: 100%;
  margin-top:9px;
  color: grey;
  border-radius: 5px;
  background-color: white;
  display: inline-block;
  cursor: pointer;
  text-align: center;
}
.form-wrapper {
  position: relative; }
  .form-wrapper i {
    position: absolute;
    bottom: 9px;
    right: 0; }
</style>
</head>
<!-- page wrapper -->
<body class="boxed_wrapper">
    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->
    <?php include "includes/header.php" ;?>
    <!-- contact section -->
    <?php 
      $isError = false ;
      $message ="";

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $title = $_POST['title'];
       $category = $_POST['category'];
           $desc = $_POST['desc'];
           $image = $_FILES['file'];

           if(empty($title)){
            echo "error in title";
            $message .= " please enter the title<br />" ;
            $isError = true ;
        }
        if(empty($category)){
            echo "error in category";
            $message .= " please enter the category of the post<br />" ;
            $isError = true ;
        }
        if(empty($desc)){
            echo "error in desc";
            $message .= " please enter the description of the blog<br />" ;
            $isError = true ;
        }

           if( !empty($image['name']) ) {
            $imageName = rand(0, 100000) . "_" . $image['name'];
            move_uploaded_file($image['tmp_name'], "images/blog/" . $imageName);
          } else {
            $imageName = "default.jpeg";
          } 
          if ($isError == false && isset($_SESSION['userid']) )
        {
            global $con;

            $query1 = $con->prepare(
                "SELECT users.ID FROM users WHERE users.ID = ?;"
            );

            $query1->execute(array( $_SESSION['userid'] ));
            $result = $query1->fetch();

            $id = $result['ID'];

            $query = $con->prepare("INSERT INTO blogs
            SET 
            blogTitle = ? ,
            blogDesc =? ,
            blogIMG = ? ,
            specID =? ,
            userID =? ,
            addDate = NOW()
            ;");

        $query->execute(
             array( $title , $desc , $imageName, $category, $id  ));
          }

    }else {

    echo "error";
}


	  
         
    ?>

    <section class="contact-section sp-eight">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                            <div class="contact-form-area">
                                    <div class="title-text-two">Post a Blog </div>
                                    <div class="rd-form rd-mailform form-lg">
                                        <div class="alert alert-danger hide_alert <?php
                                     if($isError == true) { echo'show_alert';} ?>" id="erralert" style="display:none;">
                                            <strong> <?php echo $message ?> </strong>
                                        </div>
                                    <form action="post-a-blog.php" method="POST" enctype="multipart/form-data" class="default-form" >
                                        <div class="row">
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" name="title" value="" placeholder="Title" required="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                      <select placehoder="Category" name="category">
                                                          <option label="Select a category" disabled selected></option>
                                                          <?php
                                                          global $con;
                                                          $query = $con->prepare("SELECT * FROM categories;");
                                                          $query->execute();
                                                          $categories = $query->fetchAll();
                                                          foreach($categories as $category){
                                                              echo '<option value="' . $category['ID'] . '">' . $category['catName'] . '</option>';
                                                          }
                                                          ?>
                                                      </select>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <textarea class="description" placeholder="Description" name="desc" required=""></textarea>
                                                    </div><br>

                                                    <div class="form-wrapper col-md-12 col-sm-12 col-xs-12">
                                                       <input type="file" name="file" id="file" class="inputfile" accept="image"/>
                                                     <label for="file" style="border: #f3a28b solid 1px">Choose a picture</label>
                                                        </div>


                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <button type="submit" style="margin-left: 0" class="btn-one">Post A Blog</button>
                                                    </div>
                                                   
                                                   
                                        </div>
                                 </form>
                         </div>
                    </div>
                </div>
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
<script src="js\summernote.js"></script>
<script src="js\script.js"></script>
<script>
$(document).ready(function() {
      $('.description').summernote( {
        height: 250,
        placeholder: 'Description'
      });
  });
</script>
</body>
<!-- End of .page_wrapper -->
</html>
