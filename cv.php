<?php

include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM cvs WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="homestyle.css" />
    <title>AstonCV</title>
</head>
<body>

<header id="head">
        <h1><strong>AstonCV</strong></h1>
</header>

<div id="navbar">
        <a href="homeaccount.php">Home</a>
        <a class="active" href="Browse.php">Browse CV's</a>
        <a href="addcv.php">Add CV</a>
        <a style="float:right" href="logout.php">Log Out</a>
    	<a style="float:right" <?php echo "<h1>Welcome " . $_SESSION['name'] . "</h1>"; ?> </a>
    </div>

	<?php
	    echo "<h1>Viewing " . $row['name'] . "'s CV</h1>";
	    echo "<h2>Email: " . $row['email'] . "</h2>";
	    echo "<h2>Key programming language: " . $row['keyprogramming'] . "</h2>";
	    echo "<h2>About me: </h2><p>" . $row['profile'] . "</p>";
	    echo "<h2>Education: " . $row['education'] . "</h2>";
	    echo "<h2>URLs: </h2><a href='" . $row['URLlinks'] . "'>" . $row['URLlinks'] . "</a>";
	
	?>
</body>