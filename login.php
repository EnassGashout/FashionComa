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

		$query = "SELECT * FROM users WHERE username = :user AND password = :pass;";
		$stmt = $con->prepare($query);
		$stmt->bindParam(":user", $username);
		$stmt->bindParam(":pass", $password);

		$stmt->execute();
		$result = $stmt->fetch();
		if($stmt->rowCount()) {
			$_SESSION['userid'] = $result['ID'];
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
		<title>login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
        <link rel="stylesheet" href="css/stylelogin.css">
        <link rel="icon" href="images\favicon.ico" type="image/x-icon">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">

				<form action="login.php" method="post">
					<h3>Login</h3>

					<div class="error" style="<?php if(!$error) echo 'display: none'; ?>"  >
						Email or password is wrong
					</div>

            <div class="form-wrapper">
						<input type="text" placeholder="User Name" name="username" id="username" class="form-control">
						<i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
						<input type="password" name="password" id="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
                    </div>

					<button>login
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>

	</body>
</html>
