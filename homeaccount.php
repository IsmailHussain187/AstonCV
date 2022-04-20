<?php 

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<HTML lang="eng">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="homestyle.css" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
<link rel="stylesheet" href="style-def.css">
    <title>AstonCV</title>
    
<style>

.slide a:hover {
            background-color: #ddd;
            color: black;
        }

  </style>
</head>

<body>
    <header id="head">
        <h1><strong>AstonCV</strong></h1>
    
    </header>

    <div id="navbar">
        <a class="active" href="homeaccount.php">Home</a>
        <a href="Browse.php">Browse CV's</a>
        <a href="addcv.php">Add CV</a>
        <a style="float:right" href="logout.php">Log Out</a>
    	<a style="float:right" <?php echo "<h1>Welcome " . $_SESSION['name'] . "</h1>"; ?> </a>
    </div>

    <script>
        window.onscroll = function () { myFunction() };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
   
<main>
        <div id="slider">
     
   <div class="slides">
      <!-- First slide --> 
      <div class="slider">
         <div class="legend"></div>         
          <div class="content">
            <div class="content-txt">
               <h1> Lots of CV's </h1>
               <h2> There are many easily accessible CV's to look at </h2> 
            </div>
         </div>
         <div class="images">    
	 <a style="margin: 0; position: absolute; top: 50%; left: 50%;
            -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);
  border: none;
  color: #f2f2f2;
  background-color: steelblue;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;" href="Browse.php">Browse</a>
<img src="rnd.jpg">


         </div>

      </div>
    
      <!-- Second slide --> 
      <div class="slider">
         <div class="legend"></div>
         <div class="content">
            <div class="content-txt">
               <h1> Add details to your CV!  </h1>
               <h2> Advertise your skills to recruiters </h2>
            </div>
         </div>
         <div class="images"> 
            <img src="aston1.jpg"> 
  	  <a style="margin: 0; position: absolute; top: 50%; left: 50%;
            -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);
  border: none;
  color: #f2f2f2;
  background-color: steelblue;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;" href="addcv.php">Add Details</a>
         </div>
      </div>
    
      <!-- Third slide --> 
      <div class="slider">
         <div class="legend"></div>
         <div class="content">
            <div class="content-txt">
               <h1> Share this to your friends!  </h1>
               <h2> Employers are more likely to employ candidates from our 
               website than from a direct application </h2>
            </div>
         </div>
         <div class="images"> 
  <a style="margin: 0; position: absolute; top: 50%; left: 50%;
            -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);
  border: none;
  color: #f2f2f2;
  background-color: steelblue;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;" href="homeaccount.php">Share</a>
            <img src="lb.jpg"> 
         </div>
      </div>
    
    
      <!-- Fourth slide --> 
      <div class="slider">
         <div class="legend"></div>
         <div class="content">
            <div class="content-txt">
               <h1> About us </h1>
               <h2> Find out more by clicking the blue button </h2>
            </div>
         </div>
         <div class="images"> 
  <a style="margin: 0; position: absolute; top: 50%; left: 50%;
            -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);
  border: none;
  color: #f2f2f2;
  background-color: steelblue;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;"href="https://www.aston.ac.uk/">About Us</a>
               <img src="his.jpg">
               
         </div>
      </div>
   </div>
</div>
    
    
    </main>
</body>


</HTML>