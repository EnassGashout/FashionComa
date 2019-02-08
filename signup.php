<?php include "includes/connect.php"?>

<?php
	$error = false;

	if(isset($_SESSION['userid']) && $_SESSION['userid'] > 0) {
		header("location: index.php");
	}

	if(isset($_POST['username']) && isset($_POST['password'])) {
		global $con;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$fav = $_POST['fav'];
		$spec = $_POST['spec'];
		$bio = $_POST['bio'];
		$fullname = $_POST['fullname'];
		$image = $_FILES['file'];

		if( !empty($image['name']) ) {
            $imageName = rand(0, 100000) . "_" . $image['name'];
            move_uploaded_file($image['tmp_name'], "images/users/" . $imageName);
          } else {
            $imageName = "defult.jpg";
          } 

		$query = "INSERT INTO users(FullName, UserName, Password, email, favoriteQuote, workfield, bio ,userIMG)
		 VALUES(:fname, :uname, :pass, :email, :fav, :spec, :bio , :img)";
		$stmt = $con->prepare($query);
		$stmt->bindParam(":fname", $fullname);
		$stmt->bindParam(":uname", $username);
		$stmt->bindParam(":pass", $password);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":fav", $fav);
		$stmt->bindParam(":spec", $spec);
		$stmt->bindParam(":bio", $bio);
		$stmt->bindParam(":img", $imageName);

		$stmt->execute();
		if($stmt->rowCount()) {
			header("location: index.php");
		} else {
			$error = true;
		}


	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
        <link rel="stylesheet" href="css/stylesignup.css">
        <link rel="icon" href="images\favicon.ico" type="image/x-icon">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">

				<form action="signup.php" method="POST" enctype="multipart/form-data">
					<h3>Sign Up</h3>
					<div class="form-group">
						<input type="text" placeholder="Full Name" name="fullname" id="fname" class="form-control" required>
						<input type="text" placeholder="Username" name="username" id="uname" class="form-control" required>
                    </div>
                    <div class="form-wrapper">
						<input type="email" placeholder="Email Address" name="email" id="email" class="form-control" required>
						<i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
						<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
							<input type="text" name="fav" id="fav" placeholder="Your favorite quote" class="form-control" required>
							<i class="zmdi zmdi-quote"></i>
					</div>
                    <div class="form-wrapper">
						<input type="text" name="spec" id="spec" placeholder="Work Field" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<textarea name="bio" id="bio" rows="4" style=" placeholder="About Me" border-top:none; border-right:none; border-left:none; color: #999999" required></textarea>
                    </div><br>
                    <div class="form-wrapper">
                        <input type="file" name="file" id="file" class="inputfile" accept="image"/>
                        <label for="file" style="border: #f3a28b solid 1px">Choose a picture</label>
                     </div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>

	</body>
</html>
