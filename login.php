<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['id'])) {
    header("Location: index.html");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM cvs WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['name'];
		header("Location: homeaccount.php");
	} else {
		echo "<script>alert('Incorrect combination! Please try again.')</script>";
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
			<p class="login-txt" style="font-size: 2rem; font-weight: 800;">Log In</p>
			<div class="input">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="register-txt">Don't have an account? <a href="register.php">Register Here!</a></p>
		</form>
	</div>
</body>
</html>