<?php 

include 'config.php';

error_reporting(0);

session_start();



$id = $_SESSION['id'];
$sql = "SELECT * FROM cvs WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$is_employer = $row['employer'];


if (isset($_GET['language']) && $_GET['language'] != "") {
    $language = $_GET['language'];
    $language_sql = "UPDATE cvs SET keyprogramming='$language' WHERE id=$id";
    $conn->query($language_sql);
}

if (isset($_GET['profile']) && $_GET['profile'] != "") {
    $profile = $_GET['profile'];
    $profile_sql = "UPDATE cvs SET profile='$profile' WHERE id=$id";
    $conn->query($profile_sql);
}

if (isset($_GET['education']) && $_GET['education'] != "") {
    $education = $_GET['education'];
    $education_sql = "UPDATE cvs SET education='$education' WHERE id=$id";
    $conn->query($education_sql);
}

if (isset($_GET['url']) && $_GET['url'] != "") {
    $url_link = $_GET['url'];
    $url_link_sql = "UPDATE cvs SET URLlink='$url_link' WHERE id=$id";
    $conn->query($url_link_sql);
}

?>


<!DOCTYPE html>
<HTML lang="eng">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="homestyle.css" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <title>AstonCV</title>

<style>

</style>

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
    
       
   <p style="color: #f2f2f2"> Click any name to view candidate in detail.</p>
   <input type="text" id="name-search" onkeyup="nameSearch()" placeholder="Search a name">
   <input type="text" id="lang-search" onkeyup="lang-Search()" placeholder="Search a language">
   <table id="cvs">
      <tr>
         <th>Name</th>
         <th>Email</th>
         <th>Key Language</th>
      </tr>
 <?php
    $sql = "SELECT * FROM cvs";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td><a href='cv.php?id=" . $row["id"] . "'>" . $row["name"] . "</a></td><td>" . $row["email"] . "</td><td>" . $row["keyprogramming"] . "</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "No results";
    }
    $conn->close();
?>
   </table>
   <script src="search.js"></script>
</body>
</HTML>