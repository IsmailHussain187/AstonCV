<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
$key = $_POST['keyprogramming'];
	$profile = $_POST['Profile'];
	$education = $_POST['Education'];
	$url = $_POST['URLlinks'];

$sql = "INSERT INTO cvs (keyprogramming, profile, education, URLlinks)
					VALUES ('$key', '$profile', '$education', '$url')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


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
            <p class="Add CV" style="font-size: 2rem; font-weight: 800;">Add CV</p>
            <div class="input-group">
				<input type="text" placeholder="keyprogramming" name="keyprogramming" value="<?php echo $key; ?>">
			</div>
            <div class="input-group">
				<input type="text" placeholder="Profile" name="Profile" value="<?php echo $profile; ?>">
			</div>
            <div class="input-group">
				<input type="text" placeholder="Education" name="Education" value="<?php echo $education; ?>">
			</div>
            <div class="input-group">
				<input type="text" placeholder="URL Links" name="URLlinks" value="<?php echo $url; ?>">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Add details to Profile</button>
			</div>

		</form>
	</div>
</body>
</html>
