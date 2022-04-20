<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['id'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM cvs WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO cvs (name, email, password)
					VALUES ('$name', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Successful. Please Log In.')</script>";
				$name = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something went wrong!')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists. Please enter another one.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Did not match. Please try again')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>AstonCV</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-txt" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input">
				<input type="text" placeholder="name" name="name" value="<?php echo $name; ?>" required>
			</div>
			<div class="input">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="register-txt">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>