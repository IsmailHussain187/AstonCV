<!DOCTYPE html>
<HTML lang="eng">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="homestyle.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
<link rel="stylesheet" href="style-def.css">
    <title>AstonCV</title>
    <style>

    </style>
</head>

<body>
    <header id="head">
        <h1><strong>AstonCV</strong></h1>
    </header>

    <div id="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="login.php">Browse CV's</a>
        <a style="float:right" href="login.php">Log In</a>
    	<a href="login.php">Add CV</a>
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
               <h2> There are many easily accessible CV's to look at   </h2> 
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
  border-radius: 16px;" href="login.php">Browse</a>
<img src="rnd.jpg">


         </div>

      </div>
    
      <!-- Second slide --> 
      <div class="slider">
         <div class="legend"></div>
         <div class="content">
            <div class="content-txt">
               <h1> Log in now!  </h1>
               <h2> Access 100's of CV's... </h2>
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
  border-radius: 16px;" href="login.php">Log In</a>
         </div>
      </div>
    
      <!-- Third slide --> 
      <div class="slider">
         <div class="legend"></div>
         <div class="content">
            <div class="content-txt">
               <h1> Add your own CV </h1>
               <h2> Start by creating an account </h2>
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
  border-radius: 16px;" href="register.php">Register Here</a>
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